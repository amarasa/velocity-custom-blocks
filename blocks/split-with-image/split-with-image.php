<div class="acf-block relative dark">
    <div class="h-56 dark sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
        <?php
        $image = get_field('image');
        if ($image) :

            // Image variables.
            $url = $image['url'];
            $title = $image['title'];
            $alt = $image['alt'];
            $caption = $image['caption'];

            // Thumbnail size attributes.
            $size = 'thumbnail';
            $thumb = $image['sizes'][$size];
            $width = $image['sizes'][$size . '-width'];
            $height = $image['sizes'][$size . '-height'];
        ?>
        <?php endif; ?>
        <img class="w-full h-full object-cover" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
    </div>
    <div class="absolute left-0 h-full top-0 md:w-1/2 bg-black opacity-40 z-90 object-cover"></div>
    <div class="relative max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
        <div class="md:ml-auto md:w-1/2 md:pl-10">
            <h2 class="text-base font-semibold uppercase tracking-wider text-gray-300"><?php echo get_field('eyebrow_text'); ?></h2>
            <p class="mt-2 text-white text-3xl font-extrabold tracking-tight sm:text-4xl"><?php echo get_field('primary_headline'); ?></p>
            <p class="mt-3 text-lg text-gray-300"><?php echo get_field('content'); ?></p>
            <div class="mt-8">
                <div class="inline-flex rounded-md shadow">
                    <?php
                    $primaryBtn = get_field('button_cta');
                    if ($primaryBtn) :
                        $primaryBtn_url = $primaryBtn['url'];
                        $primaryBtn_title = $primaryBtn['title'];
                        $primaryBtn_target = $primaryBtn['target'] ? $primaryBtn['target'] : '_self';
                    ?>
                    <?php endif; ?>
                    <a href="<?php echo esc_url($primaryBtn_url); ?>" target="<?php echo esc_attr($primaryBtn_target); ?>" class="button inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-primary">
                        <?php echo esc_html($primaryBtn_title); ?>
                        <!-- Heroicon name: solid/external-link -->
                        <svg class="-mr-1 ml-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                            <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>