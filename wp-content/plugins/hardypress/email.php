<?php

class HardypressEmail {
  public function __construct() {
    add_filter( 'wp_mail_from', array($this, "wpb_sender_email"));
  }

  function wpb_sender_email( $original_email_address ) {
    return 'wordpress@hardypress.com';
  }
}

