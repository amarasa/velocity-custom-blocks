<div class="bg-[#f8f8f8] my-8 grid grid-cols-12 items-center gap-x-4 lead-magnet-block">
    <?php $image = get_field('image'); ?>
    <div class="lead-magnet-block-image col-span-12 xl:col-span-5 bg-cover h-full bg-center" style="background-image: url(<?php echo $image['url']; ?>);">
        <img src="<?php echo $image['url']; ?>" class="xl:sr-only">
    </div>
    <div class="col-span-12 xl:col-span-7 p-10">
        <div class="text-xl md:text-2xl mb-4 font-bold headline"><?php echo get_field('headline'); ?></div>
        <div class="text-gunmetal text-base mb-4"><?php echo get_field('paragraph'); ?></div>
        <?php $button = get_field('button'); ?>
        <a class="button block" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
    </div>
</div>