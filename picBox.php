<?php
/*
Info for WordPress:
==============================================================================
Plugin Name: picBox.us Image Uploader
Plugin URI: http://picbox.us
Description: Upload images to picBox.us through the Media Upload screen.
Version: 2014.02.13
Author: NegaCommando
Author URI: http://home.oregongarlic.net
*/
function picBox_uploader(){
echo '

<div align="center">
<p><h3>Upload images to picBox.us</h3></p>
<a href="https://picbox.us/ext_upload" onclick="javascript:void window.open(\'https://picbox.us/ext_upload\',\'1369681531638\',\'width=434,height=226,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=0,left=0,top=0\');return false;" class="btn btn-primary btn-large"><i class="icon-white icon-upload"></i><font color="Black"> Upload to picBox</font></a>
<!--  This is code for a later addition, where the user will have the ability to insert an image via a uniform resource locator.
 <form action="pB_insert()" method="post">
<input type="text" name="imageurl" placeholder="Image URL">
    </form>
    -->           
';
}
add_action('post-upload-ui', 'picBox_uploader');
?>