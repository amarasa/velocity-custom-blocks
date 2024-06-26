<div class="bg-[#f5f5f5] p-8 text-center">
    <div class="max-w-[800px] mx-auto my-8">
        <h3>
            <?php echo get_field("headline"); ?>
        </h3>
        <p><?php echo get_field("description"); ?></p>

        <?php $affiliate_cta_button = get_field("button"); ?>
        <a href="<?php echo $affiliate_cta_button["url"]; ?>" target="<?php echo $affiliate_cta_button["target"]; ?>" class="button mb-8 max-w-[350px] mx-auto"><?php echo $affiliate_cta_button["title"]; ?></a>

        <div class="disclaimer-text">
            <?php echo get_field("disclaimer"); ?>
        </div>
    </div>
</div>