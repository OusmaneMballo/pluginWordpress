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
wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'. 'integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"'.'crossorigin="anonymous"' );
wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . 'code.jquery.com/code.jquery.com/jquery-3.2.1.slim.min.js'. 'integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"'.' crossorigin="anonymous"', array( 'jquery' ), null, true );
wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . 'cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'. 'integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"'.' crossorigin="anonymous"', array( 'jquery' ), null, true );
wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . 'maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'. 'integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"'.' crossorigin="anonymous"', array( 'jquery' ), null, true );

/* la fonction the_content permet d'ajouter un contenu dans la page d'accueil */
//add_filter('the_content', 'addContenu');
/** add_shortcode() nous permet d'ajout une fonctionalite dans un endrois precis
 *  d'une page avec le widget [shortcode]
 * **/
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
    // include('./contact.php');
    echo "Formulaire de Contact";
    echo ("
    <form>
    <div class='form-row'>
      <div class='form-group col-md-6'>
        <label for='inputPrenom'>Prenom</label>
        <input type='text' class='form-control' id='inputPrenom' placeholder='Votre prenom...'>
      </div>
      <div class='form-group col-md-6'>
        <label for='inputNom'>Nom</label>
        <input type='text' class='form-control' id='inputNom' placeholder='Votre nom...'>
      </div>
    </div>
    <div class='form-row'>
    <div class='form-group col-md-6'>
        <label for='inputEmail4'>Email</label>
        <input type='email' class='form-control' id='inputEmail4' placeholder='Email'>
    </div>
    </div>
    <div class='form-group'>
      <label for='inputTelephone'>Telephone</label>
      <input type='text' class='form-control' id='inputTelephone' placeholder='1234'>
    </div>
    <div class='form-group'>
      <label for='inputAddress2'>Address </label>
      <input type='text' class='form-control' id='inputAddress2' placeholder='Votre adresse ici...'>
    </div>
    <div class='form-row'>
      <div class='form-group col-md-6'>
        <label for='inputCity'>City</label>
        <input type='text' class='form-control' id='inputCity'>
      </div>
      <div class='form-group col-md-4'>
        <label for='inputState'>State</label>
        <select id='inputState' class='form-control'>
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class='form-group col-md-2'>
        <label for='inputZip'>Zip</label>
        <input type='text' class='form-control' id='inputZip'>
      </div>
    </div>
    <button type='submit' class='btn btn-primary'>Sign in</button>
  </form>
    ");
}

?>