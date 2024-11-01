<?php 
defined("ABSPATH") or die("You cannot access it in this way");
function nr_VMPlayer_function(){
	
	add_shortcode("vmplayer_window",function(){
  include plugin_dir_path(__FILE__)."player.php";
  return ob_get_clean();

	});
	add_shortcode("vmplayer_button",function(){
		include plugin_dir_path(__FILE__)."button.php";
		return ob_get_clean();
	});
	}
add_action("init", "nr_VMPlayer_function");
