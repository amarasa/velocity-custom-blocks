<?php
$rows = get_field("foreground_image_set");
if ($rows) {
    shuffle($rows);
    $i = 0;

    foreach ($rows as $row) {
        $introductionPhoto = $row["image"]; ?>

<?php if (++$i == 2) {
            break;
        }
    }
}
?>

<?php $layout = get_field("layout"); ?>

<?php if ($layout == "full") { ?>
    <section class="relative white-links dark w-full ">
        <?php if (!wp_is_mobile()) { ?>
            <div class="absolute top-0 h-full w-full bg-cover bg-no-repeat bg-position opacity-80 full-width-feature" style="background-image: url(<?php echo get_field(
                                                                                                                                                        "background_image"
                                                                                                                                                    ); ?>);"></div>
        <?php } ?>
        <?php if (get_field('turn_on_overlay')) { ?>
            <div class="absolute top-0 z-10 h-full w-full opacity-60" style="background: linear-gradient(0deg, <?php echo get_field('bottom_gradient_overlay'); ?> 0%, <?php echo get_field('top_gradient_overlay'); ?> 100%);"></div>
        <?php } ?>
        <div class="relative pt-16 md:pt-32 pb-12 md:pb-20 z-20 text-white">
            <div class="container px-8 text-center">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="max-w-[730px] mx-auto">
                            <h1 class="text-3xl md:text-5xl mb-6 text-white font-bold"><?php echo get_field(
                                                                                            "headline"
                                                                                        ); ?></h1>
                            <div class="text-base md:text-xl mb-10"><?php echo get_field(
                                                                        "introduction_text"
                                                                    ); ?></div>

                            <div class="sm:flex justify-center items-center gap-4">
                                <?php while (have_rows("buttons")) :

                                    the_row();
                                    $button = get_sub_field("button");
                                ?>
                                    <a class="hover:text-white full-width-button button block mb-8" href="<?php echo $button["url"]; ?>" target="<?php echo $button["target"]; ?>"><?php echo $button["title"]; ?></a>
                                <?php
                                endwhile; ?>
                            </div>

                            <?php echo get_field("below_button_text"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } elseif ($layout == "squares") { ?>
    <section class="desktop-landing-page-intro hidden sm:hidden md:hidden lg:block landing-page-intro lg:h-[575px] xl:h-[700px] w-full mb-20 relative">
        <div class="absolute h-full w-1/2 right-0 bg-cover block hero-background rounded-bl-[75px]" style="background-image: url(<?php echo get_field(
                                                                                                                                        "background_image"
                                                                                                                                    ); ?>);"></div>
        <div class="absolute w-1/2 bg-cover bg-no-repeat right-0 hidden sm:hidden md:hidden lg:hidden xl-block hero-background" style="background-image: url(<?php echo get_field(
                                                                                                                                                                    "background_image"
                                                                                                                                                                ); ?>);"></div>
        <div class="h-full container px-8 absolute left-1/2 -translate-x-1/2 w-full z-10">
            <div class="grid grid-cols-12 gap-12 items-center lg:pt-8 xl:pt-20">
                <div class="col-span-5">
                    <h1 class="text-4xl font-bold mb-4"><?php echo get_field(
                                                            "headline"
                                                        ); ?></h1>
                    <div class="leading-8 mb-8">
                        <?php echo get_field("introduction_text"); ?>
                    </div>
                    <div class="flex gap-4 items-center justify-space-between">
                        <?php // Loop through rows.

                        while (have_rows("buttons")) :

                            the_row();
                            $button = get_sub_field("button");
                        ?>

                            <a class="button block w-full mb-8" href="<?php echo $button["url"]; ?>" target="<?php echo $button["target"]; ?>"><?php echo $button["title"]; ?></a>

                        <?php
                        endwhile; ?>
                    </div>

                    <div class="leading-7">
                        <?php echo get_field("below_button_text"); ?>
                    </div>
                </div>
                <div class="col-span-7">
                    <?php if (!wp_is_mobile()) { ?>
                        <div class="w-full h-[500px] bg-cover bg-center rounded-md shadow-lg" style="background: url(<?php echo $introductionPhoto["url"]; ?>);"><img src="<?php echo $introductionPhoto["url"]; ?>" alt="<?php echo $introductionPhoto["alt"]; ?>" loading="lazy" class="sr-only">
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile-landing-page-intro lg:hidden xl:hidden">
        <?php if (!wp_is_mobile()) { ?>
            <div class="mobile-landing-page-intro-background bg-cover bg-no-repeat h-[400px] sm:h-[400px] md:h-80 lg:h-56 -mb-48" style="background: url(<?php echo get_field(
                                                                                                                                                                "background_image"
                                                                                                                                                            ); ?>);"></div>
        <?php } ?>
        <div class="sm:w-full md:w-full lg:container xl:container px-8 sm:px-8 md:px-40 lg:px-8 xl:px-8">
            <?php if (!wp_is_mobile()) { ?>
                <img src="<?php echo $introductionPhoto["url"]; ?>" alt="<?php echo $introductionPhoto["alt"]; ?>" loading="lazy">
            <?php } ?>
            <h2 class="text-2xl landing-page-intro-headline font-bold mb-4 mt-4"><?php echo get_field(
                                                                                        "headline"
                                                                                    ); ?></h2>
            <div class="sm:leading-8 md:leading-8 lg:leading-8 xl:leading-8 mb-6">
                <?php echo get_field("introduction_text"); ?>
            </div>
            <div class="sm:flex sm:gap-4 sm:items-center sm:justify-space-between">
                <?php // Loop through rows.

                while (have_rows("buttons")) :

                    the_row();
                    $button = get_sub_field("button");
                ?>

                    <a class="button block w-full mb-4" href="<?php echo $button["url"]; ?>" target="<?php echo $button["target"]; ?>"><?php echo $button["title"]; ?></a>

                <?php
                endwhile; ?>
            </div>
            <div class="leading-5 mt-2 sm:mt-2 md:mt-2 md:pb-12 lg:pb-12 xl:pb-12">
                <?php echo get_field("contact_text"); ?>
            </div>
        </div>
    </section>
