<?php

class HardypressFixHttps {
  public function __construct() {
    $_SERVER['HTTPS'] = "on";

    $this->build_url_list();

    if (is_admin()) {
      add_action("admin_init", array($this, "start_buffer"), 100);
    } else {
      add_action("init", array($this, "start_buffer"));
    }
  }

  public function filter_buffer($buffer) {
    $buffer = $this->replace_insecure_links($buffer);
    return $buffer;
  }

  public function start_buffer() {
    ob_start(array($this, "filter_buffer"));
  }

  public function end_buffer() {
    if (ob_get_length()) {
      ob_end_flush();
    }
  }

  public function build_url_list() {
    $home = str_replace("https://", "http://", get_option('home'));
    $home_no_www  = str_replace("://www.", "://", $home);
    $home_yes_www = str_replace("://", "://www.", $home_no_www);

    //for the escaped version, we only replace the home_url, not it's www or non www counterpart, as it is most likely not used
    $escaped_home = str_replace("/", "\/", $home);

    $this->http_urls = array(
        $home_yes_www,
        $home_no_www,
        $escaped_home,
        "src='http://",
        'src="http://',
        "srcset='http://",
        'srcset="http://',
    );
  }

  public function replace_insecure_links($str) {
    $search_array = $this->http_urls;

    $ssl_array = str_replace(array("http://", "http:\/\/"), array("https://", "https:\/\/"), $search_array);
    //now replace these links
    $str = str_replace($search_array, $ssl_array, $str);

    // replace all http links except hyperlinks
    // all tags with src attr are already fixed by str_replace

    $pattern = array(
      '/url\([\'"]?\K(http:\/\/)(?=[^)]+)/i',
      '/<link [^>]*?href=[\'"]\K(http:\/\/)(?=[^\'"]+)/i',
      '/<meta property="og:image" [^>]*?content=[\'"]\K(http:\/\/)(?=[^\'"]+)/i',
      '/<form [^>]*?action=[\'"]\K(http:\/\/)(?=[^\'"]+)/i',
    );

    $str = preg_replace($pattern, 'https://', $str);
    $str = str_replace( "<body ", '<body data-hardypress=1 ', $str);
    return $str;
  }
}

