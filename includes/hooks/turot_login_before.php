<?php
function tutor_login_before()
{
    ?>
    <div>
        <?php echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(656);
        ?>
    </div>
    <?php
}
add_action('tutor/template/login/before/wrap', 'tutor_login_before');