<?php

/*

type: layout

name: Image with title and text

position: 5

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


<section class="section <?php print $layout_classes; ?> edit safe-mode " field="layout-drag-n-drop-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-6 col">
                <img class="rounded-xl pb-4" src="<?php print template_url(); ?>assets/img/image-for-layouts.png" >
                <h1 class="mb-3 font-weight-bold">Short Title</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <a href="">ut labore et</a> dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</section>
