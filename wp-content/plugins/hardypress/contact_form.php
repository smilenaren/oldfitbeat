<?php

class HardypressContactFormEndpoint {
  public function __construct() {

    if (!is_admin() && function_exists('wp_add_inline_script') ) {
      wp_add_inline_script(
        'wp-api-fetch',
        sprintf(
          'if (typeof wp !== \'undefined\') { wp.apiFetch.use( wp.apiFetch.createRootURLMiddleware( "%s" ) );}',
          getenv("HARDYPRESS_API_BASE_URL") . "/wordpress/" . getenv("SITE_PUBLIC_TOKEN") . '/'
        ),
        'after'
      );
    }

    $this->client = new HardypressClient();

    add_action("wp_ajax_nopriv_contact_form_export", array($this, "export"));
    add_action("wp_ajax_contact_form_export", array($this, "export"));

    if (is_admin()) {
      add_action( 'wpcf7_after_save', array($this, 'action_wpcf7_after_save') );
      add_action( 'admin_enqueue_scripts',  array($this, 'hp_cf7_admin_scripts') );
    }

    if (!is_admin()) {
      /* add_action("admin_init", array($this, "get_old_rest_url"), 100); */
    /* } else { */
      add_action("init", array($this, "get_old_rest_url"));
    }
  }
  public function hp_cf7_admin_scripts() {
      wp_register_script("hardypress_cf7", plugins_url("cf7.js", __FILE__), array("jquery"));
      wp_enqueue_script("hardypress_cf7");
  }

  public function action_wpcf7_after_save() {
    $this->client->post("cf7_after_save");
  }

  public function get_old_rest_url() {
    $this->old_rest_url = rest_url();
    add_filter("rest_url", array($this, "rest_url"));
  }

  public function rest_url($result) {
    return str_replace(
      $this->old_rest_url,
      getenv("HARDYPRESS_API_BASE_URL") . "/wordpress/" . getenv("SITE_PUBLIC_TOKEN") . '/',
      $result
    );
  }

  public function export() {
    if (!is_plugin_active('contact-form-7/wp-contact-form-7.php')) {
      wp_send_json(
        array(
          'recaptcha_key' => null,
          'recaptcha_secret' => null,
          'contact_forms' => [],
        )
      );
    } else {
      wp_send_json(
        array(
          'recaptcha_key' => $this->recaptcha_key(),
          'recaptcha_secret' => $this->recaptcha_secret(),
          'contact_forms' => $this->contact_forms(),
        )
      );
    }
  }

  public function contact_forms() {
    $contact_forms = WPCF7_ContactForm::find(array('posts_per_page' => -1, 'lang' => ''));
    $result = [];

    foreach ($contact_forms as $item) {
      array_push(
        $result,
        array(
          'id' => $item->id(),
          'slug' => $item->name(),
          'title' => $item->title(),
          'properties' => $item->get_properties(),
        )
      );
    }

    return $result;
  }

  public function recaptcha_key() {
    $sitekeys = WPCF7::get_option('recaptcha');

    if (empty($sitekeys) || !is_array($sitekeys)) {
      return null;
    }

    $sitekeys = array_keys($sitekeys);

    return $sitekeys[0];
  }

  public function recaptcha_secret() {
    $sitekeys = WPCF7::get_option('recaptcha');
    $sitekey = $this->recaptcha_key();

    if (isset($sitekeys[$sitekey])) {
      return $sitekeys[$sitekey];
    } else {
      return false;
    }
  }
}

