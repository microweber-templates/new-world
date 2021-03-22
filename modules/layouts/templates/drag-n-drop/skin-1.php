<?php

/*

type: layout

name: Title with text

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


<section class="section <?php print $layout_classes; ?> edit safe-mode " field="layout-drag-n-drop-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-6 col">
                <h1 class="mb-3 font-weight-bold">Short Title</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <a href="">ut labore et</a> dolore magna aliqua.</p>
            </div>
        </div>
    </div>
</section>
