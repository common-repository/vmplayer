<?php
/**
*Plugin Name: VMPlayer
*Plugin URI: https://gandenterprisesinc.com
*Description: VMPlayer (Vouscast Media Player) is a popout player specifically designed for Shoutcast and Icecast radio.
*Author: G &amp; D Enterprises, Inc.
*Version:1.0.1
*Author Uri: https://gandenterprisesinc.com

*VMPlayer is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or any later version.

* VMPlayer is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.

*/

defined("ABSPATH") or die("You cannot excess it in this way.");
include plugin_dir_path(__FILE__)."include/shortcode.php";


class nr_VMPlayer{

	public function __construct(){
		add_action("admin_enqueue_scripts",array($this,"nr_style_scripts"));
		add_action("wp_enqueue_scripts",array($this,"nr_style_scripts"));
		add_action("admin_menu",array($this,"nr_vmplayer_dashboard"));
		add_action("admin_menu",array($this,"nr_vmplayer_register_setings"));
		register_activation_hook( __FILE__, array($this,'nr_vmplayer_activation_hook' ));
	}
	public function nr_vmplayer_activation_hook(){
		if(!get_option("nr_vmplayer_stream_url")){

	add_option('nr_vmplayer_stream_url');
	add_option('nr_vmplayer_color',"red");
	add_option('nr_vmplayer_window_width','356');
	add_option('nr_vmplayer_window_height','478');
    add_option('nr_popoutbutton_bgcolor',"black");
	add_option('nr_popoutbutton_window_width','250');
	add_option('nr_popoutbutton_window_height','70');



	    $content = '[vmplayer_window]';
        $postTitle = 'VMPlayer';
    global $wpdb;

    $query = $wpdb->prepare(
        'SELECT ID FROM ' . $wpdb->posts . '
            WHERE post_title = %s
            AND post_type = \'page\'',
        $postTitle
    );
    $wpdb->query( $query );

    if ( $wpdb->num_rows ) {
        // Title already exists
    } else {
        $page = array(
            'post_title'   => $postTitle,
            'post_content' => $content,
            'post_status'  => 'publish',
            'post_author'  => 1,
            'post_type'    => 'page',
            'post_parent'  => 0 
        );

        // Add page
        $insert_id = wp_insert_post( $page );
        
    }
}

     $page = get_page_by_title("vmplayer");
        $page_id=$page->ID;
        update_post_meta($page_id,'_wp_page_template','templates/landing.php');
    

	}
	public function nr_vmplayer_register_setings(){
		register_setting("nr_vmplayer_fields_group","nr_vmplayer_product_name");
	  if(isset($_POST["action"]) && isset($_POST["vmplayer_stream_url"]) && isset($_POST["vmplayer_window_width"]) && isset($_POST["vmplayer_window_height"]) && current_user_can("manage_options")){
	  	$nr_vm_url= sanitize_text_field($_POST['vmplayer_stream_url']);
	  	$nr_vm_color=sanitize_text_field($_POST['vmplayer_color']);
	  	$nr_vm_width=sanitize_text_field($_POST['vmplayer_window_width']);
	  	$nr_vm_height=sanitize_text_field($_POST['vmplayer_window_height']);
	  	$pb_bg_color=sanitize_text_field($_POST['PB_bg_color']);
	  	$pb_width=sanitize_text_field($_POST['PB_width']);
	  	$pb_height=sanitize_text_field($_POST['PB_height']);

	  	update_option('nr_vmplayer_stream_url',$nr_vm_url);
	  	update_option('nr_vmplayer_color',$nr_vm_color);
	  	update_option('nr_vmplayer_window_width',$nr_vm_width);
	  	update_option('nr_vmplayer_window_height',$nr_vm_height);
        update_option('nr_popoutbutton_bgcolor',$pb_bg_color);
	    update_option('nr_popoutbutton_window_width',$pb_width);
	    update_option('nr_popoutbutton_window_height',$pb_height);
	  }


	

	}
   public function nr_vmplayer_dashboard(){
   	add_menu_page("VMPlayer", "VMPlayer", "manage_options", "VMPlayer", array($this,"nr_vmplayer_dashboard_function"),$icon_url = 'dashicons-playlist-audio', $position = '5');
   }
   public function nr_vmplayer_dashboard_function(){
   	include plugin_dir_path(__FILE__)."include/dashboard.php";
   }
	public function nr_style_scripts(){
	
		wp_enqueue_style('mystylestyle', plugin_dir_url(__FILE__).'/include/assets/css/nr.css');
		wp_enqueue_script("jquery");	
		  wp_enqueue_style('nr_vmp_style',plugin_dir_url(__FILE__)."/include/assets/css/nr.min.css");
  wp_enqueue_script('nr_vmp_script',plugin_dir_url(__FILE__)."include/assets/js/nr.min.js",array(),'1.0.0',true);
     
	}

}
new nr_VMPlayer();