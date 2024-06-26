<section class="how-it-works-where-to-start w-full pt-16 pb-8 md:pb-48 dark">
    <div class="w-full sm:w-full md:w-full lg:container xl:container px-8">
        <div class="grid grid-cols-12">
            <div class="col-span-12 sm:col-span-12 md:col-span-8 lg:col-span-8 xl:col-span-8 md:col-start-3 lg:col-start-3 xl:col-start-3">
                <h2 class="text-2xl md:text-3xl text-white text-center mb-8 font-bold">
                    <?php echo get_field('how_it_works_headline'); ?>
                </h2>
                <div class="leading-5 text-center mb-74">
                    <?php echo get_field('how_it_works_description'); ?>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 md:gap-x-8 mt-12">
            <?php while (have_rows('boxes')) : the_row(); ?>
                <div class="col-span-12 sm:col-span-12 md:col-span-4 lg:col-span-4 xl:col-span-4">
                    <div class="dark-section-box relative text-center" data-aos="fade-up" data-aos-delay="<?php echo get_row_index(); ?>00">
                        <div class="dark-section-number relative bg-white inline-block w-[37px] h-[37px] mx-auto rounded-full text-center mb-0">
                            <span class="absolute top-1/2 left-1/2 font-bold -translate-x-1/2 -translate-y-1/2"><?php echo get_row_index(); ?></span>
                        </div>

                        <div class="dark-section-box-text text-white text-center">
                            <?php echo get_sub_field('box_text'); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<section class="lg:container lg:mx-auto bg-[#eeeeef] pt-14 px-8 lg:px-24 pb-16 md:-mt-36 lg:rounded-[20px] mb-12">
    <div class="grid grid-cols-12 md:gap-x-16">
        <div class="col-span-12 md:col-span-5">
            <h2 class="text-2xl md:text-3xl font-bold mb-6"><?php echo get_field('where_to_start_headline'); ?></h2>
            <?php echo get_field('where_to_start_text'); ?>
        </div>
        <div class="col-span-12 md:col-span-7">
            <div class="mt-7 mb-8 text-xl font-bold">
                <?php echo get_field('form_headline'); ?>
            </div>

            <?php $form_destination_page = get_field('form_destination_page'); ?>
            <form class="zip-code-form" action="<?php echo $form_destination_page; ?>" method="GET">
                <label for="zip-code" class="block">Zip Code</label>
                <div class="xl:flex xl:gap-6">
                    <div class="input-group relative">
                        <input type="tel" name="zip-code" minlength="5" maxlength="5" id="zip-code" class="required" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==5) return false;">
                        <input type="hidden" name="form_page" value="2">
                    </div>
                    <input class="w-full sm:w-full md:w-full lg:w-full xl:w-52 mt-5 sm:mt-5 md:mt-5 lg:mt-5 xl:mt-0 h-[62px]" type="submit" value="Continue">
                </div>
            </form>
            <?php $were_here_under_form_link = get_field('under_form_link'); ?>
            <?php if ($were_here_under_form_link) { ?>
                <a class="block underline mt-3.5" href="<?php echo $were_here_under_form_link['url']; ?>" target="<?php echo $were_here_under_form_link['target']; ?>"><?php echo $were_here_under_form_link['title']; ?></a>
            <?php } ?>
        </div>
    </div>
</section>