<section class="py-8 md:py-20">
    <div class="md:container px-8">
        <h2 class="text-2xl md:text-[32px] leading-tight tracking-normal text-center font-bold mb-12 md:mb-14"><?php echo get_field(
                                                                                                                    "headline"
                                                                                                                ); ?></h2>

        <div class="grid grid-cols-12 md:gap-x-8">
            <?php while (have_rows("links")) :
                the_row(); ?>
                <div class="col-span-12 sm:col-span-6 md:col-span-4 mb-4">
                    <?php $link = get_sub_field("link"); ?>

                    <a href="<?php echo $link["url"]; ?>" class="text-center sm:text-left block text-xl md:text-2xl font-bold" target="<?php echo $link["target"]; ?>"><?php echo $link["title"]; ?></a>
                </div>
            <?php
            endwhile; ?>
        </div>
    </div>
</section>