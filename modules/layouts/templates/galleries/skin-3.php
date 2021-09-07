<?php

/*

type: layout

name: Carousel Grid Gallery

position: 1

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-galleries-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-centerx">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto text-center">
                    <h2 class="m-b-30">Our Projects Gallery</h2>
                    <p class="lead">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <br/>

                    <module type="pictures" template="skin-7"/>
                </div>
            </div>
        </div>
    </div>
</section>
