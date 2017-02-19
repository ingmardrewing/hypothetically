<?php

class HypCookie {
  const NAME = 'hyp' ;
  const EXPIRATION = 30 * DAYS_IN_SECONDS;

  private function exists(){
    return isset( $_COOKIE[ HypCookie::NAME ] );
  }

  private function set(){
  }

  public function update(){
  }
}
