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



<?php if (!wp_is_mobile()) { ?>
    <img src="<?php echo $introductionPhoto['url']; ?>" class="sm:hidden" alt="<?php echo $introductionPhoto['alt']; ?>" loading="lazy">
<?php } ?>
<section class="relative white-links dark">
    <div class="absolute top-0 h-full w-full bg-cover bg-no-repeat bg-position opacity-80 full-width-feature" style="background-image: url(<?php echo $introductionPhoto['url']; ?>);"></div>
    <div class="absolute top-0 z-10 h-full w-full hero-overlay opacity-80"></div>
    <div class="relative pt-16 md:pt-32 pb-12 md:pb-20 z-20 text-white">
        <div class="container px-8 text-center">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="max-w-[730px] mx-auto">
                        <h1 class="text-3xl md:text-5xl mb-6 text-white font-bold"><?php echo get_field('headline'); ?></h1>
                        <div class="text-base md:text-xl mb-10"><?php echo get_field('text'); ?></div>

                        <div class="sm:flex justify-center items-center gap-4">
                            <?php while (have_rows('buttons')) : the_row();
                                $button = get_sub_field('button');
                            ?>
                                <a class="hover:text-white button block w-full mb-8" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                            <?php endwhile; ?>
                        </div>

                        <?php echo get_field('contact_text'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>