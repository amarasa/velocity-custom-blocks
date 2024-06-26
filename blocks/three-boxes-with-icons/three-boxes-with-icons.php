<section class="pt-20 pb-11 px-8 xl:container">
    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-10 md:col-start-2 lg:col-span-8 lg:col-start-3">
            <h2 class="text-center text-3xl md:text-4xl mb-11"><?php echo get_field('headline'); ?></h2>
        </div>
    </div>
    <div class="md:flex md:flex-wrap lg:gap-8 justify-center">
        <?php while (have_rows('boxes')) : the_row(); ?>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="<?php echo get_row_index(); ?>00">
                <i class="fa <?php echo get_sub_field('icon'); ?> secondary-color text-xl mb-3"></i>
                <h3 class="text-2xl tracking-tight"><?php echo get_sub_field('box_headline'); ?></h3>
                <p class="text-base md:text-lg mb-0"><?php echo get_sub_field('box_description'); ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</section>