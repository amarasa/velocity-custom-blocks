<?php
$middle_rows = get_field('photo_set');
if ($middle_rows) {
    shuffle($middle_rows);
    $i = 0;

    foreach ($middle_rows as $row) {
        $middlePagePhoto = ($row['photo']);
    }
}
?>

<section class="landing-page-middle-photo mb-8 md:mb-20">
    <div class="sm:w-full md:w-full lg:container xl:container lg:px-8 xl:px-8">
        <img src="<?php echo $middlePagePhoto['url']; ?>" alt="<?php echo $middlePagePhoto['alt']; ?>" loading="lazy">
    </div>
</section>