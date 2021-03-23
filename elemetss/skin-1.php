<?php

/*

type: layout

name: Typography 1

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

<style>
    .mw-default-layout-typography-1 ol.mw-default-layout-ordered li {
        list-style-type: decimal;
    }

    .mw-default-layout-typography-1 ul.mw-default-layout-ordered li:before {
        margin-right: 5px;
    }

</style>

<section class="section <?php print $layout_classes; ?> edit" field="layout-typography-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="col mw-default-layout-typography-1">
        <div class="element" >
            <ol class="mw-default-layout-ordered mb-1 ml-2">
                <li class="mb-3 ml-3">Ordered list item</li>
                <li class="mb-3 ml-3">Ordered list item</li>
                <li class="mb-3 ml-3">Ordered list item</li>
            </ol>
        </div>
    </div>
</section>
