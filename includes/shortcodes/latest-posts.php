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
                <div class="latest-posts__row">
                    <?php while ($query->have_posts()):
                        $query->the_post(); ?>
                        <div class='latest-posts__inner'>
                            <div class='latest-posts__media'>
                                <a href="<?php the_permalink(); ?>" rel="bookmark"
                                    aria-label="More about <?php echo get_the_title(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>

                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
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