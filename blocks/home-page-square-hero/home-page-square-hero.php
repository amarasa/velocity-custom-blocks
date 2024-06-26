<?php
$rows = get_field('photo_set');
if ($rows) {
    shuffle($rows);
    $i = 0;

    foreach ($rows as $row) {
        $photo = ($row['photo']);
?>

<?php
        if (++$i == 2) break;
    }
}
?>

<section class="desktop-landing-page-intro hidden sm:hidden md:hidden lg:block landing-page-intro lg:h-[575px] xl:h-[700px] w-full relative">
    <div class="absolute h-full w-1/2 right-0 bg-cover block hero-background" style="background-image: url(<?php echo get_field('background_image'); ?>);"></div>
    <div class="absolute w-1/2 bg-cover bg-no-repeat right-0 hidden sm:hidden md:hidden lg:hidden xl-block hero-background" style="background-image: url(<?php echo get_field('background_image'); ?>);"></div>
    <div class="h-full container px-8 absolute left-1/2 -translate-x-1/2 w-full z-10">
        <div class="grid grid-cols-12 gap-12 items-center lg:pt-8 xl:pt-20">
            <div class="col-span-5">
                <h1 class="text-4xl font-bold mb-4"><?php echo get_field('headline'); ?></h1>
                <div class="leading-8 mb-8">
                    <?php echo get_field('introduction_text'); ?>
                </div>
                <div class="flex gap-4 items-center justify-space-between">
                    <?php     // Loop through rows.
                    while (have_rows('buttons')) : the_row();
                        $button = get_sub_field('button'); ?>

                        <a class="button block w-full mb-8" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>

                    <?php endwhile; ?>
                </div>

                <div class="leading-7">
                    <?php echo get_field('contact_text'); ?>
                </div>
            </div>
            <div class="col-span-7">
                <?php if (!wp_is_mobile()) { ?>
                    <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" loading="lazy" class="w-full">
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="mobile-landing-page-intro lg:hidden xl:hidden">
    <?php if (!wp_is_mobile()) { ?>
        <div class="mobile-landing-page-intro-background bg-cover bg-no-repeat h-56 sm:h-56 md:h-80 lg:h-56 xl:h-56 -mb-48" style="background: url(<?php echo get_field('background_image'); ?>);"></div>
    <?php } ?>
    <div class="sm:w-full md:w-full lg:container xl:container px-8 sm:px-8 md:px-40 lg:px-8 xl:px-8">
        <?php if (!wp_is_mobile()) { ?>
            <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" loading="lazy">
        <?php } ?>
        <h2 class="text-2xl landing-page-intro-headline font-bold mb-4 mt-4"><?php echo get_field('headline'); ?></h2>
        <div class="sm:leading-8 md:leading-8 lg:leading-8 xl:leading-8 mb-6">
            <?php echo get_field('introduction_text'); ?>
        </div>
        <div class="sm:flex sm:gap-4 sm:items-center sm:justify-space-between">
            <?php     // Loop through rows.
            while (have_rows('buttons')) : the_row();
                $button = get_sub_field('button'); ?>

                <a class="button block w-full mb-4" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>

            <?php endwhile; ?>
        </div>
        <div class="leading-5 mt-2 sm:mt-2 md:mt-2 md:pb-12 lg:pb-12 xl:pb-12">
            <?php echo get_field('contact_text'); ?>
        </div>
    </div>
</section>