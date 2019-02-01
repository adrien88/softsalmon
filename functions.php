<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage SoftSalmon
 * @since 1.0.0
 */

// function themeslug_enqueue_style() {
//     if ( is_child_theme() ) {
//         // load parent stylesheet first if this is a child theme
// 	wp_enqueue_style( 'SoftSalmon', trailingslashit( get_template_directory_uri() ) . 'style.css', false );
//     }
//     // load active theme stylesheet in both cases
//     wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false );
//     wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false );
// }
// function themeslug_enqueue_script() {
// 	wp_enqueue_script( 'my-js', 'js/core.js', false );
// }
// add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
// add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

//--------------------------------------------------------------------------------


add_theme_support( 'post-thumbnails' );  

function ressources() {
// Chargement des styles

wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
// Chargement des scripts
//wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js');
}// fin function lgmac_scripts

add_action('wp_enqueue_scripts', 'ressources');







?>
