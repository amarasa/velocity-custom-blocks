<header class="px-8 py-4 md:py-8 overflow-x-hidden">
    <div class="grid grid-cols-12 items-center">
        <div class="col-span-4">
            <a href="<?php bloginfo('url'); ?>"><img class="max-w-[170px] md:max-w-[270px]" src="<?php echo get_field('header_logo', 'option'); ?>" alt="<?php bloginfo('title'); ?>"></a>
        </div>
        <div class="col-span-8">
            <div class="flex items-center justify-end gap-x-6">
                <a class="font-bold" href="<?php echo get_field('phone_number', 'option'); ?>"><?php echo get_field('phone_number', 'option'); ?></a>
                <?php $button = get_field('button'); ?>
                <?php if ($button) { ?>
                    <a href="<?php echo $button['url']; ?>" class="!hidden md:!block button btn-primary !px-12 !rounded-md !font-bold"><?php echo $button['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</header>