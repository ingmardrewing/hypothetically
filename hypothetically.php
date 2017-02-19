<?php
/*
Plugin Name: Frugal Comic Plugin
Version: 20170211
*/

include 'lib/Hypothesis.php';
include 'lib/Hypotheses.php';
include 'lib/HypReader.php';
include 'lib/HypCookie.php';
include 'lib/HypFrontend.php';

function hyp_prepare_content ( $content ) {
  $hc = new HypCookie();
  $h  = new Hypotheses();
  $hr = new HypReader( $hc );
  $hf = new HypFrontend( $hr, $content );
  return $hf->process();
}
add_filter( 'the_content', 'hyp_prepare_content');

function hyp_update_cookie(){
  $hc = new HypCookie();
  $hc->update();
}
add_actionl('init', 'hyp_add_cookie');

#include 'lib/FcpAdminMenu.php';
#add_action( 'admin_menu', 'fcp_plugin_menu' );
#function fcp_plugin_menu() {
#	add_options_page( 'Frugal Comic Plugin Options', 'Frugal Comic Plugin', 'manage_options', 'fcp-admin-menu', 'fcp_plugin_options' );
#}
#function fcp_plugin_options() {
#  $admin_menu = new AdminMenu();
#  $admin_menu->handle_request();
#}
#
#include 'lib/FcpCustomBox.php';
#add_action( 'add_meta_boxes', 'fcp_add_custom_box' );
#function fcp_add_custom_box() {
#  $fcb = new FcpCustomBox();
#  $fcb->add_box();
#}
#
#include 'lib/FcpSavePost.php';
#add_action( 'save_post', 'fcp_save_postdata' );
#function fcp_save_postdata( $post_id ) {
#  $fsp = new FcpSavePost();
#  $fsp->save();
#}
#
#
