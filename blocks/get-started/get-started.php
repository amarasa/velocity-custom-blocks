<?php $background_image = get_field('background_image'); ?>
<section class="first-step get-started">
    <div class="sm:w-full md:container md:mt-16 bg-cover py-8 md:pt-14 md:pb-14 md:mb-16 md:mx-auto relative dark" style="background: url(<?php echo $background_image; ?>);">
        <?php if ($background_image) { ?><div class="first-step-overlay absolute h-full w-full top-0 left-0"></div><?php } ?>
        <div class="first-step-inner dark pb-24 pt-10">
            <div class="first-step-text text-center">
                <h2 class="text-2xl lg:text-3xl pb-5 text-white font-bold">
                    <?php echo get_field('headline'); ?>
                </h2>
                <div class="text-white px-8 sm:px-8 md:px-8 lg:px-0 xl:px-0">
                    <?php echo get_field('text'); ?>
                </div>
            </div>

            <div class="first-step-button-container text-center">
                <?php $first_step_button = get_field('button'); ?>
                <?php if ($first_step_button) { ?>
                    <a id="landing-page-first-step-button" class="button first-step-button relative" href="<?php echo $first_step_button['url']; ?>" target="<?php echo $first_step_button['target']; ?>"><?php echo $first_step_button['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>