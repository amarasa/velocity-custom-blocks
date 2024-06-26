<?php
$classes = '';
$id = '';

if (!empty($block['className'])) {
    $classes .= sprintf(' %s', $block['className']);
}

if (!empty($block['anchor'])) {
    $id = sprintf(' id=\"%s\"', $block['anchor']);
}
?>
<section class="trusted-by container<?php echo esc_attr($classes); ?>" <?php echo $id; ?>>
    <div class="trusted-by-block mt-20">
        <h2 class="text-center"><?php echo get_field('trusted_by_headline'); ?></h2>

        <div class="trusted-by-logos">
            <?php while (have_rows('logos')) : the_row(); ?>
                <div class="trusted-by-logo">
                    <?php $logo = get_sub_field('logo'); ?>
                    <?php $link = get_sub_field('link_to'); ?>

                    <?php if ($link) : ?>
                        <?php $link_url = $link['url']; ?>
                        <a href="<?php echo esc_url($link_url); ?>" target="_blank">
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                        </a>
                    <?php else : ?>
                        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                    <?php endif; ?>
                </div>

            <?php endwhile; ?>
        </div>
    </div>
</section>