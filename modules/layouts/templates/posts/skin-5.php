<?php

/*

type: layout

name: Blog - 5

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-posts-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="container allow-drop">
        <module type="posts" template="news-3"/>
    </div>
</section>