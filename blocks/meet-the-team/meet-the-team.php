<section class="about-meet-the-team py-16 px-8">
    <h2 class="text-center mb-8">
        Meet the Team
    </h2>
    <div class="w-full sm:w-full md:w-full lg:container xl:container md:px-8 lg:px-8 xl:px-8">
        <div class="grid grid-cols-12 gap-x-6">
            <?php // WP_Query arguments
            $args = array(
                'post_type' => array('kal_loan_officers'),
                'posts_per_page'    => "-1"
            );

            // The Query
            $lo_query = new WP_Query($args);

            // The Loop
            if ($lo_query->have_posts()) {
                while ($lo_query->have_posts()) {
                    $lo_query->the_post();
                    $post_id = get_the_ID(); 

            ?>

                    <div class="col-span-12 sm:col-span-4 md:col-span-4 lg:col-span-3 mb-8 sm:mb-8 md:mb-16 lg:mb-16 xl:mb-16">
                        <?php
                        $lo_img_src = wp_get_attachment_image_url(get_post_thumbnail_id(), 'full');
                        ?>
                        <a class="block mb-1.5" href="<?php the_permalink(); ?>">
                            <div class="lo-image-container overflow-hidden relative bg-cover" style="background: url(<?php echo esc_url($lo_img_src); ?>);">
                                <img src="<?php echo esc_url($lo_img_src); ?>" alt="Photo of <?php the_title(); ?>" class="sr-only">
                                <div class="lo-read-more absolute p-8 text-center -bottom-8 w-full">
                                    <div class="lo-read-more-overlay bg-opacity-90 bg-tree-green w-full absolute p-4 left-0 z-10">
                                        <span class="lo-read-more-overlay-text text-white font-bold z-20 block w-full text-center">Read More</span>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <h3 class="text-2xl font-bold mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <h4 class="text-sm font-semibold tracking-wide uppercase"><?php echo get_field('title', $post_id); ?></h4>
                        <?php if (get_field('nmls_number')) { ?>
                            <div class="text-sm mb-4">NMLS #<?php echo get_field('nmls_number', $post_id); ?></div>
                        <?php } ?>
                        <?php if (get_field('phone_number')) { ?>
                            <a class="text-sm" href="tel:<?php echo get_field('phone_number', $post_id); ?>"><?php echo get_field('phone_number', $post_id); ?></a>
                        <?php } ?>
                    </div>
            <?php
                }
            }

            // Restore original Post Data
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>