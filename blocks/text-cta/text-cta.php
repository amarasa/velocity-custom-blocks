<?php $blue_link = get_field("link"); ?>
<a class="mb-8 block text-[20px] font-bold text-[blue] hover:text-[purple] underline tracking-tight" href="<?php echo $blue_link["url"]; ?>" target="<?php echo $blue_link["target"]; ?>"><?php echo $blue_link["title"]; ?></a>