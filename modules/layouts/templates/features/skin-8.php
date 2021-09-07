<?php

/*

type: layout

name: Features Slider

position: 8

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>
<section class="section-20 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-features-skin-8-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-centerx">
            <div class="row">
                <div class="col-12 col-lg-12 col-lg-10 mx-auto">
                    <module type="slider" template="slickslider-skin-3"/>
                </div>
            </div>
        </div>
    </div>
</section>
