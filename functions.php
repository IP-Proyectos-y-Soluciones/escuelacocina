<?php

/**
 * Agregar CMB2
 */
require_once dirname(__FILE__) . '/cmb2.php';


/*
 * Carga campos personalizados
 */
require_once dirname(__FILE__) . '/inc/custom-fields.php';


/**
 * Funciones que se cargan al activar el theme
 */
function edc_setup()
{

  // Definir tamaños de imagenes
  add_image_size('mediano', 510, 340, true);
  add_image_size('cuadrada_mediana', 350, 350, true);

  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');

  // Menu de navegación
  register_nav_menus(array(
    'menu_principal' => esc_html__('Menu Principal', 'escuelacocina')
  ));
}
add_action('after_setup_theme', 'edc_setup');


/* 
* Agrega la clase nav-link de bootstrap al menu principal
*/
function edc_enlace_class($atts, $item, $args)
{
  if ($args->theme_location == 'menu_principal') {
    $atts['class'] = 'nav-link';
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'edc_enlace_class', 10, 3);


/*
*  Carga los Scripts y CSS del theme
*/
function edc_scripts()
{
  /** Styles */
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', false, '4.1.3');

  wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css'));

  /** Scripts */
  wp_enqueue_script('jquery');
  wp_enqueue_script('popper',  get_template_directory_uri() . '/js/popper.js', array('jquery'), '1.0', true);
  wp_enqueue_script('bootstrap-js',  get_template_directory_uri() . '/js/bootstrap.js', array('popper'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'edc_scripts');
