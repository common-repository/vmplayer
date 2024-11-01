<?php 
defined("ABSPATH") or die("You cannot access it in this way");
ob_start();
$pb_bg_color=esc_html(get_option("nr_popoutbutton_bgcolor"));
$pb_width= esc_html(get_option("nr_popoutbutton_window_width"));
$pb_height= esc_html(get_option("nr_popoutbutton_window_height"));
?>
<button style="background-color: <?php echo esc_html($pb_bg_color); ?>; width: <?php echo esc_html($pb_width);?>px;height: <?php echo esc_html($pb_height); ?>px;" id="vmplayer_button" onclick="nr_btn_url()"> POPOUT PLAYER </button>
<input type="hidden" id="site_url" value="<?php echo esc_url(get_site_url());?>">
<input type="hidden" id="vm_width" value="<?php echo esc_html(get_option('nr_vmplayer_window_width'));?>">
<input type="hidden" id="vm_height" value="<?php echo esc_html(get_option('nr_vmplayer_window_height'));?>">


 <script type="text/javascript">
     var site_url=jQuery("#site_url").val();
     var c_url ={url:site_url};
    var width=jQuery("#vm_width").val();
    var height=jQuery("#vm_height").val();
    var fitsize={width:width,height:height};
   
     function nr_btn_url(){
   window.open(site_url+'/vmplayer','',`width=${width},height=${height}`);
  
};
function vmplayer_close(){
    window.close();
}
 </script>
 <?php 
 








