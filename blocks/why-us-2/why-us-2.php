<section class="bg-[#eeeeef] pt-24 pb-24 overflow-x-hidden">
    <div class="lg:container px-8">
        <div class="grid grid-cols-12 md:gap-x-8">
            <div class="col-span-12 lg:col-span-5">
                <h2 class="text-2xl md:text-4xl font-bold mb-5"><?php echo get_field('headline'); ?></h2>

                <p class="text-lg leading-normal mb-8"><?php echo get_field('description'); ?></p>

                <?php $why_link = get_field('link'); ?>
                <?php if ($why_link) { ?>
                    <a href="<?php echo $why_link['url']; ?>" class="text-lg font-bold block mb-8"><?php echo $why_link['title']; ?></a>
                <?php } ?>
            </div>
            <div class="col-span-12 lg:col-span-7">
                <div class="grid grid-cols-12 md:gap-x-8">
                    <?php
                    while (have_rows('reasons')) : the_row(); ?>
                        <div class="col-span-12 md:col-span-6 mb-14">
                            <i class="fa <?php echo get_sub_field('icon'); ?> icon reasons-icon relative bg-white p-4 inline-block rounded-full w-16 h-16 text-center mb-4"></i>
                            <h3 class="tracking-widest font-bold uppercase text-base mb-2"><?php echo get_sub_field('sub-headline'); ?></h3>
                            <p class="text-base"><?php echo get_sub_field('description'); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>