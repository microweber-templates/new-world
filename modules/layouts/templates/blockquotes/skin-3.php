<?php

/*

type: layout

name: Testimonials

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

<div data-parallax="" data-overlay="5" data-overlay-black="" class="edit safe-mode nodrop" field="layout-skin-2-<?php print $params['id'] ?>" rel="module">
    <section class="section-15 d-flex background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/image.jpg');">
        <div class="container align-self-center <?php print $layout_classes; ?> allow-drop">
            <module type="testimonials" template="default"/>
        </div>
    </section>
</div>

