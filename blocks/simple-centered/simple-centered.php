<div class="acf-block relative bg-gray-50 overflow-hidden simple-centered">
    <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full" aria-hidden="true">
        <div class="relative h-full max-w-7xl mx-auto">
            <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
            </svg>
            <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
            </svg>
        </div>
    </div>
    <div class="relative pt-6 pb-16 sm:pb-24">
        <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline"><?php echo get_field('primary_headine'); ?></span>
                    <span class="block text-primary xl:inline"><?php echo get_field('sub_headine'); ?></span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    <?php echo get_field('content'); ?>
                </p>

                <?php
                $primaryBtn = get_field('primary_button');
                if ($primaryBtn) :
                    $primaryBtn_url = $primaryBtn['url'];
                    $primaryBtn_title = $primaryBtn['title'];
                    $primaryBtn_target = $primaryBtn['target'] ? $primaryBtn['target'] : '_self';
                ?>
                <?php endif; ?>
                <?php
                $secondaryBtn = get_field('secondary_button');
                if ($secondaryBtn) :
                    $secondaryBtn_url = $secondaryBtn['url'];
                    $secondaryBtn_title = $secondaryBtn['title'];
                    $secondaryBtn_target = $secondaryBtn['target'] ? $secondaryBtn['target'] : '_self';
                ?>
                <?php endif; ?>
                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                    <div class="rounded-md shadow">
                        <a href="<?php echo esc_url($primaryBtn_url); ?>" target="<?php echo esc_attr($primaryBtn_target); ?>" class="button w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-primary md:py-4 md:text-lg md:px-10"> <?php echo esc_html($primaryBtn_title); ?> </a>
                    </div>
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a href="<?php echo esc_url($secondaryBtn_url); ?>" target="<?php echo esc_attr($secondaryBtn_target); ?>" class="button w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-secondary md:py-4 md:text-lg md:px-10"> <?php echo esc_html($secondaryBtn_title); ?> </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>