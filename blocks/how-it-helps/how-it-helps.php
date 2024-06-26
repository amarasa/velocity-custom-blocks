<section id="learn" class="pt-16 pb-16 sm:pb-120 md:pb-120 lg:pb-120 xl:pb-120 border-b">
    <div class="xl:container px-8">
        <h2 class="mb-8 text-2xl md:text-3xl font-bold"><?php echo get_field('headline'); ?></h2>
    </div>
    <div class="xl:container px-8">
        <div class="grid grid-cols-12 lg:gap-x-20">
            <div class="col-span-12 lg:col-span-6">
                <div>
                    <?php echo get_field('how_it_helps_text'); ?>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <ul class="checklist !font-semibold mb-10">
                    <?php while (have_rows('checklist')) : the_row(); ?>
                        <li data-aos="fade-up" data-aos-delay="<?php echo get_row_index(); ?>00"><?php echo get_sub_field('list_item'); ?></li>
                    <?php endwhile; ?>
                </ul>

                <?php $button = get_field('button'); ?>
                <?php if ($button) { ?>
                    <a class="button block" href="<?php echo $button['url']; ?>">
                        <?php echo $button['title']; ?>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>