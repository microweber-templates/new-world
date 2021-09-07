<?php

/*

type: layout

name: Features

position: 3

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-10';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-12 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-features-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto text-center">
                    <div class="row">
                        <div class="icon-holder col-12 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Sunglasses-2 safe-element" contenteditable="false"></i>
                            <h6><span class="js-start-from-zero safe-element" data-counter>300</span></h6>
                            <p>Sunny days</p>
                        </div>

                        <div class="icon-holder col-12 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Handshake safe-element"></i>
                            <h6><span class="js-start-from-zero safe-element" data-counter>100</span></h6>
                            <p>New friends</p>
                        </div>

                        <div class="icon-holder col-12 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Open-Book safe-element"></i>
                            <h6><span class="js-start-from-zero safe-element" data-counter>50</span></h6>
                            <p>New books</p>
                        </div>

                        <div class="icon-holder col-12 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Cranium safe-element"></i>
                            <h6><span class="js-start-from-zero safe-element" data-counter>1000</span></h6>
                            <p>Hours coding</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
