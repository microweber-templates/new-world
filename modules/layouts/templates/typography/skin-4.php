<?php

/*

type: layout

name: Typography 4

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

<style>
    .mw-default-layout-typography-4 ul.mw-default-layout-un-ordered li {
        position: relative;
        padding-left: 20px;
    }

    .mw-default-layout-typography-4 ul.mw-default-layout-un-ordered li:before {
        content: '\2022';
        display: block;
        font-weight: 900;
        float: left;
        margin-right: 5px;
        top: 0%;
        left: 0;
        position: absolute;
    }

    .typography-4 ul.mw-default-layout-un-ordered li:after {
        clear: both;
        display: block;
        content: '';
    }
</style>

<section class="section <?php print $layout_classes; ?> edit" field="layout-typography-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="col mw-default-layout-typography-4">
        <div class="element">
            <ul class="mw-default-layout-un-ordered ml-2">
                <li class="mb-3">Unordered list item 1</li>
                <li class="mb-3">Unordered list item 2</li>
                <li class="mb-3">Unordered list item 3</li>
            </ul>
        </div>
    </div>
</section>

