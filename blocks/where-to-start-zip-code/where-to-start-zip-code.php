<section class="landing-page-were-here pt-8 sm:pt-16 lg:mb-20">
    <div class="sm:w-full md:w-full lg:container xl:container px-8">
        <div class="grid grid-cols-12 lg:gap-8 items-center">
            <div class="col-span-12 lg:col-span-5">
                <h2 class="mb-4 text-3xl lg:text-4xl font-bold">
                    <?php echo get_field('headline'); ?>
                </h2>
                <div>
                    <?php echo get_field('text'); ?>
                </div>
                <?php $anchor_link = get_field('anchor_link'); ?>
                <a class="no-underline anchor-link hidden sm:hidden md:hidden lg:block xl:block text-lg font-semibold" href="<?php echo $anchor_link['url']; ?>"><span class="arrow relative no-underline">↓</span> <?php echo $anchor_link['title']; ?></a>
            </div>
            <div class="col-span-12 lg:col-span-6 lg:col-start-7">
                <div class="were-here-form relative bg-light-grey -ml-8 -mr-8 lg:ml-0 lg:mr-0 md:mt-10">
                    <div class="pt-16 px-8 lg:px-14 pb-[72px]">
                        <div class="mb-4 text-xl lg:text-3xl font-bold">
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
                        <?php $were_here_under_form_link = get_field('form_link'); ?>
                        <?php if ($were_here_under_form_link) { ?>
                            <a class="block underline mt-3.5" href="<?php echo $were_here_under_form_link['url']; ?>" target="<?php echo $were_here_under_form_link['target']; ?>"><?php echo $were_here_under_form_link['title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>