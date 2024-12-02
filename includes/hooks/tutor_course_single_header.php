<?php
function tutor_course_single_header_Before()
{
    ?>
    <div>
        <?php echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(642);
        ?>
    </div>
    <?php
}
add_action('tutor_course/single/before/wrap', 'tutor_course_single_header_Before');