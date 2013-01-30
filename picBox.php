<?php
/*
 Info for WordPress:
 ==============================================================================
 Plugin Name: picBox Image Uploader
 Plugin URI: http://picbox.us
 Description: Upload images to picBox in  a post
 Version: 0.2
 Author: NegaCommando
 Author URI: http://negacraft.twilightparadox.com
*/
function picBox_uploader(){
echo '		<h3 class="media-title">Upload images to picBox.us</h3>
			<iframe src="https://picbox.us/iframe_mini.php?mini=2" width="510" height="75" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
            
            
	';
}
add_action('post-upload-ui', 'picBox_uploader');
?>
