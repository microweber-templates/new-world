<?php

/*

type: layout

name: Partners

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-partners-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row element m-b-40">
            <div class="col-12 text-center allow-drop">
                <h2 class="hr">Our Partners</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>

        <div class="row partners element">
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/black/img-1.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/black/img-2.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/black/img-3.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/black/img-4.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/black/img-5.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/black/img-6.png" alt=""/>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/black/img-6.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/black/img-5.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/black/img-4.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/black/img-3.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/black/img-2.png" alt=""/>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 cloneable">
                <div class="partner">
                    <img src="<?php print template_url(); ?>assets/img/partners/black/img-1.png" alt=""/>
                </div>
            </div>
        </div>
    </div>
</section>
