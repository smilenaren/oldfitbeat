<?php
/**
 * @package HardyPress
 * @version 0.1
 */
/*
Plugin Name: Hardypress
Plugin URI: https://www.hardypress.com
Description: Manage and deploy your HardyPress installation
Author: Hardypress
Version: 0.1
Author URI: https://www.hardypress.com
*/

include_once plugin_dir_path(__FILE__) . "users.php";
include_once plugin_dir_path(__FILE__) . "email.php";
include_once plugin_dir_path(__FILE__) . "https.php";
include_once plugin_dir_path(__FILE__) . "client.php";
include_once plugin_dir_path(__FILE__) . "contact_form.php";
include_once plugin_dir_path(__FILE__) . "search.php";
include_once plugin_dir_path(__FILE__) . "deploy_button.php";
include_once plugin_dir_path(__FILE__) . "asset_files.php";
include_once plugin_dir_path(__FILE__) . "remove_css_js_ver.php";

class Hardypress {
  public function __construct() {
    // UGLY WORKAROUNDS
    add_filter("wp_calculate_image_srcset_meta", "__return_null");
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    if(get_option('home') != getenv("SITE_URL"))
      update_option('home', getenv("SITE_URL"));

    add_action( "init", array($this, "stop_heartbeat"), 10, 1 );

    new HardypressUsers();
    new HardypressContactFormEndpoint();
    new HardypressSearch();
    new HardypressDeployButton();
    new HardypressAssetFilesEndpoint();
    new HardypressRemoveCssJsVer();
    new HardypressEmail();

    if (!getenv("DISABLE_FORCE_HTTPS")) {
      new HardypressFixHttps();
    }
  }

  public function stop_heartbeat() {
    wp_deregister_script('heartbeat');
  }
}

$hardypress = new Hardypress();
