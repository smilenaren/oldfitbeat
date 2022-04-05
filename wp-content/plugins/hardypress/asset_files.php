<?php

class HardypressAssetFilesEndpoint {
  public function __construct() {
    add_action("wp_ajax_nopriv_public_asset_dirs", array($this, "public_asset_dirs"));
    add_action("wp_ajax_public_asset_dirs", array($this, "public_asset_dirs"));
    add_action("wp_ajax_nopriv_public_asset_files", array($this, "public_asset_files"));
    add_action("wp_ajax_public_asset_files", array($this, "public_asset_files"));
    add_action("wp_ajax_nopriv_public_asset_dir_files", array($this, "public_asset_dir_files"));
    add_action("wp_ajax_public_asset_dir_files", array($this, "public_asset_dir_files"));
  }

  public function public_asset_dirs() {
    $wp_content_path = dirname(dirname(dirname(__FILE__)));

    $dirs = array();

    foreach ($this->subdirs($wp_content_path) as $path => $dir) {
      if ($dir->isDir()) {
        $dirs[] = str_replace($wp_content_path, '/wp-content', $dir);
      }
    }

    wp_send_json($dirs);
  }

  public function public_asset_dir_files() {
    $wp_content_path = dirname(dirname(dirname(__FILE__)));
    $path = dirname(dirname(dirname(dirname(__FILE__)))) . $_GET['dir'];

    $files = array();

    foreach (glob($path . '/*.{js,css,jpg,jpeg,png,gif}', GLOB_BRACE) as $file) {
      if (is_file($file)) {
        $files[] = get_site_url() . str_replace($wp_content_path, '/wp-content', $file);
      }
    }

    wp_send_json($files);
  }

  public function public_asset_files() {
    $wp_content_subfolder = getenv("WP_CONTENT_SUBFOLDER");

    $wp_content_path = dirname(dirname(dirname(__FILE__))) . $wp_content_subfolder;

    $files = array();

    foreach ($this->subdirs($wp_content_path) as $path => $dir) {
      if ($dir->isDir()) {
        foreach (glob($path . '/*.{js,css,jpg,jpeg,png,gif}', GLOB_BRACE) as $file) {
          if (is_file($file)) {
            $files[] = get_site_url() . str_replace($wp_content_path, '/wp-content' . $wp_content_subfolder, $file);
          }
        }
      }
    }

    wp_send_json($files);
  }

  public function subdirs($root) {
    return new RecursiveIteratorIterator(
      new RecursiveDirectoryIterator($root, RecursiveDirectoryIterator::SKIP_DOTS),
      RecursiveIteratorIterator::SELF_FIRST,
      RecursiveIteratorIterator::CATCH_GET_CHILD
    );
  }
}

