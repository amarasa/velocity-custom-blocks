<section class="landing-page-reviews py-16 md:pt-18 md:pb-20">
    <div class="md:container px-8">
        <h2 class="text-2xl md:text-3xl leading-tight tracking-normal font-bold text-center mb-10"><?php echo get_field(
                                                                                                        "headline"
                                                                                                    ); ?></h2>

        <section class="testimonials">
            <div class="lg:container xs:px-0">
                <div class="testimonials-slider-container">
                    <div class="testimonials-slider">
                        <?php $branch = get_field("branch"); ?>
                        <?php
                        $args = [
                            "post_type" => ["kal_testimonials"],
                            "posts_per_page" => -1,
                            "tax_query" => [
                                [
                                    "taxonomy" => "branch_location",
                                    "field" => "term_id",
                                    "terms" => $branch,
                                ],
                            ],
                        ];

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {

                                $query->the_post();
                                $mobileCount = 0;
                                $desktopCount = 0;
                                $postID = get_the_ID();
                        ?>
                                <div class="testimonials-slide">
                                    <div class="grid grid-cols-12 px-12 lg:px-0">
                                        <div class="col-span-12 lg:hidden flex gap-x-1 mb-4">
                                            <?php while (
                                                $mobileCount <
                                                get_field("star_rating", $postID)
                                            ) {
                                                $mobileCount++; ?>
                                                <i class="fa fa-star text-[#ff992d]"></i>
                                            <?php
                                            } ?>
                                        </div>
                                        <div class="col-span-12 lg:col-span-2 lg:col-start-2 hidden lg:block">
                                            <div class="flex mb-5 gap-x-1">
                                                <?php while (
                                                    $desktopCount <
                                                    get_field(
                                                        "star_rating",
                                                        $postID
                                                    )
                                                ) {
                                                    $desktopCount++; ?>
                                                    <i class="fa fa-star text-[#ff992d]"></i>
                                                <?php
                                                } ?>
                                            </div>
                                            <div class="font-bold text-dark-slate-blue">
                                                <?php echo get_field(
                                                    "reviewers_name",
                                                    $postID
                                                ); ?>
                                            </div>
                                            <div class="review-branch-location">
                                                <?php if (
                                                    has_term("", "branch_location")
                                                ) {
                                                    foreach (get_the_terms(
                                                            get_the_ID(),
                                                            "branch_location"
                                                        )
                                                        as $tax) {
                                                        echo __($tax->name);
                                                    }
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-7 lg:col-start-5">
                                            <div class="mb-4 leading-tight font-bold text-2xl"><?php the_title(); ?></div>

                                            <div class="leading-normal">
                                                <?php echo get_field(
                                                    "review",
                                                    $postID
                                                ); ?>
                                            </div>
                                        </div>
                                        <div class="col-span-12 block lg:hidden">
                                            <div class="font-bold text-dark-slate-blue">
                                                <?php echo get_field(
                                                    "reviewers_name",
                                                    $postID
                                                ); ?>
                                            </div>
                                            <div class="text-sm review-branch-location mb-3">
                                                <?php if (
                                                    has_term("", "branch_location")
                                                ) {
                                                    foreach (get_the_terms(
                                                            get_the_ID(),
                                                            "branch_location"
                                                        )
                                                        as $tax) {
                                                        echo __($tax->name);
                                                    }
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="testimonials-slider-navigation">
                        <div class="prev"><i class="fa fa-angle-left text-xl icon hover:opacity-70"></i></div>
                        <div class="next"><i class="fa fa-angle-right text-xl icon hover:opacity-70"></i></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center pt-16">
            <?php $reviews_link = get_field("link"); ?>
            <?php if ($reviews_link) { ?>
                <a class="font-bold" href="<?php echo $reviews_link["url"]; ?>"><?php echo $reviews_link["title"]; ?></a>
            <?php } ?>
        </div>
</section>