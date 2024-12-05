<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<div class="baitu-body">
    <div id="content">
        <?php echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(post_id: 702); ?>
    </div>
</div>

<?php
get_footer();