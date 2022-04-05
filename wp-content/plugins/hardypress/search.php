<?php

class HardypressSearch {
  public function __construct() {
    add_action( 'wp_enqueue_scripts',  array($this, 'search_public_scripts') );
    add_action( 'admin_enqueue_scripts',  array($this, 'search_admin_scripts') );
    add_filter("get_search_form", array($this, "tweak_search_form"));
  }

  public function search_public_scripts() {
    wp_register_script( "hardypress_search", plugins_url("search.js", __FILE__), '', '1.0', true);
    wp_enqueue_script("hardypress_search");
    wp_register_style("hardypress_search", plugins_url("search.css", __FILE__));
    wp_enqueue_style("hardypress_search");
    wp_localize_script( 'hardypress_search', 'hardypressSearch', array('searchUrl' => getenv("HARDYPRESS_API_BASE_URL") . getenv("HARDYPRESS_SEARCH_URL")));
  }

  public function search_admin_scripts() {
    wp_register_script( "hardypress_search", plugins_url("search.js", __FILE__), '', '1.0', true);
  }

  public function tweak_search_form($form) {
    return "<div class='datocms-search-form'>" . $form . "</div>";
  }
}

