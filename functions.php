<?php
add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles');
function add_scripts_and_styles(){

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery',                     get_template_directory_uri().'/assets/js/jquery.min.js',                false , null, true );
    wp_enqueue_script('jquery');
    
    wp_enqueue_script('jquery-migrate-3.0.1.min.js', get_template_directory_uri().'/assets/js/jquery-migrate-3.0.1.min.js',  array('jquery'), null, true );
    wp_enqueue_script('popper.min.js',               get_template_directory_uri().'/assets/js/popper.min.js',                array('jquery-migrate-3.0.1.min.js') , null, true );
    wp_enqueue_script('bootstrap.min.js',            get_template_directory_uri().'/assets/js/bootstrap.min.js',             array('popper.min.js') , null, true );
    wp_enqueue_script('jquery.easing.1.3.js',        get_template_directory_uri().'/assets/js/jquery.easing.1.3.js',         array('bootstrap.min.js') , null, true );
    wp_enqueue_script('jquery.waypoints.min.js',     get_template_directory_uri().'/assets/js/jquery.waypoints.min.js',      array('jquery.easing.1.3.js') , null, 'footer' );
    wp_enqueue_script('jquery.stellar.min.js',       get_template_directory_uri().'/assets/js/jquery.stellar.min.js',        array('jquery.waypoints.min.js') , null, 'footer' );
    wp_enqueue_script('owl.carousel.min.js',         get_template_directory_uri().'/assets/js/owl.carousel.min.js',          array('jquery.stellar.min.js') , null, 'footer' );
    wp_enqueue_script('jquery.magnific-popup.min.js',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('owl.carousel.min.js') , null, 'footer' );
    wp_enqueue_script('bootstrap-datepicker.js',     get_template_directory_uri().'/assets/js/bootstrap-datepicker.js',      array('jquery.magnific-popup.min.js') , null, 'footer' );
    wp_enqueue_script('aos.js',                      get_template_directory_uri().'/assets/js/aos.js',                       array('bootstrap-datepicker.js') , null, 'footer' );
    wp_enqueue_script('jquery.animateNumber.min.js', get_template_directory_uri().'/assets/js/jquery.animateNumber.min.js',  array('aos.js') , null, 'footer' );
    wp_enqueue_script('google-map.js',            get_template_directory_uri().'/assets/js/google-map.js',             array('jquery.animateNumber.min.js') , null, 'footer' );
    wp_enqueue_script('main.js',                  get_template_directory_uri().'/assets/js/main.js',                   array('google-map.js') , null, 'footer' );
   // wp_enqueue_script('fontawesome-iconpicker.js',                  get_template_directory_uri().'/customizer-repeater/js/fontawesome-iconpicker.js',                   array('main.js') , null, 'footer' );
  //  wp_enqueue_script('fontawesome-iconpicker.min.js',                  get_template_directory_uri().'/customizer-repeater/js/fontawesome-iconpicker.min.js',                   array('fontawesome-iconpicker.js') , null, 'footer' );
    
    
    wp_enqueue_style( 'open-iconic-bootstrap.min.css', get_template_directory_uri().'/assets/css/open-iconic-bootstrap.min.css');
    wp_enqueue_style( 'animate.css',                   get_template_directory_uri().'/assets/css/animate.css',array('open-iconic-bootstrap.min.css'));
    wp_enqueue_style( 'owl.carousel.min.css',          get_template_directory_uri().'/assets/css/owl.carousel.min.css',array('animate.css'));
    wp_enqueue_style( 'owl.theme.default.min.css',     get_template_directory_uri().'/assets/css/owl.theme.default.min.css',array('owl.carousel.min.css'));
    wp_enqueue_style( 'magnific-popup.css',            get_template_directory_uri().'/assets/css/magnific-popup.css',array('owl.theme.default.min.css'));
    wp_enqueue_style( 'aos.css',                       get_template_directory_uri().'/assets/css/aos.css',array('magnific-popup.css'));
    wp_enqueue_style( 'ionicons.min.css',              get_template_directory_uri().'/assets/css/ionicons.min.css',array('aos.css'));
    wp_enqueue_style( 'bootstrap-datepicker.css',      get_template_directory_uri().'/assets/css/bootstrap-datepicker.css',array('ionicons.min.css'));
    wp_enqueue_style( 'jquery.timepicker.css',         get_template_directory_uri().'/assets/css/jquery.timepicker.css',array('bootstrap-datepicker.css'));
    wp_enqueue_style( 'flaticon.css',                  get_template_directory_uri().'/assets/css/flaticon.css',array('jquery.timepicker.css'));
    wp_enqueue_style( 'icomoon.css',                   get_template_directory_uri().'/assets/css/icomoon.css',array('flaticon.css'));
    wp_enqueue_style( 'style.css',                     get_template_directory_uri().'/assets/css/style.css',array('icomoon.css'));
   // wp_enqueue_style( 'fontawesome-iconpicker.min.css',                     get_template_directory_uri().'/customizer-repeater/css/fontawesome-iconpicker.min.css',array('style.css'));
    
}

/***************** Внешний вид темы *****************/

add_action( 'customize_register', function ( WP_Customize_Manager $wp_customize ) {
    $wp_customize->remove_control("custom_logo");
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'installed_themes' );
	$wp_customize->remove_section( 'wporg_themes' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_control( 'site_icon' );
	$wp_customize->remove_panel( 'widgets' );

} );
// Настройки темы
//Подключение фреймворка

//require_once get_template_directory() . '/cody-framework/admin.php';
//require_once get_template_directory() . '/inc/customize-controls/customize-repeater-control.php';
//подключение sp
require get_template_directory() . '/inc/class-sp-customizer.php';
require get_template_directory() . '/inc/mycustomizer.php';
require get_template_directory() . '/customizer-repeater/functions.php';


?>
