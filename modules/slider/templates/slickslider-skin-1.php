<?php

/*

  type: layout

  name: Slick Slider - Default

  description: Slick Slider - Default


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
<style>
    #<?php print $params['id']; ?> i.mw-icon-module{
        font-size: 28px;
    }
</style>
<div class="container product-slider-holder section-silver">
    <div class="slider-wrapper">
        <div class="product-slider">
            <div class="slickSlider">
                <?php foreach ($data as $slide) { ?>
                    <div class="slide">
                        <div class="row flexbox-container">
                            <div class="col-12 col-lg-6 img-holder">
                                <?php if (isset($slide['images'][0])): ?>
                                    <img src="<?php print thumbnail($slide['images'][0], $thumb_quality_x, $thumb_quality_y); ?>"/>
                                <?php endif; ?>
                            </div>

                            <div class="col-12 col-lg-6 left-side">
                                <h3><?php print $slide['primaryText']; ?></h3>
                                <p><?php print $slide['secondaryText']; ?></p>
                                <br/>
                                <br/>
                                <?php if (isset($slide['url']) AND $slide['url'] != ''): ?>
                                    <p class="m-t-10">
                                        <a href="<?php print $slide['url']; ?>" class="btn btn-default btn-md">
                                            <?php if (isset($slide['icon'])) { ?>
                                                <?php print $slide['icon']; ?>
                                            <?php } ?>
                                            <?php if (isset($slide['seemoreText']) and $slide['seemoreText'] != ''): ?>
                                                <?php print $slide['seemoreText']; ?>
                                            <?php else: ?>
                                                View More
                                            <?php endif; ?>
                                        </a>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
