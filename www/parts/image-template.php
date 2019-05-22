<?php
/**
 * @var string $url
 * @var string $img
 * @var integer $i
 */
?>
<figure class="gallery">
    <a data-fancybox="example_group" class="fancybox-gallery" href="<?=$url?>"><img class="gallery_img" src='<?=$url?>' /></a>
    <figcaption><?=$img[$i]?></figcaption>
</figure>