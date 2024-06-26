<section class="dark pt-24 pb-24 home-page-circular-dark-section">
    <div class="container px-8">
        <div class="grid grid-cols-12">
            <div class="how-it-works-lc lg:max-w-[445px] lg:mx-auto col-span-12 md:col-span-5">
                <h2 class="text-3xl md:text-4xl mb-4 font-bold"><?php echo get_field('headline'); ?></h2>

                <?php echo get_field('description'); ?>
            </div>
            <div class="how-it-works-divider col-span-12 md:col-span-1">
                <div class="hidden md:block h-full w-[1px] bg-white opacity-50 mx-auto"></div>
            </div>
            <div class="how-it-works-rc col-span-12 md:col-span-6 lg:col-span-5">
                <ol class="dark-section-list-items md:mt-[70px]">
                    <?php
                    while (have_rows('list_items')) : the_row(); ?>
                        <li class="mb-6 md:last:mb-10"><?php echo get_sub_field('list_item'); ?></li>
                    <?php endwhile; ?>
                </ol>
            </div>
        </div>
    </div>
</section>