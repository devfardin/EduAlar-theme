<?php
define('BAITU_THEME_DIR', __DIR__);
define('BAITU_THEME_URL', get_stylesheet_directory_uri());

function edualar_theme_enqueue_style()
{
	wp_enqueue_style(
		'baitu-style',
		BAITU_THEME_URL . '/assets/css/main.css',
		array(),
		filemtime(filename: BAITU_THEME_DIR . '/assets/css/main.css')
	);
	wp_register_style(
		'edualar-lates-post-style',
		BAITU_THEME_URL . '/assets/css/latest-post.css',
		array(),
		filemtime(filename: BAITU_THEME_DIR . '/assets/css/main.css'),
	);

}
add_action("wp_enqueue_scripts", "edualar_theme_enqueue_style");

// register all shortcodes files
require_once( BAITU_THEME_DIR . '/includes/shortcodes/latest-posts.php' );

require_once( BAITU_THEME_DIR . '/includes/setup.php' );

// ALL Tutor hooks Here
require_once( BAITU_THEME_DIR . '/includes/hooks/tutor_course_single_header.php' );
require_once( BAITU_THEME_DIR . '/includes/hooks/turot_login_before.php' );
require_once( BAITU_THEME_DIR . '/includes/hooks/tutor_student_register_before.php' );
require_once( BAITU_THEME_DIR . '/includes/hooks/tutor_course_archive_after.php' );
require_once( BAITU_THEME_DIR . '/includes/hooks/tutor_reset_password.php' );

// Elemenor widget
function cf_elementor_addon( $widgets_manager ) {
	require_once( BAITU_THEME_DIR . '/includes/widgets/nav-menu.php' );
	$widgets_manager->register( new \Elementor_nav_menu());
}
add_action( 'elementor/widgets/register', 'cf_elementor_addon' );

// Hide user tool bar when user login
$current_user = wp_get_current_user();
if (is_user_logged_in() && in_array( 'administrator', $current_user->roles ) ) {
    show_admin_bar(true);
} else{
	show_admin_bar(false);
};