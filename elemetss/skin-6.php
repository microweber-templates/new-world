<?php

/*

type: layout

name: Typography 6

position: 6

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
    .mw-default-layout-typography-6 ul.mw-default-layout-paragraph li {
        position: relative;
        padding-left: 20px;
    }

    .mw-default-layout-typography-6 ul.mw-default-layout-paragraph li:before {
        content: '\275D';
        font-size: 22px;
        top: 0;
        left: 0;
        position: absolute;
    }

    small:before {
        content: "\2014 \00A0";
    }

</style>


<section class="section <?php print $layout_classes; ?> edit" field="layout-typography-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="col mw-default-layout-typography-6">
        <div class="element">
            <ul class="mw-default-layout-paragraph">
                <li class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <small class="text-muted">Someone famous in</small>
            </ul>
        </div>
    </div>
</section>


