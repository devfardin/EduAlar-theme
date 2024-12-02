<?php
function tutor_course_archive_after()
{
    ?>
    <div>
        <?php echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(post_id: 688);
        ?>
    </div>
    <?php
}
add_action('tutor_course_archive__before', 'tutor_course_archive_after');