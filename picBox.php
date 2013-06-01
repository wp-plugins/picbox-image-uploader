<?php
/*
 Info for WordPress:
 ==============================================================================
 Plugin Name: picBox.us Image Uploader
 Plugin URI: http://picbox.us
 Description: Upload images to picBox in  a post
 Version: 1.1
 Author: NegaCommando
 Author URI: http://home.oregongarlic.net
*/
function picBox_uploader(){
echo '
<link href="https://munycdn.com/a/picBoxWordPressPlugin/src/bootstrap.css" rel="stylesheet">
<style>
body {
padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
}
</style>
<link href="https://munycdn.com/a/picBoxWordPressPlugin/src/bootstrap-responsive.css" rel="stylesheet">
<div align="center">
<p><h3>Upload images to picBox.us</h3></p>
<a href="https://picbox.us/ext_upload" onclick="javascript:void window.open(\'https://picbox.us/ext_upload\',\'1369681531638\',\'width=434,height=226,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=0,left=0,top=0\');return false;" class="btn btn-primary btn-large"><i class="icon-white icon-upload"></i><font color="white"> Upload to picBox</font></a>
<!--   <form action="pB_insert()" method="post">
<input type="text" name="imageurl" placeholder="Image URL">
    </form>
    -->
<!--BootStrap JS-->             
<script src="https://munycdn.com/a/picBoxWordPressPlugin/src/jquery.js"></script>
<script src="https://munycdn.com/a/picBoxWordPressPlugin/src/bootstrap-transition.js"></script>
<script src="https://munycdn.com/a/picBoxWordPressPlugin/src/bootstrap-alert.js"></script>
<script src="https://munycdn.com/a/picBoxWordPressPlugin/src/bootstrap-modal.js"></script>
<script src="https://munycdn.com/a/picBoxWordPressPlugin/src/bootstrap-dropdown.js"></script>
<script src="https://munycdn.com/a/picBoxWordPressPlugin/src/bootstrap-scrollspy.js"></script>
<script src="https://munycdn.com/a/picBoxWordPressPlugin/src/bootstrap-tab.js"></script>
<script src="https://munycdn.com/a/picBoxWordPressPlugin/src/bootstrap-tooltip.js"></script>
<script src="https://munycdn.com/a/picBoxWordPressPlugin/src/bootstrap-popover.js"></script>
<script src="https://munycdn.com/a/picBoxWordPressPlugin/src/bootstrap-button.js"></script>
<script src="https://munycdn.com/a/picBoxWordPressPlugin/src/bootstrap-collapse.js"></script>
<script src="https://munycdn.com/a/picBoxWordPressPlugin/src/bootstrap-carousel.js"></script>
<script src="https://munycdn.com/a/picBoxWordPressPlugin/src/bootstrap-typeahead.js"></script>';
}
add_action('post-upload-ui', 'picBox_uploader');
?>