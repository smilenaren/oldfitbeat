<?php

class HardypressRemoveCssJsVer {
  public function __construct() {
    add_filter( "style_loader_src", array($this, "remove_css_js_ver"));
    add_filter( "script_loader_src", array($this, "remove_css_js_ver"));
  }

  public function remove_css_js_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
      $src = remove_query_arg( 'ver', $src );
    return $src;
  }

}

