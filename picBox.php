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
echo '		
            <p id="upload"><h3 class="media-title">Upload images to picBox.us</h3></p>
			<iframe onload="getdata" src="https://picbox.us/iframe_mini.php?mini=2" width="510" height="75" scrolling="no" frameborder="0" allowtransparency="true" id="miniupload"></iframe>
            
            
            
	';
}
add_action('post-upload-ui', 'picBox_uploader');

function getdata(){
    <script>
    var url = document.getElementById("miniupload").contentDocument.body
    echo $url
    }
    
?>

