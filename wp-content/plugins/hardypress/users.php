<?php

include_once plugin_dir_path(__FILE__) . "client.php";

class HardypressUsers {
  public function __construct() {
    $this->client = new HardypressClient();

    add_action("user_register", array($this, "user_register"), 10, 1);
    add_action("profile_update", array($this, "profile_update"), 10, 1);
    add_action("after_password_reset", array($this, "after_password_reset"), 10, 1);
    add_action("delete_user", array($this, "delete_user"), 10, 1);
  }

  public function user_register($user_id) {
    $this->sync_user($user_id);
  }

  public function profile_update($user_id) {
    $this->sync_user($user_id);
  }

  public function after_password_reset($user) {
    $this->sync_user($user->id);
  }

  public function delete_user($user_id) {
    $this->client->post("delete_user", array("user_id" => $user_id));
  }

  function sync_user($user_id) {
    global $wpdb;

    $user = $wpdb->get_row("SELECT * FROM $wpdb->users WHERE id = " . $user_id , ARRAY_A);

    return $this->client->post("upsert_user", array(
      "user_id" => $user["ID"],
      "user_email" => $user["user_email"],
      "user_login" => $user["user_login"],
      "user_pass" => $user["user_pass"],
    ));
  }
}

