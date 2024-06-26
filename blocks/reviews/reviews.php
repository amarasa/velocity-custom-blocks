<section class="landing-page-reviews pt-32 lg:pt-16 mb-16 gutenberg-reviews-module">
    <div class="sm:w-full md:w-full lg:container xl:container px-8">
        <h2 class="mb-10 text-2xl md:text-3xl text-center font-bold"><?php echo get_field('headline'); ?></h2>

        <?php $quantity = get_field('reviews_quantity'); ?>
        <?php echo do_shortcode('[reviews quantity=' . $quantity . ']'); ?>

        <div class="text-center pt-16">
            <?php $reviews_link = get_field('reviews_link'); ?>
            <?php if ($reviews_link) { ?>
                <a class="font-bold" href="<?php echo $reviews_link['url']; ?>"><?php echo $reviews_link['title']; ?></a>
            <?php } ?>
        </div>
    </div>
</section>