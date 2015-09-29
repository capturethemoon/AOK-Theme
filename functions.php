<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

$args = array(
	'width'         => 320,
	'height'        => 117,
	'default-image' => get_template_directory_uri() . '/images/aokblockslogobw2.png',
);
add_theme_support( 'custom-header', $args );

function wpt_excerpt_length( $length ) {
	return 16;
}
add_filter( 'excerpt_length', 'wpt_excerpt_length', 999 );

function register_theme_menus() {
register_nav_menu('primary-menu',__( 'Primary Menu', 'aok-theme' ));
}
add_action( 'init', 'register_theme_menus' );

function wpt_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

wpt_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
wpt_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

add_action( 'widgets_init', 'wpa199335_page_sidebar' );

function wpa199335_page_sidebar(){
    register_sidebar(array(
        'name' => __( 'Page Sidebar', 'aok-theme'),
        'id' => 'page',
        'description' => __( 'Displays on the side of pages with a sidebar','aok-theme' ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="module-heading">',
        'after_title' => '</h2>'
    ));
}

function wpaok_theme_styles(){
		wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/normalize.css' );
        wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
        wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );
}
add_action( 'wp_enqueue_scripts', 'wpaok_theme_styles' );

function wpaok_theme_scripts(){
	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );
	wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true );
}
add_action( 'wp_enqueue_scripts', 'wpaok_theme_scripts' );
?>
