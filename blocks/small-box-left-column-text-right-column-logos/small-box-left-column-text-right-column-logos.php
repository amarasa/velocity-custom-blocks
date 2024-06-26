<div class="relative small-box-left-column-text-right-column-logos">
    <hr class="hidden md:block" />

    <div class="max-w-[636px] mx-auto relative px-8 small-box-container">
        <div class="md:-mt-14 mb-14 small-box-sub-container">
            <div class="sm:flex sm:flex-wrap border-[1px] bg-white border-[#d8d8d8] items-center">
                <div class="border-b-[1px] sm:border-b-[0px] sm:border-r-[1px] border-[#d8d8d8] basis-[56%]">
                    <div class="pt-6 pr-9 pb-9 pl-9">
                        <h2 class="text-lg leading-6"><?php echo get_field('headline'); ?></h2>
                        <div class="text-sm mb-4 bullet-points"><?php echo get_field('text'); ?></div>
                        <?php $button = get_field('button'); ?>
                        <?php if ($button) { ?>
                            <a href="<?php echo $button['url']; ?>" class="button !py-3"><?php echo $button['title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="basis-[44%] py-8 sm:py-0">
                    <?php while (have_rows('logos')) : the_row(); ?>
                        <?php $logo = get_sub_field('logo'); ?>
                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="small-box-logo max-h-[40px] max-w-[200px] block mx-auto mb-6 last:mb-0">
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>