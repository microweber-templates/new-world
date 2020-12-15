<?php

/*

type: layout

name: Blog - 4

position: 4

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
    <div class="container allow-drop">
        <module type="posts" template="news-2"/>
    </div>
</section>