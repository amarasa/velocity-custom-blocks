<?php
$rows = get_field('photo_set');
if ($rows) {
    shuffle($rows);
    $i = 0;

    foreach ($rows as $row) {
        $introductionPhoto = ($row['photo']);
?>

<?php
        if (++$i == 2) break;
    }
}
?>
<section class="mobile-landing-page-intro lg:hidden xl:hidden">
    <div class="sm:w-full md:w-full lg:container xl:container px-8">
        <h2 class="landing-page-intro-headline font-bold mb-4 mt-4 text-3xl"><?php echo get_field('headline'); ?></h2>
        <div class="sm:leading-8 md:leading-8 lg:leading-8 xl:leading-8 mb-8">
            <?php echo get_field('introduction_text'); ?>
        </div>

        <div class="md:flex md:gap-4 mb-6 items-center justify-space-between">

            <?php while (have_rows('buttons')) : the_row();
                $button = get_sub_field('button'); ?>
                <a class="button block w-full mb-6" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
            <?php endwhile; ?>
        </div>

        <div class="leading-5 mt-2 sm:mt-2 md:mt-2 lg:pb-8 xl:pb-12">
            <?php echo get_field('contact_information'); ?>
        </div>
        <img src="<?php echo $introductionPhoto['sizes']['introduction-rounded-photo']; ?>" alt="<?php echo $introductionPhoto['alt']; ?>" class="md:max-w-[400px] md:mx-auto rounded-full relative top-10" loading="lazy">
    </div>
</section>
<section class="desktop-landing-page-intro hidden sm:hidden md:hidden lg:block landing-page-intro w-full sm:pt-10 md:pt-0">
    <div class="h-full container pt-10 xl:pt-0 px-8 w-full z-10">
        <div class="grid grid-cols-12 gap-8 items-center lg:-mt-10 lg:pt-0 pb-16">
            <div class="col-span-5">
                <h1 class="landing-page-intro-headline mb-4 font-bold text-5xl"><?php echo get_field('headline'); ?></h1>
                <div class="leading-8 mb-6">
                    <?php echo get_field('introduction_text'); ?>
                </div>

                <div class="flex gap-4 items-center justify-space-between mb-4">
                    <?php while (have_rows('buttons')) : the_row();
                        $button = get_sub_field('button'); ?>
                        <a class="button block w-full mb-4" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                    <?php endwhile; ?>
                </div>
                <div class="leading-7">
                    <?php echo get_field('contact_information'); ?>
                </div>
            </div>
            <div class="col-span-7">
                <img src="<?php echo $introductionPhoto['sizes']['introduction-rounded-photo']; ?>" alt="<?php echo $introductionPhoto['alt']; ?>" class="rounded-full relative left-11 top-[120px] w-full h-full max-w-full max-h-full">
            </div>
        </div>
    </div>
</section>