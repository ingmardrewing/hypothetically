<?php

class HypFrontend {

  private $content;
  private $hypReader;

  function __construct ( $hypReader, $content ){
    $this->hypReader = $hypReader;
    $this->content = $content;
  }

  public function process(){
    return $this->content;
  }

  public function days_since( $yyyy_mm_dd ){
    $then = new Date( $yyyy_mm_dd );
    $now = new Date();
    $now->diff($then);
  }

  public function pages_read_this_session () {
  }

  public function pages_read_total () {
  }

  public function get_new_cookie () {
  }
}
