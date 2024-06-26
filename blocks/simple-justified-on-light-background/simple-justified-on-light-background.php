<div class="bg-gray-100 acf-block">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-24 lg:px-8 lg:flex lg:items-center lg:justify-between">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 md:text-4xl">
            <span class="block"><?php echo get_field('primary_headline'); ?></span>
            <span class="block text-primary"><?php echo get_field('secondary_headline'); ?></span>
        </h2>
        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <?php
            $primaryBtn = get_field('primary_button');
            if ($primaryBtn) :
                $primaryBtn_url = $primaryBtn['url'];
                $primaryBtn_title = $primaryBtn['title'];
                $primaryBtn_target = $primaryBtn['target'] ? $primaryBtn['target'] : '_self';
            ?>
            <?php endif; ?>
            <div class="inline-flex rounded-md shadow">
                <a href="<?php echo esc_url($primaryBtn_url); ?>" target="<?php echo esc_attr($primaryBtn_target); ?>" class="button inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary"> <?php echo esc_html($primaryBtn_title); ?></a>
            </div>
        </div>
    </div>
</div>