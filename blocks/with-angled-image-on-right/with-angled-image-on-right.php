<div class="acf-block relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
            <div>
                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">

                </div>
            </div>


            <div class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline"><?php echo get_field('primary_headline'); ?></span>
                        <span class="block text-primary xl:inline"><?php echo get_field('sub_headline'); ?></span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0"><?php echo get_field('content'); ?></p>

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
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="<?php echo esc_url($primaryBtn_url); ?>" target="<?php echo esc_attr($primaryBtn_target); ?>" class="button w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-secondary md:py-4 md:text-lg md:px-10"> <?php echo esc_html($primaryBtn_title); ?> </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="<?php echo esc_url($secondaryBtn_url); ?>" target="<?php echo esc_attr($secondaryBtn_target); ?>" class="button w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-secondary hover:bg-primary md:py-4 md:text-lg md:px-10"> <?php echo esc_html($secondaryBtn_title); ?> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <?php
        $type = get_field('image_style');
        if ($type == 'static') {
            $image = get_field('image');
        } else {

            $rows = get_field('images');
            if ($rows) {
                shuffle($rows);
                $i = 0;
                foreach ($rows as $row) {
                    $image = ($row['image']);
        ?>
        <?php
                    if (++$i == 2) break;
                }
            }
        }

        ?>
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" data-src="<?php echo $image['sizes']['large']; ?>" srcset="<?php echo $image['sizes']['medium_large']; ?> 991w" sizes="(max-width: 991px), 1200px" alt="<?php echo $image['alt']; ?>">
    </div>
</div>