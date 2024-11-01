<?php 
defined("ABSPATH") or die("You cannot access it in this way");
$working_path= plugin_dir_path(__FILE__)."/assets";
?>
<input type="hidden"  id="nr_website_url" value="<?php echo esc_html($plugin_path); ?>">
<h1 style="text-align: center;">VMPlayer Settings</h1>
<h2 style="font-style: bold;">
		Shortcode For POPUP Player Button:
	</h2>
	<input type="text" value="[vmplayer_button]" readonly >
<form method="post" action="options.php">
	<?php settings_fields("nr_vmplayer_fields_group"); ?>
	<h2 style="font-style: bold;">
		Stream URL:
	</h2>
	<input type="text" value="<?php echo esc_html(get_option("nr_vmplayer_stream_url"));?>" name="vmplayer_stream_url" id="vmplayer_stream_url">
	<h2 style="font-style: bold;">
		VMPlayer Color:
	</h2>
	<input type="text"  value="<?php echo esc_html(get_option("nr_vmplayer_color"));?>" name="vmplayer_color" id="vmplayer_color">
	<h2 style="font-style: bold;">
		VMPlayer Popup Window width:
	</h2>
	<input type="text" value="<?php echo esc_html(get_option("nr_vmplayer_window_width"));?>" name="vmplayer_window_width" id="vmplayer_window_width">
	<span style="color:green"> px</span>
	<h2 style="font-style: bold;">
		VMPlayer Popup Window height:
	</h2>
	<input type="text" value="<?php echo esc_html(get_option("nr_vmplayer_window_height"));?>" name="vmplayer_window_height" id="vmplayer_window_height"><span style="color:green"> px</span>
	<br>



	<h1 style="text-align: center;">VMPlayer Popup Button Settings</h1>

  <h2 style="font-style: bold;">
		Popup Button Background Color:
	</h2>
	<input type="text"  value="<?php echo esc_html(get_option("nr_popoutbutton_bgcolor"));?>" name="PB_bg_color" id="PB_bg_color">
	<h2 style="font-style: bold;">
		 Popup Button Window width:
	</h2>
	<input type="text" value="<?php echo esc_html(get_option("nr_popoutbutton_window_width"));?>" name="PB_width" id="PB_width">
	<span style="color:green"> px</span>

	<h2 style="font-style: bold;">
		 Popup Button height:
	</h2>
	<input type="text" value="<?php echo esc_html(get_option("nr_popoutbutton_window_height"));?>" name="PB_height" id="PB_height"><span style="color:green"> px</span>
	<br>
	<?php submit_button("save changes"); ?>
	<?php settings_errors();?>
</form>

<?php 

