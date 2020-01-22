<?php

/*

type: layout

name: Partners

position: 2

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-10';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-10';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section bg-primary <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-partners-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row partners element">
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/white-1.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/white-2.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/white-3.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/white-4.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/white-5.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/white-6.png" alt=""/>
                </div>
            </div>
        </div>
    </div>
</section>
