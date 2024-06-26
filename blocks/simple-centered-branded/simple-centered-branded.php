<div class="acf-block mb-16">
    <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8 dark">
        <h2 class="text-xl font-extrabold text-white sm:text-3xl">
            <span class="block"><?php echo get_field('primary_headline'); ?></span>
            <span class="block"><?php echo get_field('secondary_headline'); ?></span>
        </h2>
        <?php
        $primaryBtn = get_field('button_cta');
        if ($primaryBtn) :
            $primaryBtn_url = $primaryBtn['url'];
            $primaryBtn_title = $primaryBtn['title'];
            $primaryBtn_target = $primaryBtn['target'] ? $primaryBtn['target'] : '_self';
        ?>

        <?php endif; ?>
        <p class="mt-4 text-lg leading-6 text-white"><?php echo get_field('content'); ?></p>
        <a href="<?php echo esc_url($primaryBtn_url); ?>" target="<?php echo esc_attr($primaryBtn_target); ?>" class="button mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-white hover:bg-gray-50 hover:text-black sm:w-auto"> <?php echo esc_html($primaryBtn_title); ?> </a>
    </div>
</div>