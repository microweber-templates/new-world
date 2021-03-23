<?php

/*

type: layout

name: Typography 2

position: 2

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
    .mw-default-layout-typography-2 ul.mw-default-layout-un-ordered li {
          position: relative;
          padding-left: 20px;
      }

    .mw-default-layout-typography-2 ul.mw-default-layout-un-ordered li:before {
        content: '\2714';
        top: 0%;
        left: 0;
        position: absolute;
    }
</style>

<section class="section <?php print $layout_classes; ?> edit" field="layout-typography-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="col mw-default-layout-typography-2">
        <div class="element">
            <ul class="mw-default-layout-un-ordered ml-2">
                <li class="mb-3">Success checked list item</li>
                <li class="mb-3">Success checked list item</li>
                <li class="mb-3">Success checked list item</li>
            </ul>
        </div>
    </div>
</section>

