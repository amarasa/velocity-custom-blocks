<div class="accordion faq-accordion">
    <?php while (have_rows("accordion")) :
        the_row(); ?>
        <?php if (get_row_index() == 1) {
            $class = "a-container active";
        } else {
            $class = "a-container";
        } ?>
        <div class="<?php echo $class; ?>">

            <div class="a-btn">
                <?php echo get_sub_field("question"); ?>
            </div>
            <div class="a-panel"><?php echo get_sub_field("answer"); ?></div>
        </div>
    <?php
    endwhile; ?>
</div>

<script>
    function initAcc(elem, option) {
        document.addEventListener("click", function(e) {
            if (!e.target.matches(elem + " .a-btn")) return;
            else {
                if (!e.target.parentElement.classList.contains("active")) {
                    if (option == true) {
                        var elementList = document.querySelectorAll(
                            elem + " .a-container"
                        );
                        Array.prototype.forEach.call(elementList, function(e) {
                            e.classList.remove("active");
                        });
                    }
                    e.target.parentElement.classList.add("active");
                } else {
                    e.target.parentElement.classList.remove("active");
                }
            }
        });
    }
    initAcc(".accordion", true);
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            <?php $rowCount = count(get_field("accordion")); ?>
            <?php $currentCount = 1; ?>
            <?php while (have_rows("accordion")) :
                the_row(); ?> {
                    "@type": "Question",
                    "name": "<?php echo get_sub_field("question"); ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?php echo get_sub_field("answer"); ?>",
                    }
                }
                <?php
                if ($currentCount != $rowCount) { ?>,
            <?php }
                $currentCount++;

            endwhile; ?>
        ]
    }
</script>