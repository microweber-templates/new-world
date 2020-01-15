<?php

/*

type: layout

name: Instagram

position: 6

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

<section class="section-11 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-center info-holder">
            <div class="row">
                <div class="col-12 mx-auto text-center">
                    <div class="title-holder">
                        <div><i class="fab fa-instagram"></i></div>
                        <h2>#NATURE</h2>
                    </div>

                    <module type="instagram_feed" data-instagram="tour_alagoas" data-items="8" />
                </div>
            </div>
        </div>
    </div>
</section>
