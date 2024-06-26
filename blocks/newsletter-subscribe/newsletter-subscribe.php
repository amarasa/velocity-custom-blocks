<section class="bg-[#eeeeef] pt-8 md:pt-20 pb-12 md:pb-32">
    <div class="md:container px-8">
        <h2 class="text-2xl md:text-3xl leading-tight font-bold mb-10"><?php echo get_field(
                                                                            "headline"
                                                                        ); ?></h2>

        <div class="mailing-list-form">
            <?php $form = get_field("form"); ?>
            <?php echo do_shortcode(
                "[gravityform id=" .
                    $form .
                    " ajax=true description=false title=false]"
            ); ?>
        </div>
    </div>
</section>