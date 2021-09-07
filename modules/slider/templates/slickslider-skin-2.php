<?php

/*

  type: layout

  name: Slick Slider - Skin 2

  description: Slick Slider - Skin 2


*/

?>

<?php
$slides_xs = get_option('slides-xs', $params['id']);
if ($slides_xs === null OR $slides_xs === false OR $slides_xs == '') {
    $slides_xs = '1';
}

$slides_sm = get_option('slides-sm', $params['id']);
if ($slides_sm === null OR $slides_sm === false OR $slides_sm == '') {
    $slides_sm = '1';
}

$slides_md = get_option('slides-md', $params['id']);
if ($slides_md === null OR $slides_md === false OR $slides_md == '') {
    $slides_md = '1';
}

$slides_lg = get_option('slides-lg', $params['id']);
if ($slides_lg === null OR $slides_lg === false OR $slides_lg == '') {
    $slides_lg = '1';
}

$slides_xl = get_option('slides-lg', $params['id']);
if ($slides_xl === null OR $slides_xl === false OR $slides_xl == '') {
    $slides_xl = '1';
}

$thumb_quality_x = '1920';
$thumb_quality_x = $thumb_quality_x / $slides_xl;

$thumb_quality_y = '1920';
$thumb_quality_y = $thumb_quality_y / $slides_xl;
?>

<div class="product-slider">
    <div class="slickSlider">
        <?php foreach ($data as $slide) { ?>
            <div class="slide">
                <div class="holder">
                    <?php if (isset($slide['url'])): ?><a href="<?php print $slide['url']; ?>"><?php endif; ?>
                        <img src="<?php print thumbnail($slide['images'][0], $thumb_quality_x, $thumb_quality_y); ?>"/>
                        <?php if (isset($slide['url'])): ?></a><?php endif; ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
