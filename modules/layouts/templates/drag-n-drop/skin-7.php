<?php

/*

type: layout

name: Video

position: 7

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


<section class="section <?php print $layout_classes; ?> edit safe-mode " field="layout-drag-n-drop-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-5 col">
                <img class="rounded-xl pb-4" src="<?php print template_url(); ?>assets/img/video_for_layouts.png" >
            </div>
        </div>
    </div>
</section>
