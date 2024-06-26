<section class="bg-[#eeeeef] pt-24 pb-24 px-8 why-us" id="<?php echo get_field('anchor_id'); ?>">
    <div class="container">
        <h2 class="text-2xl text-center md:text-4xl font-bold mb-5 max-w-[730px] mx-auto"><?php echo get_field('headline'); ?></h2>

        <p class="text-lg text-center leading-normal mb-10 max-w-[730px] mx-auto"><?php echo get_field('description'); ?></p>
    </div>
    <div class="grid grid-cols-12 md:gap-x-8 max-w-[730px] mx-auto text-center">
        <?php
        while (have_rows('reasons')) : the_row(); ?>
            <div class="col-span-12 md:col-span-6 mb-14">
                <div class="text-3xl">
                    <i class="fa <?php echo get_sub_field('icon'); ?> icon bg-white p-4 inline-block rounded-full w-16 h-16 text-center mb-4"></i>
                </div>
                <h3 class="tracking-widest font-bold uppercase text-base mb-2"><?php echo get_sub_field('sub-headline'); ?></h3>
                <p class="text-base"><?php echo get_sub_field('description'); ?></p>
            </div>
        <?php endwhile; ?>
    </div>
    <div class="text-center">
        <?php $why_link = get_field('why_link'); ?>
        <?php if ($why_link) { ?>
            <a href="<?php echo $why_link['url']; ?>" class="text-lg font-bold block mb-8"><?php echo $why_link['title']; ?></a>
        <?php } ?>
    </div>
</section>