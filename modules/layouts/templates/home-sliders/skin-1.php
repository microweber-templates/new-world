<?php

/*

type: layout

name: Home Slider 1

position: 2

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-0';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section js-header-transparent <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-home-sliders-skin-1-<?php print $params['id'] ?>" rel="module">
    <module type="slider" template="bxslider-skin-1"/>
</section>
