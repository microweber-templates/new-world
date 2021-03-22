<?php

/*

type: layout

name: Typography 3

position: 3

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
    .mw-default-layout-typography-3 p.mw-default-layout-highlight-line {

        border-left: 4px solid black;

    }

</style>


<section class="section <?php print $layout_classes; ?> edit" field="layout-typography-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="col mw-default-layout-typography-3">
        <div class="element ml-3">
            <p class="mw-default-layout-highlight-line pl-4">Highlighted text</p>
        </div>
    </div>
</section>
