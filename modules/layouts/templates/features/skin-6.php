<?php

/*

type: layout

name: Features

position: 6

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-90';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-90';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-13 <?php //print $layout_classes; ?> edit safe-mode nodrop" data-background-position="center center" field="layout-features-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100 background-image-holder <?php print $layout_classes; ?>" style="background-image:url('<?php print template_url(); ?>assets/img/features-bg.png');">
        <div class="container align-self-center">
            <div class="row">
                <div class="col-12 col-lg-12 mx-auto text-center text-white">
                    <div class="row">
                        <div class="icon-holder col-12 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Sunglasses-2 safe-element"></i>
                            <h6><span class="js-start-from-zero safe-element" data-counter>300</span></h6>
                            <h6>Sunny days</h6>
                        </div>

                        <div class="icon-holder col-12 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Open-Book safe-element"></i>
                            <h6><span class="js-start-from-zero safe-element" data-counter>50</span></h6>
                            <h6>New books</h6>
                        </div>

                        <div class="icon-holder col-12 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Handshake safe-element"></i>
                            <h6><span class="js-start-from-zero safe-element" data-counter>100</span></h6>
                            <h6>New friends</h6>
                        </div>

                        <div class="icon-holder col-12 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Cranium safe-element"></i>
                            <h6><span class="js-start-from-zero safe-element" data-counter>1000</span></h6>
                            <h6>Hours coding</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
