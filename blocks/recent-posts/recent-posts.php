<section class="recent-posts pt-8 pb-24">
    <div class="lg:container px-8">
        <div class="grid grid-cols-12 lg:gap-8 items-baseline mb-10">
            <div class="col-span-12 text-center">
                <h2 class="text-2xl leading-tight font-bold"><?php echo get_field('headline'); ?></h2>
            </div>
        </div>
        <div class="grid grid-cols-12 sm:gap-8">
            <?php // WP_Query arguments
            $args = array(
                'posts_per_page' => 6
            );

            // The Query
            $recent_posts_query = new WP_Query($args);

            // The Loop
            if ($recent_posts_query->have_posts()) {
                while ($recent_posts_query->have_posts()) {
                    $recent_posts_query->the_post();
                    $post_id = get_the_ID();
            ?>
                    <?php
                    $feature_img_src = wp_get_attachment_image_url(get_post_thumbnail_id($post_id), 'large');
                    $feature_img_srcset = wp_get_attachment_image_srcset(get_post_thumbnail_id($post_id), 'large');
                    $fallback_img = get_field('fallback_image', 'option');
                    ?>
                    <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-4 mb-12 ">
                        <?php
                        $feature_img_src = wp_get_attachment_image_url(get_post_thumbnail_id($post_id), 'large');
                        $feature_img_srcset = wp_get_attachment_image_srcset(get_post_thumbnail_id($post_id), 'large');
                        $fallback_img = get_field('fallback_image', 'option');
                        ?>
                        <a href="<?php the_permalink(); ?>" style="background: url(<?php if ($feature_img_src) {
                                                                                        echo $feature_img_src;
                                                                                    } else {
                                                                                        echo $fallback_img;
                                                                                    } ?>);" class="relative  bg-cover w-100 block bg-center mb-4 overflow-y-hidden  blog-entry-thumbnail">
                            <div class="read-more absolute -bottom-16 w-full text-white p-4 text-center uppercase left-0 transition-all duration-300 ease-in-out blog-entry-read-more font-semibold">
                                Read More
                            </div>
                        </a>

                        <div class="flex mb-4 text-sm">
                            <div class="mr-4">
                                <?php $date = get_the_date();
                                echo $date; ?>
                            </div>
                        </div>

                        <h2 class="text-xl md:text-2xl font-bold mb-4"><a class="transition-all duration-300 ease-in-out" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
            <?php
                }
            } else {
                // no posts found
            }

            // Restore original Post Data
            wp_reset_postdata(); ?>
        </div>
        <div class="text-center">
            <?php $more_articles_link = get_field('more_articles_link'); ?>
            <?php if ($more_articles_link) { ?>
                <a href="<?php echo $more_articles_link['url']; ?>" class="font-bold text-lg"><?php echo $more_articles_link['title']; ?></a>
            <?php } ?>
        </div>
    </div>
</section>