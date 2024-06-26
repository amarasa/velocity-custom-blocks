<div class="lead-magnet-cta-block">
    <?php $lead_magnet_image = get_field("image"); ?>
    <div class="lead-magnet-image-container" style="background-image: url(<?php echo $lead_magnet_image; ?>);">
        <img src="<?php echo $lead_magnet_image; ?>" class="sr-only">

        <div class="lead-magnet-smile" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/bottom-smile.svg);">
        </div>
    </div>
    <div class="lead-magnet-cta-content">
        <h3 class="lead-magnet-headline">
            <?php echo get_field("headline"); ?>
        </h3>
        <div class="lead-magnet-description">
            <?php echo get_field("description"); ?>
        </div>
        <div class="lead-magnet-button">
            <?php $lead_magnet_cta_button = get_field("button"); ?>

            <a href="<?php echo $lead_magnet_cta_button["url"]; ?>" target="<?php echo $lead_magnet_cta_button["target"]; ?>" class="button button-inline-block"><?php echo $lead_magnet_cta_button["title"]; ?></a>
        </div>
        <?php if (get_field("lead_magnet_cta_disclaimer")) { ?>
            <div class="lead-magnet-disclaimer">
                <?php echo get_field("lead_magnet_cta_disclaimer"); ?>
            </div>
        <?php } ?>
    </div>
</div>