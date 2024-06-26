<?php $background_image = get_field('background_image'); ?>
<section class="desktop-landing-page-intro hidden lg:block landing-page-intro lg:h-[700px] w-full relative">
    <div class="md:absolute h-full w-1/2 right-0 bg-cover block hero-background" style="background-image: url(<?php echo $background_image['url']; ?>);"></div>
    <div class="h-full container max-w-[1400px] px-8 absolute left-1/2 -translate-x-1/2 w-full z-10">
        <div class="grid grid-cols-12 md:gap-x-16 items-center md:pt-8 lg:pt-24">
            <div class="col-span-5">
                <div class="secondary-color text-lg lg:text-2xl leading-tight font-bold">
                    <?php echo get_field('sub_headline'); ?>
                </div>
                <h1 class="primary-color">
                    <?php echo get_field('headline'); ?>
                </h1>
                <div class="text-lg md:text-xl">
                    <?php echo get_field('description'); ?>
                </div>
            </div>
            <div class="col-span-7">
                <div class="bg-[#eeeeef] pt-12 pr-14 pb-14 pl-14 max-w-[540px]">
                    <h2 class="mb-4 font-bold"><?php echo get_field('form_headline'); ?></h2>
                    <h3 class="mb-4 text-[#4d5257] !text-[22px]"><?php echo get_field('form_question'); ?></h3>
                    <?php $form_destination_page = get_field('form_destination_page'); ?>
                    <form class="zip-code-form" action="<?php echo $form_destination_page; ?>" method="GET">
                        <div class="flex gap-6 mb-6 items-end">
                            <div class="input-group relative">
                                <label for="zip-code" class="block">Zip Code</label>
                                <input type="tel" name="zip-code" minlength="5" maxlength="5" id="zip-code" class="required !mt-0" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;">
                                <input type="hidden" name="form_page" value="2">
                            </div>
                            <input class="w-full md:w-52 h-[62px]" type="submit" value="Continue">
                        </div>
                        <div>
                            <?php echo get_field('form_contact_information'); ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mobile-landing-page-intro lg:hidden">
    <div class="p-8">
        <div class="secondary-color text-lg leading-tight font-bold">
            <?php echo get_field('sub_headline'); ?>
        </div>
        <h1 class="primary-color">
            <?php echo get_field('headline'); ?>
        </h1>
        <div class="text-base md:text-lg">
            <?php echo get_field('description'); ?>
        </div>
    </div>
    <div class="p-8 bg-[#eeeeef]">
        <h2 class="mb-4 font-bold"><?php echo get_field('form_headline'); ?></h2>
        <h3 class="mb-4 text-[#4d5257] !text-[22px]"><?php echo get_field('form_question'); ?></h3>
        <form class="zip-code-form" action="<?php echo $form_destination_page; ?>" method="GET">
            <div class="mb-6">
                <div class="input-group relative mb-2">
                    <label for="zip-code" class="block">Zip Code</label>
                    <input type="tel" name="zip-code" minlength="5" maxlength="5" id="zip-code" class="required !mt-0" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;">
                    <input type="hidden" name="form_page" value="2">
                </div>
                <input class="w-full" type="submit" value="Continue">
            </div>
            <div class="leading-6">
                <?php echo get_field('form_contact_information'); ?>
            </div>
        </form>
    </div>
    <div class="dark">
        <img src="<?php echo $background_image['url']; ?>" alt="<?php echo $background_image['alt']; ?>" loading="lazy">
    </div>
</section>