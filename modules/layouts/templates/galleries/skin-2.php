<?php

/*

type: layout

name: Gallery

position: 2

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-galleries-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-centerx">
            <div class="row">
                <div class="col-12 col-lg-12 mx-auto text-center">
                    <h2 class="hr">Explore the features</h2>

                    <module type="slider" template="bxslider-skin-2" />
                </div>
            </div>
        </div>
    </div>
</section>
