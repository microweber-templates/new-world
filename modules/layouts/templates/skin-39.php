<?php

/*

type: layout

name: 3 columns maps

position: 39

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-39-<?php print $params['id'] ?>" rel="module">
    <div class="container" style="max-width:650px;">
        <div class="row">
            <div class="col-12 text-center allow-drop m-b-50">
                <h2 class="hr">Discover your challenge</h2>
                <p>Sed do eiusmod tempor incididunt u tempor incididun. Sed do eiusmod tempor incididunt u tempor incididun. Sed do eiusmod tempor incididunt u tempor incididun.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 text-center allow-drop m-t-30 cloneable">
                <img src="<?php print template_url(); ?>assets/img/map.jpg" alt="" style="width:100%;"/>
                <div class="element m-t-30 nodrop">
                    <module type="btn" text="CALL TO ACTION" />
                </div>
            </div>

            <div class="col-12 col-lg-4 text-center allow-drop m-t-30 cloneable">
                <img src="<?php print template_url(); ?>assets/img/map.jpg" alt="" style="width:100%;"/>
                <div class="element m-t-30 nodrop">
                    <module type="btn" text="CALL TO ACTION" />
                </div>
            </div>

            <div class="col-12 col-lg-4 text-center allow-drop m-t-30 cloneable">
                <img src="<?php print template_url(); ?>assets/img/map.jpg" alt="" style="width:100%;"/>
                <div class="element m-t-30 nodrop">
                    <module type="btn" text="CALL TO ACTION" />
                </div>
            </div>
        </div>
    </div>
</section>
