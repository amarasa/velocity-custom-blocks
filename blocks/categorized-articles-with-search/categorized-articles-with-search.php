<div class="md:container px-8 py-8 md:py-12">
    <h2 class="text-xl sm:text-2xl md:text-3xl text-center mb-7 md:mb-10 font-bold tracking-normal"><?php echo get_field(
                                                                                                        "headline"
                                                                                                    ); ?></h2>

    <form role="search" method="get" id="searchform" class="searchform" action="/">
        <div class="grid grid-cols-12 md:gap-x-[30px] items-center mb-8">
            <div class="col-span-12 md:col-span-8 lg:col-span-9">
                <div class="relative">
                    <label class="sr-only" for="s">Search</label>
                    <input type="text" placeholder="Search" value="<?php get_search_query(); ?>" name="s" id="s" class="mb-2 md:mb-0 h-14 !pl-12" />
                    <i class="absolute top-4 left-[18px] fa fa-search !text-[20px] icon"></i>
                </div>
            </div>
            <div class="col-span-12 md:col-span-4 lg:col-span-3">
                <input type="submit" id="searchsubmit" value="Search" class="w-full block max-w-full" />
            </div>
        </div>
    </form>

    <div class="grid grid-cols-12 sm:gap-x-6">
        <?php if (get_field("recent_articles_or_hand_picked")) { ?>
            <?php $hand_picked_articles = get_field("hand_picked_articles"); ?>
            <?php foreach ($hand_picked_articles as $hand_picked_post) :
                setup_postdata($hand_picked_post); ?>

                <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-4 mb-12">
                    <?php
                    $feature_img_src = wp_get_attachment_image_url(
                        get_post_thumbnail_id($hand_picked_post),
                        "large"
                    );
                    $feature_img_srcset = wp_get_attachment_image_srcset(
                        get_post_thumbnail_id($hand_picked_post),
                        "large"
                    );
                    $fallback_img = get_field("fallback_image", "option");
                    ?>
                    <a href="<?php the_permalink($hand_picked_post); ?>" style="background: url(<?php if ($feature_img_src) {
                                                                                                    echo $feature_img_src;
                                                                                                } else {
                                                                                                    echo $fallback_img;
                                                                                                } ?>);" class="relative  bg-cover w-100 block bg-center mb-4 overflow-y-hidden  blog-entry-thumbnail">
                        <div class="read-more absolute -bottom-16 w-full text-white p-4 text-center uppercase left-0 transition-all duration-300 ease-in-out blog-entry-read-more font-semibold">
                            Read More
                        </div>
                    </a>

                    <div class="flex mb-4 text-sm">
                        <div class="date">
                            Posted on <?php
                                        $date = get_the_date("m/d/Y", $hand_picked_post);
                                        echo $date;
                                        ?>
                        </div>
                    </div>
                    <?php $post_title = get_the_title($hand_picked_post); ?>
                    <h2 class="text-xl md:text-2xl font-bold mb-4"><a class="transition-all duration-300 ease-in-out" href="<?php the_permalink($hand_picked_post); ?>"><?php echo $post_title; ?></a></h2>
                </div>
            <?php
            endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <?php } else { ?>
            <?php
            $omit_category = get_field("omit_category");
            $omitted_category = get_field("omitted_category");

            if ($omit_category) {
                $args = [
                    "posts_per_page" => 6,
                    "category__not_in" => $omitted_category,
                    "post_status" => "publish",
                ];
            } else {
                $args = [
                    "posts_per_page" => 6,
                    "post_status" => "publish",
                ];
            }

            // The Query
            $recent_posts_query = new WP_Query($args);

            // The Loop
            if ($recent_posts_query->have_posts()) {
                while ($recent_posts_query->have_posts()) {
                    $recent_posts_query->the_post(); ?>
                    <?php $postid = get_the_id(
                        $recent_posts_query->the_post()
                    ); ?>
                    <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-4 mb-12">
                        <?php
                        $feature_img_src = wp_get_attachment_image_url(
                            get_post_thumbnail_id(),
                            "large"
                        );
                        $feature_img_srcset = wp_get_attachment_image_srcset(
                            get_post_thumbnail_id(),
                            "large"
                        );
                        $fallback_img = get_field("fallback_image", "option");
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

                        <div class="flex mb-[15px] text-sm">
                            <div class="date">
                                Posted on <?php
                                            $date = get_the_date('m/d/Y');
                                            echo $date;
                                            ?>
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
            wp_reset_postdata();
            ?>
        <?php } ?>

    </div>
</div>