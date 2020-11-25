<?php 
/**
 * @package myPlugin/contact/
 * @version 1.7.2
 */
/*
Plugin Name: My ContactForm
Plugin URI: http://wordpress.org/plugins/myPlugin/contact/
Description: Vous devez créer un mini site wordpress en y intégrant un formulaire de contact que vous allons créer en tant que plugin
Author: mballoSoft
Version: 1.7.2
Author URI: https://www.github.com/OusmaneMballo/
*/

add_action('wp_footer', 'sayHello');

function sayHello(){
    echo "Hello my plugin wordpress!...";
}

?>