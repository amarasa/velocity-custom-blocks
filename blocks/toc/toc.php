<div class="article-toc">
    <h4>What's in this article?</h4>
    <?php while (have_rows("toc_repeater")) :
        the_row(); ?>
        <div class="article-toc-row grid grid-cols-12">
            <div class="article-toc-title col-span-9">
                <?php echo get_sub_field("label"); ?>
            </div>
            <div class="article-toc-link col-span-3 text-right">
                <a href="#<?php echo get_sub_field(
                                "anchor"
                            ); ?>">Jump <span class="article-toc-link-arrow">↓</span></a>
            </div>
        </div>
    <?php
    endwhile; ?>
</div>