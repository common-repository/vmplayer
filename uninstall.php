<?php 
defined("ABSPATH") or die("You cannot access it in this way.");
// For delete Option.

	delete_option('nr_vmplayer_stream_url');
	delete_option('nr_vmplayer_color');
	delete_option('nr_vmplayer_window_width');
	delete_option('nr_vmplayer_window_height');
	delete_option('nr_popoutbutton_bgcolor');
	delete_option('nr_popoutbutton_window_width');
	delete_option('nr_popoutbutton_window_height');
// For delete page.
	 $page = get_page_by_title("vmplayer");
        $page_id=$page->ID;
       if($page_id){
       	wp_delete_post($page_id, true);
       }