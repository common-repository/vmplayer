<?php 
defined("ABSPATH") or die("You canot access it in this way.");
ob_start();
?>

<!DOCTYPE html>

<script language="JavaScript">

function popUp(URL) {

day = new Date();

id = day.getTime();

eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=372,height=540,left = 650,top = 375');");

}

// End -->

</script>

<style type="text/css">
    <?php  

     $pauseb = plugin_dir_url(__FILE__)."/assets/images/pauseb.svg";
     $pausew = plugin_dir_url(__FILE__)."/assets/images/pausew.svg";
     $playb = plugin_dir_url(__FILE__)."/assets/images/playb.svg";
     $playw = plugin_dir_url(__FILE__)."/assets/images/playw.svg";

  ?>
    .myCast .play-btn{color:rgba(0,0,0,1);background:#FF5722 url(<?php echo esc_html($playw); ?>);background-repeat:no-repeat;background-position:center center;background-size:34px 34px;-webkit-transition:all 0.5s;-moz-transition:all 0.5s;transition:all 0.5s}
    .myCast .stop-btn{color:rgba(0,0,0,1);background:#FF5722 url(<?php echo esc_html($pausew); ?>);background-repeat:no-repeat;background-position:center center;background-size:34px 34px;-webkit-transition:all 0.5s;-moz-transition:all 0.5s;transition:all 0.5s}

</style>



    <div style="text-align: center;">
<!-- Player Code Begin -->
<div class="myCast" id="stream3" align="center">
</div>
<input type="hidden" id="site_url" value="<?php echo esc_url(plugin_dir_url(__FILE__).'/assets');?>">
<input type="hidden" id="vmplayer_color" value="<?php echo esc_html(get_option('nr_vmplayer_color'));?>">
<input type="hidden" id="stream_url" value="<?php echo esc_html(get_option('nr_vmplayer_stream_url'));?>">

<!-- For getting all value. -->



<script>

    function nr_btn_url(){
    
    var website_url= jQuery("#nr_website_url").val();
    alert(website_url);
    var width= jQuery("#vmplayer_window_width").val();
    alert(width);
    var height=jQuery("#vmplayer_window_height").val();
   

};
function vmplayer_close(){
    window.close();
}
  

</script>


<!-- Player Code Ends -->

</div>







<?php 