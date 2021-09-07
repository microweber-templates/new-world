<?php

/*

  type: layout

  name: Slick Slider - Features Cards

  description: Slick Slider - Features Cards


*/

?>

<?php
$slides_xs = get_option('slides-xs', $params['id']);
if ($slides_xs === null OR $slides_xs === false OR $slides_xs == '') {
    $slides_xs = '1';
}

$slides_sm = get_option('slides-sm', $params['id']);
if ($slides_sm === null OR $slides_sm === false OR $slides_sm == '') {
    $slides_sm = '2';
}

$slides_md = get_option('slides-md', $params['id']);
if ($slides_md === null OR $slides_md === false OR $slides_md == '') {
    $slides_md = '2';
}

$slides_lg = get_option('slides-lg', $params['id']);
if ($slides_lg === null OR $slides_lg === false OR $slides_lg == '') {
    $slides_lg = '3';
}

$slides_xl = get_option('slides-lg', $params['id']);
if ($slides_xl === null OR $slides_xl === false OR $slides_xl == '') {
    $slides_xl = '3';
}

$thumb_quality_x = '1920';
$thumb_quality_x = $thumb_quality_x / $slides_xl;

$thumb_quality_y = '1920';
$thumb_quality_y = $thumb_quality_y / $slides_xl;

$centerPadding = 'true';
?>


<div class="section-20">
    <div class="text-center text-white slickSlider">
        <?php foreach ($data as $slide) { ?>
            <div class="row m-0">
                <div class="col-12 col-sm-12 col-md-12">
                    <?php if (isset($slide['url']) AND $slide['url'] != ''): ?><a href="<?php print $slide['url']; ?>"><?php endif; ?>
                        <div class="background-image-holder" style="background-image: url('<?php print thumbnail($slide['images'][0], $thumb_quality_x, $thumb_quality_y); ?>');">
                            <div class="square">
                                <div class="content">
                                    <div class="icon-holder">
                                        <?php if (isset($slide['icon']) AND $slide['icon'] != ''): ?>
                                            <?php echo($slide['icon']); ?>
                                        <?php else: ?>
                                            <i class="mw-micon-solid-Hand"></i>
                                        <?php endif; ?>
                                    </div>

                                    <h3><?php echo($slide['primaryText']); ?></h3>
                                    <p class="m-t-10"><?php echo($slide['secondaryText']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php if (isset($slide['url']) AND $slide['url'] != ''): ?></a><?php endif; ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
