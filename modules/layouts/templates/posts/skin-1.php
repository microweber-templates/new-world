<?php

/*

type: layout

name: Blog

position: 14

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-posts-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row element">
            <div class="col-12 text-center allow-drop">
                <h2 class="hr">Ready to get started?</h2>
                <p>Mon Ventoux helpt je op weg met de nodige expertise en inspiratie</p>
                <br />
            </div>
        </div>

        <module type="posts" template="blog" />

        <div class="row element">
            <div class="col-12 text-center allow-drop">
                <br />
               <module type="btn" template="bootstrap" text="Alle blogartikelen" />
            </div>
        </div>

    </div>
</section>