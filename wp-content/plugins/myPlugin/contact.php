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

/* la fonction get_search_form permet d'ajouter une action 
    apres le champ de recherche */
//add_action('get_search_form', 'sayHello');

/* la fonction default_content permet d'ajouter un contenu par defaut 
    lors de la creation d'un  article */
//add_filter('default_content', 'contenuParDefaut');

/* la fonction the_content permet d'ajouter un contenu dans la page d'accueil */
add_filter('the_content', 'addContenu');
add_shortcode('form_contact', 'contactForm');
function sayHello()
{
    echo "Hello my plugin wordpress!...";
}

function contenuParDefaut()
{
    return "Mon contenu par defaut
    Titre 1
    Titre 2";
}

function addContenu($content)
{
    $content.='<p>Mon contenu du plugin</p>';
    return $content;
}

function contactForm()
{
    echo "Formulaire de Contact";
}

?>