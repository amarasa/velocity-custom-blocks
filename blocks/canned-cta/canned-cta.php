<?php if ((get_field('enable_or_disable', 'option') == true)) { ?>
    <?php if (get_field('manual_entry_custom_copy') == true) { ?>
        <div class="my-8 bg-light-grey text-center p-8 sm:p-14">
            <h4 class="mt-0 text-2xl mb-4">
                <?php echo get_field('manual_canned_cta_headline'); ?>
            </h4>
            <?php if (get_field('manual_canned_cta_text')) { ?>
                <div class="text-xl mb-8">
                    <?php echo get_field('manual_canned_cta_text'); ?>
                </div>
            <?php } ?>
            <div class="sm:flex md:gap-x-4 items-center justify-center">
                <?php     // Loop through rows.
                while (have_rows('manual_canned_cta_buttons')) : the_row(); ?>
                    <div class="mb-4">
                        <?php $manual_canned_cta_button = get_sub_field('manual_canned_cta_button'); ?>
                        <?php if ($manual_canned_cta_button) { ?>
                            <a class="button" href="<?php echo $manual_canned_cta_button['url']; ?>" target="<?php echo $manual_canned_cta_button['target']; ?>"><?php echo $manual_canned_cta_button['title']; ?></a>
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php } else { ?>
        <div class="my-8 bg-light-grey text-center p-8 sm:p-14">
            <h4 class="mt-0 text-2xl mb-4">
                <?php echo get_field('canned_cta_headline', 'option'); ?>
            </h4>
            <?php if (get_field('canned_cta_text', 'option')) { ?>
                <div class="text-xl mb-8">
                    <?php echo get_field('canned_cta_text', 'option'); ?>
                </div>
            <?php } ?>
            <div class="sm:flex md:gap-x-4 items-center justify-center">
                <?php     // Loop through rows.
                while (have_rows('canned_cta_buttons', 'option')) : the_row(); ?>
                    <div class="mb-4">
                        <?php $canned_cta_button = get_sub_field('canned_cta_button'); ?>
                        <a class="button" href="<?php echo $canned_cta_button['url']; ?>" target="<?php echo $canned_cta_button['target']; ?>"><?php echo $canned_cta_button['title']; ?></a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php } ?>
<?php } ?>