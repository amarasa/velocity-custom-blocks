<?php if ((get_field('enable_or_disable_2', 'option') == true)) { ?>
    <div class="my-8 bg-light-grey text-center p-8 sm:p-14">
        <h4 class="mt-0 text-2xl mb-4">
            <?php echo get_field('canned_cta_headline_2', 'option'); ?>
        </h4>
        <?php if (get_field('canned_cta_text_2', 'option')) { ?>
            <div class="text-xl mb-8">
                <?php echo get_field('canned_cta_text_2', 'option'); ?>
            </div>
        <?php } ?>
        <div class="sm:flex md:gap-x-4 items-center justify-center">
            <?php     // Loop through rows.
            while (have_rows('canned_cta_buttons_2', 'option')) : the_row(); ?>
                <div class="mb-4">
                    <?php $canned_cta_button_2 = get_sub_field('canned_cta_button_2'); ?>
                    <a class="button" href="<?php echo $canned_cta_button_2['url']; ?>" target="<?php echo $canned_cta_button_2['target']; ?>"><?php echo $canned_cta_button_2['title']; ?></a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php } ?>