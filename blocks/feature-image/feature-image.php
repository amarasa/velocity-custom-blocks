<section class="md:container md:px-8 my-8">
    <?php $feature_image = get_field('feature_image'); ?>
    <img src="<?php echo $feature_image['sizes']['about-us-photo']; ?>" alt="<?php echo $feature_image['alt']; ?>">
</section>