<?php

/*

type: layout

name: Default

description: List Navigation

*/

?>

<?php
$params['ul_class'] = 'nav nav-list';
$params['ul_class_deep'] = 'nav nav-list';
$params['link'] = '<a itemprop="url" data-item-id="{id}" class="menu_element_link {nest_level}"  href="{link}"><span class="dot"></span><span>{title}</span></a>';


?>

<div class="module-categories module-categories-template-default">
    <?php category_tree($params); ?>
</div>

