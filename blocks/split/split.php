<div class="acf-block lg:relative split">
    <div class="mx-auto max-w-7xl w-full pt-16 pb-20 text-center lg:py-48 lg:text-left">
        <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
                <span class="block xl:inline"><?php echo get_field('primary_headine'); ?></span>
                <span class="block text-secondary xl:inline"><?php echo get_field('sub_headline'); ?></span>
            </h1>
            <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
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
            <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                    <a href="<?php echo esc_url($primaryBtn_url); ?>" target="<?php echo esc_attr($primaryBtn_target); ?>" class="button w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary md:py-4 md:text-lg md:px-10"> <?php echo esc_html($primaryBtn_title); ?> </a>
                </div>
                <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                    <a href="<?php echo esc_url($secondaryBtn_url); ?>" target="<?php echo esc_attr($secondaryBtn_target); ?>" class="button w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-secondary bg-secondary md:py-4 md:text-lg md:px-10"> <?php echo esc_html($secondaryBtn_title); ?> </a>
                </div>
            </div>
        </div>
    </div>
    <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">

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
        <img class="absolute inset-0 w-full h-full object-cover" data-src="<?php echo $image['sizes']['large']; ?>" srcset="<?php echo $image['sizes']['medium_large']; ?> 991w" sizes="(max-width: 991px), 1200px" alt="<?php echo $image['alt']; ?>">
    </div>
</div>