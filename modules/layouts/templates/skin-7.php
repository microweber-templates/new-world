<?php

/*

type: layout

name: Parallax

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

<section class="section-9 js-header-transparent <?php print $layout_classes; ?> edit safe-mode nodrop" data-parallax="" data-background-position="center top" field="layout-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="background-image-holder d-flex w-100" style="background-image: url('<?php print template_url(); ?>assets/img/parallax.jpg');">
        <div class="w-100 align-self-center text-center info-holder allow-drop"></div>
    </div>
</section>
