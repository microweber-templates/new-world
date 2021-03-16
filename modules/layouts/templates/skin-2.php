<?php

/*

type: layout

name: Simple Title and Text

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container" style="max-width:750px;">
        <div class="row">
            <div class="col-12 text-center allow-drop">
                <h2 class="hr"><?php _lang("Build a website, it's easy and free", "templates/new-world"); ?></h2>
                <p class="lead"><?php _lang("Professional developers can freely access the code, exchanging their knowledge and contributions with the rest of the open-source community", "templates/new-world"); ?></p>
            </div>
        </div>
    </div>
</section>
