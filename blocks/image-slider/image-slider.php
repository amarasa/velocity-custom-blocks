<div class="image-slider-block my-8 relative">
    <div class="image-slider relative">
        <?php while (have_rows('image_slider')) : the_row(); ?>
            <?php $image = get_sub_field('image'); ?>

            <div class="image-slide">
                <img src="<?php echo $image['sizes']['blog-post-thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>
        <?php endwhile; ?>
    </div>
    <div class="image-slider-prev bg-white transition-all ease-in-out absolute px-4 py-2 top-1/2 left-0 z-90 -translate-y-1/2 hover:opacity-80 cursor-pointer"><i class="fa fa-angle-left text-xl icon"></i></div>
    <div class="image-slider-next bg-white transition-all ease-in-out absolute top-1/2 right-0 z-90 px-4 py-2 -translate-y-1/2 hover:opacity-80 cursor-pointer"><i class="fa fa-angle-right text-xl icon"></i></div>
</div>