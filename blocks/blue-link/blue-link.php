<?php $blue_link = get_field('blue_link');

if ($blue_link['url']) {
    $blueLinkUrl = $blue_link['url'];
} else {
    $blueLinkUrl = '';
}

if ($blue_link['title']) {
    $blueLinkTitle = $blue_link['title'];
} else {
    $blueLinkTitle = 'Click Me';
}
?>

<a class="mb-8 block text-[20px] font-bold text-[blue] hover:text-[purple] underline tracking-tight" href="<?php echo $blueLinkUrl; ?>" target="<?php echo $blue_link['target']; ?>">
    <?php echo $blueLinkTitle; ?>
</a>