<section class="md:container px-8 py-16 md:py-28 faq-section">
    <div class="max-w-[636px] mx-auto">
        <h2><?php echo get_field('headline'); ?></h2>

        <?php if (get_field('introduction_text')) { ?>
            <div class="mb-6 faq-intro-text">
                <?php echo get_field('introduction_text'); ?>
            </div>
        <?php } ?>

        <div class="accordion faq-accordion">
            <?php while (have_rows("faq_section")) :
                the_row(); ?>
                <?php if (get_row_index() == 1) {
                    $class = "a-container active";
                } else {
                    $class = "a-container";
                } ?>
                <div class="<?php echo $class; ?>">

                    <div class="a-btn">
                        <?php echo get_sub_field("faq_question"); ?>
                    </div>
                    <div class="a-panel"><?php echo get_sub_field("faq_answer"); ?></div>
                </div>
            <?php
            endwhile; ?>
        </div>
    </div>
</section>

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
    initAcc(".faq-accordion", true);
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            <?php $rowCount = count(get_field("faq_section")); ?>
            <?php $currentCount = 1; ?>
            <?php while (have_rows("faq_section")) :
                the_row(); ?> {
                    "@type": "Question",
                    "name": "<?php echo get_sub_field('faq_question'); ?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?php echo rip_tags(get_sub_field('faq_answer')); ?>"
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