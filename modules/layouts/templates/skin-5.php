<?php

/*

type: layout

name: Meeting

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


<section class="section-18 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="container text-white">
        <div class="row">
            <div class="col-12 text-center">
                <img src="<?php print template_url(); ?>assets/img/404_graphic.png"/>
            </div>
        </div>
    </div>
</section>
