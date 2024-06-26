<?php $background_image = get_field('background_image'); ?>
<section class="bg-dark bg-no-repeat bg-cover relative py-24">
    <div class="w-full">
        <div class="absolute z-10 top-0 left-0 h-full w-full bg-cover bg-no-repeat bg-position mix-blend-darken" style="background-image: url(<?php echo $background_image; ?>);"></div>
        <?php if ($background_image) { ?><div class="absolute left-0 top-0 z-10 h-full w-full hero-overlay opacity-80"></div><?php } ?>
        <div class="max-w-[606px] mx-auto relative z-30 px-8">
            <div class="first-step-text text-center mb-12">
                <h2 class="text-2xl lg:text-3xl pb-5 text-white font-bold">
                    <?php echo get_field('headline'); ?>
                </h2>
                <div class="text-white">
                    <?php echo get_field('description'); ?>
                </div>
            </div>

            <?php $first_step_button = get_field('button'); ?>
            <?php if ($first_step_button) { ?>
                <a id="landing-page-first-step-button" class="bg-white relative mx-auto block p-4 sm:max-w-[315px] text-center font-bold hover:opacity-70" href="<?php echo $first_step_button['url']; ?>" target="<?php echo $first_step_button['target']; ?>"><?php echo $first_step_button['title']; ?></a>
            <?php } ?>
        </div>
    </div>
</section>