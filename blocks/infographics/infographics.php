<div class="bg-[#eeeeef] py-8 md:py-20">
    <div class="md:container px-8">
        <h2 class="text-2xl md:text-[32px] text-center mb-7 md:mb-10 font-bold"><?php echo get_field(
                                                                                    "headline"
                                                                                ); ?></h2>

        <div class="grid grid-cols-4 md:gap-x-8">
            <?php $row_count = count(get_field("infographics")); ?>


            <?php while (have_rows("infographics")) :
                the_row(); ?>

                <?php
                $row_index = get_row_index();
                if ($row_count == $row_index) {
                    $rowClass = "md:col-span-2";
                    if ($row_count / 2 != 0) {
                        $rowClass = "md:col-span-2 md:col-start-2";
                    }
                } else {
                    $rowClass = "md:col-span-2";
                }
                ?>
                <div class="<?php echo $rowClass; ?> col-span-4 mb-8">
                    <?php
                    $infographic_image = get_sub_field("infographic_image");
                    $infographic_link = get_sub_field("infographic_link");
                    ?>
                    <a href="<?php echo $infographic_link["url"]; ?>" class="bg-white relative block px-9 pt-9 overflow-y-hidden">
                        <div class="infographic-thumbnail bg-cover block bg-center mb-2 overflow-y-hidden pb-[68%] relative top-2" style="background-image: url(<?php echo $infographic_image["url"]; ?>);" target="<?php echo $infographic_link["target"]; ?>">
                        </div>
                        <div class="read-more absolute z-10 lg:-bottom-16 w-full text-white p-4 text-center font-semibold left-0 transition-all duration-300 ease-in-out blog-entry-read-more text-[20px]">
                            <?php echo $infographic_link["title"]; ?>
                        </div>
                    </a>
                </div>
            <?php
            endwhile; ?>
        </div>
    </div>
</div>