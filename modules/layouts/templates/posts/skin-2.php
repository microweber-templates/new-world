<?php

/*

type: layout

name: News

position: 13

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-posts-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container allow-drop">
        <div class="row element nodrop">
            <div class="col-12 text-center">
                <h2 class="hr">Blog</h2>
            </div>
        </div>

        <module type="posts" template="news" />
    </div>
</section>