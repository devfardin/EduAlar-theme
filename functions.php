<?php
define('BAITU_THEME_DIR', __DIR__);
define('BAITU_THEME_URL', get_stylesheet_directory_uri());

function baitu_theme_enqueue_style()
{
	wp_enqueue_style(
		'baitu-style',
		BAITU_THEME_URL . '/assets/css/main.css',
		array(),
		filemtime(filename: BAITU_THEME_DIR . '/assets/css/main.css')
	);
	wp_register_style(
		'baitu-lates-post-style',
		BAITU_THEME_URL . '/assets/css/latest-post.css',
		array(),
		filemtime(filename: BAITU_THEME_DIR . '/assets/css/main.css'),
		true
	);

}
add_action("wp_enqueue_scripts", "baitu_theme_enqueue_style");

// register all shortcodes files
require_once( BAITU_THEME_DIR . '/includes/shortcodes/latest-posts.php' );

// Elemenor widget
function cf_elementor_addon( $widgets_manager ) {
	require_once( BAITU_THEME_DIR . '/includes/widgets/nav-menu.php' );
	$widgets_manager->register( new \Elementor_nav_menu());
}
add_action( 'elementor/widgets/register', 'cf_elementor_addon' );