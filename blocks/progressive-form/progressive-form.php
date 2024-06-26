<div class="progressive-form-block bg-[#efefef]">
    <?php if (get_field("headline")) { ?>
        <h3 class="progressive-form-block-headline">
            <?php echo get_field("headline"); ?>
        </h3>
    <?php } ?>
    <?php if (get_field("description")) { ?>
        <p class="progressive-form-introduction-text">
            <?php echo get_field("description"); ?>
        </p>
    <?php } ?>
    <div class="progressive-form-container">
        <?php $progressive_form = get_field("gravity_form"); ?>
        <?php echo do_shortcode(
            "[gravityform id=" .
                $progressive_form .
                " ajax=true description=false title=false]"
        ); ?>
    </div>
    <?php if (get_field("progressive_form_disclaimer")) { ?>
        <div class="progressive-form-disclaimer">
            <?php echo get_field("progressive_form_disclaimer"); ?>
        </div>
    <?php } ?>
</div>