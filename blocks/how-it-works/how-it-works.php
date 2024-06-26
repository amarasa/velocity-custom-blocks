<section class="how-it-works w-full pt-16 pb-8 dark">
    <div class="container px-8">
        <div class="grid grid-cols-12">
            <div class="col-span-12 sm:col-span-12 md:col-span-8 lg:col-span-8 xl:col-span-8 md:col-start-3 lg:col-start-3 xl:col-start-3">
                <h2 class="text-2xl md:text-3xl text-white text-center mb-8 font-bold">
                    <span class="text-white"><?php echo get_field('headline'); ?></span>
                </h2>
                <div class="leading-5 text-center mb-74 text-base">
                    <?php echo get_field('description'); ?>
                </div>
            </div>
        </div>
        <?php if (get_field('display_numbered') == 1) { ?>
            <div class="grid grid-cols-12 md:gap-x-8 mt-12">
                <?php while (have_rows('boxes')) : the_row(); ?>
                    <div class="col-span-12 sm:col-span-12 md:col-span-4 lg:col-span-4 xl:col-span-4">
                        <div class="dark-section-box relative text-center" data-aos="fade-up" data-aos-delay="<?php echo get_row_index(); ?>00">
                            <div class="dark-section-number relative bg-white inline-block w-[37px] h-[37px] mx-auto rounded-full text-center mb-0">
                                <span class="absolute top-1/2 left-1/2 font-bold -translate-x-1/2 -translate-y-1/2"><?php echo get_row_index(); ?></span>
                            </div>

                            <div class="dark-section-box-text text-white text-center">
                                <div class="text-base"><?php echo get_sub_field('box_text'); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
    </div>
<?php } ?>

</section>