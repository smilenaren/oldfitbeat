<?php

class HardypressClient {
  public function post($path, $params = array()) {
    $url = getenv("HARDYPRESS_API_BASE_URL") . "/webhooks/" . getenv("SITE_DOCKER_PRESHARED_KEY") . "/" . $path;
    return wp_remote_post($url, array('body' => $params));
  }
}
