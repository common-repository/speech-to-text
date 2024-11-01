<?php 
/*
* Plugin Name: Speech To Text
* Description: User can speak and add content into posts without typing.
* Version: 1.0.0
* Author: biztechc
* Author URI: https://www.appjetty.com/
*/ 
?>
<?php 
include( plugin_dir_path( __FILE__ ) . 'webspeechdemo.php');
add_action("plugins_loaded", "add_speech_to_text"); 
function add_speech_to_text()
{
    add_action( 'add_meta_boxes', 'add_custom_metabox' );
}
function add_custom_metabox()
{
        add_meta_box( 'talk-to-text', __( 'Speech to Text','speech-to-text'), 'talk_to_text_code', 'post', 'normal', 'high' );
}?>