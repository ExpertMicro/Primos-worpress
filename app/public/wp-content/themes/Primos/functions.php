<?php 

// Carrega os campos personalizados do cmb2
require_once get_template_directory() . '/cmb2/load.php';

// Função para registrar os Scripts e o CSS
function oziel_scripts() {
	// Desregistra o jQuery do Wordpress
	wp_deregister_script('jquery');



	// Registra o jQuery Novo
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery/jquery-3.6.0.min.js', array(), "3.6.0", true );

  // Registra o Intersection-observer
  wp_register_script( 'intersection-observer-script', get_template_directory_uri() . '/js/libs/lozad/intersection-observer.js', array( 'jquery'), false, true );

  // Registra o lozad
  wp_register_script( 'lozad-script', get_template_directory_uri() . '/js/libs/lozad/lozad.js', array( 'jquery', 'intersection-observer-script'), false, true );

  // Registrar Main que mostra o estado do envio de contatos
	wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'intersection-observer-script', 'lozad-script' ), false, true );

	// Registrar script do menu mobile
	wp_register_script( 'mobile-script', get_template_directory_uri() . '/js/script.js', array( 'jquery', 'intersection-observer-script', 'lozad-script', 'main-script' ), false, true );

  // Registrar script do modernizr
	wp_register_script( 'modernizr-script', get_template_directory_uri() . '/js/libs/modernizr-custom.js', array( 'jquery', 'intersection-observer-script', 'lozad-script', 'main-script', 'mobile-script' ), false, true );

  // Registra o AOS
  wp_register_script( 'aos-script', get_template_directory_uri() . '/js/libs/aos/aos.js', array( 'jquery', 'intersection-observer-script', 'lozad-script', 'main-script', 'mobile-script', 'modernizr-script'), false, true );

  // Registra o BaguettBox
  wp_register_script( 'baguetteBox-script', get_template_directory_uri() . '/js/libs/baguetteBox/baguetteBox.min.js', array( 'jquery', 'intersection-observer-script', 'lozad-script', 'main-script', 'mobile-script', 'modernizr-script', 'aos-script'), false, true );

  // Registra o Glide
  wp_register_script( 'glide-script', get_template_directory_uri() . '/js/libs/glide/glide.min.js', array( 'jquery', 'intersection-observer-script', 'lozad-script', 'main-script', 'mobile-script', 'modernizr-script', 'aos-script', 'baguetteBox-script' ), false, true );

  

  // Ver qual a melhor ordem de carregamento Pesquisar
	// Carrega o Script
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'intersection-observer-script' );
  wp_enqueue_script( 'lozad-script' );
	wp_enqueue_script( 'main-script' );
  wp_enqueue_script( 'mobile-script' );
  wp_enqueue_script( 'modernizr-script' );
  wp_enqueue_script( 'aos-script' );
  wp_enqueue_script( 'baguetteBox-script' );
  wp_enqueue_script( 'glide-script' );
  
}
add_action( 'wp_enqueue_scripts', 'oziel_scripts' );

function oziel_css() {

	wp_register_style( 'oziel-style', get_template_directory_uri() . '/style.css', array(), false, false );

  wp_register_style( 'aos-style', get_template_directory_uri() . '/js/libs/aos/aos.css', array('oziel-style'), false, false );

  wp_register_style( 'baguetteBox-style', get_template_directory_uri() . '/js/libs/baguetteBox/baguetteBox.min.css', array('oziel-style', 'aos-style'), false, false );

  wp_register_style( 'glide01-style', get_template_directory_uri() . '/js/libs/glide/glide.core.min.css', array('oziel-style', 'aos-style', 'baguetteBox-style'), false, false );

  wp_register_style( 'glide02-style', get_template_directory_uri() . '/js/libs/glide/glide.theme.min.css', array('oziel-style', 'aos-style', 'baguetteBox-style', 'glide01-style'), false, false );



	wp_enqueue_style( 'oziel-style' );
  wp_enqueue_style( 'aos-style' );
  wp_enqueue_style( 'baguetteBox-style' );
  wp_enqueue_style( 'glide01-style' );
  wp_enqueue_style( 'glide02-style' );

}
add_action( 'wp_enqueue_scripts', 'oziel_css' );


// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

// Registrar Menu
function register_my_menu() {
  register_nav_menu('menu-principal',__( 'Menu Principal' ));
}
add_action( 'init', 'register_my_menu' );


?>