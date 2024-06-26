<?php
$classes = '';
$id = '';

if (!empty($block['className'])) {
    $classes .= sprintf(' %s', $block['className']);
}

if (!empty($block['anchor'])) {
    $id = sprintf(' id=\"%s\"', $block['anchor']);
}
?>
<section class="contained-video<?php echo esc_attr($classes); ?>" <?php echo $id; ?>>
    <div class="container-video mx-auto">
        <?php
        // Get the YouTube link from the ACF field
        $youtube_link = get_field('youtube_link');

        // Extract the video ID from the URL
        parse_str(parse_url($youtube_link, PHP_URL_QUERY), $youtube_params);
        $video_id = $youtube_params['v'];
        // Create the embed URL
        $embed_url = "https://www.youtube.com/embed/" . $video_id . "?rel=0&showinfo=0&modestbranding=1";

        // Output the iframe
        if ($video_id) {
        ?>
            <div class="video-container mb-20">
                <iframe width="560" height="315" src="<?php echo esc_url($embed_url); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        <?php
        }
        ?>

    </div>
</section>