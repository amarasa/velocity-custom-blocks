<div class="simple-cta-block bg-[#efefef]">
    <h3><?php echo get_field("headline"); ?></h3>
    <?php if (get_field("optional_text")) { ?>
        <div class="simple-cta-block-optional-text">
            <?php echo get_field("optional_text"); ?>
        </div>
    <?php } ?>
    <?php $button_link = get_field("button_link"); ?>
    <div class="text-center">
        <a href="<?php echo $button_link["url"]; ?>" class="button simple-cta-button block md:!inline-block !px-12 !mx-auto" target="<?php echo $button_link["target"]; ?>"><?php echo $button_link["title"]; ?></a>
    </div>
</div>