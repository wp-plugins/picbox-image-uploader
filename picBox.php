<?php
/*
 Info for WordPress:
 ==============================================================================
 Plugin Name: picBox Image Uploader
 Plugin URI: http://picbox.us
 Description: Upload images to picBox in  a post
 Version: 1.0.0
 Author: NegaCommando
 Author URI: http://home.oregongarlic.net
*/
function picBox_uploader(){
echo '
  <link rel="stylesheet" href="frame.css"/>
            <div align="center">
            <p><h3>Upload images to picBox.us</h3></p>
			<iframe id="upload" src="https://picbox.us/ext_upload" scrolling="no" frameborder="0" allowtransparency="true"</iframe></div>';
            
            
            
            
            
            

}
add_action('post-upload-ui', 'picBox_uploader');

    
?>

