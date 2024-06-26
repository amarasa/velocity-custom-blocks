<div class="md:container px-8 mt-4 pb-8 md:pb-12">
    <div class="grid grid-cols-12 sm:gap-x-[50px] lg:gap-x-8">
        <article class="col-span-12 md:col-span-6 mb-8 md:mb-0">
            <?php echo get_field("left_column_text"); ?>
        </article>
        <div class="col-span-12 md:col-span-6">
            <div class="were-here-form relative bg-light-grey -ml-8 -mr-8 sm:ml-0 sm:mr-0">
                <div class="pt-16 px-8 lg:px-14 pb-[72px]">
                    <div class="mb-4 text-xl lg:text-[28px] leading-normal font-bold">
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
                </div>
            </div>
        </div>
    </div>
</div>