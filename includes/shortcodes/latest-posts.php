<?php
function rander_edualar_latest_post()
{
    ob_start(); ?>

    <!-- Enqueue style  -->
    <?php
    wp_enqueue_style('edualar-lates-post-style');

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
    );
    $query = new \WP_Query($args);
    ?>
    <section class="latest-posts">
        <div class="latest-posts__container">
            <?php if ($query->have_posts()): ?>
                <!-- Get all post here  -->
                <div class="lates-posts__row">

                </div>

            <?php else: ?>
                <h1 class="latest-posts__empty_mesage">No posts are available at the moment</h1>
            <?php endif; ?>
        </div>
    </section>

    <?php
    return ob_get_clean();
}
add_shortcode('home_lates_post', 'rander_edualar_latest_post');