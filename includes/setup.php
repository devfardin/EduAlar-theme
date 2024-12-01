<?php
/**
 * Sets up theme defaults
 */
function devzet_theme_setup()
{
    update_option('thumbnail_size_w', 320);
    update_option('thumbnail_size_h', 200);
    update_option('thumbnail_crop', 1);
}
add_action('after_setup_theme', 'devzet_theme_setup');