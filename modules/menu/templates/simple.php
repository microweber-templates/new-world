<?php

/*

type: layout

name: Simple

description: Simple menu

*/

?>

<?php
$menu_filter['ul_class'] = '';
$menu_filter['ul_class_deep'] = '';
$menu_filter['li_class'] = '';
$menu_filter['a_class'] = '';
$menu_filter['link'] = '<a itemprop="url" data-item-id="{id}" class="menu_element_link {active_class} {exteded_classes} {nest_level} {a_class}" {target_attribute} href="{url}"><span>{title}</span></a>';

$mt = menu_tree($menu_filter);

if ($mt != false) {
    print ($mt);
} else {
    print lnotif("There are no items in the menu <b>" . $params['menu-name'] . '</b>');
}
?>
