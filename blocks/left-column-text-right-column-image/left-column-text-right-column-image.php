<section class="py-20 px-8 md:container left-column-text-right-column-image">
    <div class="grid grid-cols-12 lg:gap-8">
        <div class="col-span-12 md:col-span-7 lg:col-span-6">
            <?php echo get_field('left_column_text'); ?>
        </div>
        <div class="col-span-12 md:col-span-5 lg:col-start-8 md:text-right">
            <?php $right_column_image = get_field('right_column_image'); ?>
            <img src="<?php echo $right_column_image['url']; ?>" alt="<?php echo $right_column_image['alt']; ?>">
        </div>
    </div>
</section>