<?php } elseif ($layout == "circles") { ?>
    <section class="mobile-landing-page-intro lg:hidden">
        <div class="sm:w-full md:w-full lg:container xl:container px-8">
            <h2 class="landing-page-intro-headline font-bold mb-4 mt-4 text-3xl"><?php echo get_field(
                                                                                        "headline"
                                                                                    ); ?></h2>
            <div class="sm:leading-8 md:leading-8 lg:leading-8 mb-8">
                <?php echo get_field("introduction_text"); ?>
            </div>

            <div class="md:flex md:gap-4 mb-6 items-center justify-space-between">

                <?php while (have_rows("buttons")) :

                    the_row();
                    $button = get_sub_field("button");
                ?>
                    <a class="button block w-full mb-6" href="<?php echo $button["url"]; ?>" target="<?php echo $button["target"]; ?>"><?php echo $button["title"]; ?></a>
                <?php
                endwhile; ?>
            </div>

            <div class="leading-5 mt-2 sm:mt-2 md:mt-2 lg:pb-8">
                <?php echo get_field("below_button_text"); ?>
            </div>
        </div>
    </section>
    <section class="desktop-landing-page-intro hidden sm:hidden md:hidden lg:block landing-page-intro w-full sm:pt-10 md:pt-0">
        <div class="h-full container pt-10 xl:pt-0 px-8 w-full z-10">
            <div class="grid grid-cols-12 gap-8 items-center lg:-mt-10 lg:pt-0 pb-16">
                <div class="col-span-5">
                    <h1 class="landing-page-intro-headline mb-4 font-bold text-5xl"><?php echo get_field(
                                                                                        "headline"
                                                                                    ); ?></h1>
                    <div class="leading-8 mb-6">
                        <?php echo get_field("introduction_text"); ?>
                    </div>

                    <div class="flex gap-4 items-center justify-space-between mb-4">
                        <?php while (have_rows("buttons")) :

                            the_row();
                            $button = get_sub_field("button");
                        ?>
                            <a class="button block w-full mb-4" href="<?php echo $button["url"]; ?>" target="<?php echo $button["target"]; ?>"><?php echo $button["title"]; ?></a>
                        <?php
                        endwhile; ?>
                    </div>
                    <div class="leading-7">
                        <?php echo get_field("below_button_text"); ?>
                    </div>
                </div>
                <div class="col-span-7">
                    <div class="rounded-full relative top-[120px] left-0 w-[510px] h-[510px] bg-cover" style="background-image: url(<?php echo $introductionPhoto["url"]; ?>);">
                        <img src="<?php echo $introductionPhoto["url"]; ?>" alt="<?php echo $introductionPhoto["alt"]; ?>" class="sr-only">
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php } ?>