<?php

/*

type: layout

name: Products

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-products-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <module type="shop/products" template="skin-1"/>
    </div>
</section>