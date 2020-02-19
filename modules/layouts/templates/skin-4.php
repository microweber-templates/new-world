<?php

/*

type: layout

name: 3 columns images with buttons

position: 4

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 text-center allow-drop m-t-30 cloneable">
                <img src="<?php print template_url(); ?>assets/img/img-4.png" alt="" style="width:100%;"/>
                <div class="element m-t-30 nodrop cloneable">
                    <module type="btn" template="bootstrap" button_style="btn-primary" text="CALL TO ACTION" />
                </div>
            </div>

            <div class="col-12 col-lg-4 text-center allow-drop m-t-30 cloneable">
                <img src="<?php print template_url(); ?>assets/img/img-5.png" alt="" style="width:100%;"/>
                <div class="element m-t-30 nodrop cloneable">
                    <module type="btn" template="bootstrap" button_style="btn-primary" text="CALL TO ACTION" />
                </div>
            </div>

            <div class="col-12 col-lg-4 text-center allow-drop m-t-30 cloneable">
                <img src="<?php print template_url(); ?>assets/img/img-6.png" alt="" style="width:100%;"/>
                <div class="element m-t-30 nodrop cloneable">
                    <module type="btn" template="bootstrap" button_style="btn-primary" text="CALL TO ACTION" />
                </div>
            </div>
        </div>
    </div>
</section>
