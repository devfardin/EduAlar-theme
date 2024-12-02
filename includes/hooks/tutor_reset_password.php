<?php
function tutor_reset_password__()
{
    ?>
    <div>
        <?php echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(post_id: 697);
        ?>
    </div>
    <?php
}
add_action('tutor_before_retrieve_password_form', 'tutor_reset_password__');