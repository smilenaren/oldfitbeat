<?php

class HardypressDeployButton {
  public function __construct() {
    add_action("admin_enqueue_scripts", array($this, "start"));
    add_action("wp_enqueue_scripts", array($this, "start"));
  }

  public function start() {
    if (!current_user_can('edit_posts')) {
      return;
    }

    // Let's add the "Publish Changes" button
    add_action("admin_bar_menu", array($this, "render_bar_menu"), PHP_INT_MAX);

    // JS and CSS assets
    wp_register_style("hardypress_deploy_button", plugins_url("deploy_button.css", __FILE__));
    wp_register_script("pusher", "https://js.pusher.com/4.1/pusher.min.js");
    wp_register_script("hardypress_deploy_button", plugins_url("deploy_button.js", __FILE__), array("jquery", "pusher"));

    wp_enqueue_style("hardypress_deploy_button");
    wp_enqueue_script("hardypress_deploy_button");

    wp_localize_script("hardypress_deploy_button", "hardypressDeployButton", array(
      "pusherKey" => getenv("PUSHER_KEY"),
      "pusherCluster" => getenv("PUSHER_CLUSTER"),
      "pusherAuthEndpoint" => getenv("HARDYPRESS_API_BASE_URL") . "/pusher_auth",
      "pusherChannel" => getenv("PUSHER_CHANNEL"),
      "pusherChannelAuth" => getenv("PUSHER_CHANNEL_AUTH"),
      "deployUrl" => getenv("HARDYPRESS_API_BASE_URL") . "/webhooks/" . getenv("SITE_DOCKER_PRESHARED_KEY") . "/deploy",
      "restoreUrl" => getenv("HARDYPRESS_API_BASE_URL") . "/webhooks/" . getenv("SITE_DOCKER_PRESHARED_KEY") . "/restore",
      "statusUrl" => getenv("HARDYPRESS_API_BASE_URL") . "/webhooks/" . getenv("SITE_DOCKER_PRESHARED_KEY") . "/current_state",
    ));

    $this->client = new HardypressClient();
  }

  public function render_bar_menu($wp_admin_bar) {
    $wp_admin_bar->add_node(array(
      "id"    => "hardypress-deploy-button",
      "title" => "",
      "meta"  => array(
        "class" => "hardypress-deploy-button-wrapper"
      )
    ));
  }
}

