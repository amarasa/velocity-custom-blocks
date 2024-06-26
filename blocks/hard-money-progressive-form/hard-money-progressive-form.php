<div class="progressive-form-block px-8 bg-[#e5e7eb]">
    <?php if (get_field("headline")) { ?>
        <h3 class="text-center">
            <?php echo get_field("headline"); ?>
        </h3>
    <?php } ?>
    <?php if (get_field("description")) { ?>
        <p class="text-center">
            <?php echo get_field("description"); ?>
        </p>
    <?php } ?>
    <div class="progressive-form-container">
        <?php $form = get_field("form"); ?>
        <?php echo do_shortcode(
            "[gravityform id=" .
                $form .
                " ajax=true description=false title=false]"
        ); ?>
    </div>
    <?php if (get_field("progressive_form_disclaimer")) { ?>
        <div class="progressive-form-disclaimer">
            <?php echo get_field("progressive_form_disclaimer"); ?>
        </div>
    <?php } ?>
</div>