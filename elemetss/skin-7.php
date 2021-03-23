<?php

/*

type: layout

name: Typography 7

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

<style>
    .mw-default-layout-typography-7 ul.mw-default-layout-pre {
        background-color: rgba(0, 0, 0, 0.01);
        border: 1px solid rgba(51, 51, 51, 0.1);
        padding: 0.8em;}


</style>

<section class="section <?php print $layout_classes; ?> edit" field="layout-typography-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="col mw-default-layout-typography-7">
        <div class="element">
                <ul class="mw-default-layout-pre">
                    <li class="my-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                </ul>
        </div>
    </div>
</section>



