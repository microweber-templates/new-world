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

<div class="edit safe-mode nodrop" field="layout-blockquotes-skin-3-<?php print $params['id'] ?>" rel="module">
    <section class="section-15 d-flex">
        <div class="container align-self-center allow-drop">
            <module type="testimonials" template="default"/>
        </div>
    </section>
</div>

