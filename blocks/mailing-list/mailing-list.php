<div class="mailing-list-block relative">
    <h3><?php echo get_field("mailing_list_headline"); ?></h3>

    <div class="mailing-list-form">
        <?php $mailing_list_form = get_field("form"); ?>

        <?php echo do_shortcode(
            "[gravityform id=" .
                $mailing_list_form .
                " ajax=true description=false title=false]"
        ); ?>
    </div>
</div>