<?php

/*

type: layout

name: News Posts

position: 65

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-posts-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row element">
            <div class="col-12 text-center allow-drop">
                <h2 class="hr">News</h2>
            </div>
        </div>

        <module type="posts" template="news-2"/>
    </div>
</section>