<section class="mt-20 mb-32">
    <div class="lg:container px-8">
        <div class="grid grid-cols-12 lg:gap-x-12 items-center">
            <div class="col-span-12 lg:col-span-4 lg:col-start-2 order-2 lg:order-1 mt-8 lg:mt-0 hidden lg:block">
                <?php $first_step_circular_image = get_field('first_step_circular_image'); ?>
                <img src="<?php echo $first_step_circular_image['sizes']['introduction-rounded-photo']; ?>" alt="<?php echo $first_step_circular_image['alt']; ?>" class="rounded-full max-w-[312px] mx-auto" loading="lazy">
            </div>
            <div class="col-span-12 lg:col-span-6 order-1 lg:order-2">
                <h2 class="mb-4 text-3xl lg:text-5xl text-center lg:text-left font-bold"><?php echo get_field('headline'); ?></h2>

                <p class="text-center mx-auto mb-12 max-w-[563px] lg:ml-0 lg:text-left"><?php echo get_field('text'); ?></p>

                <?php $first_step_button = get_field('button'); ?>
                <?php if ($first_step_button) { ?>
                    <a href="<?php echo $first_step_button['url']; ?>" class="button mx-auto max-w-[315px] lg:ml-0"><?php echo $first_step_button['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>