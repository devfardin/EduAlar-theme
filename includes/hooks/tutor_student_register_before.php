<?php
function tutor_student_register_form_before()
{
    ?>
    <div>
        <?php echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(656);
        ?>
    </div>
    <?php
}
add_action('tutor_before_student_reg_form', 'tutor_student_register_form_before');