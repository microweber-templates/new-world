<?php

/*

type: layout

name: Typography 1

position: 1

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

<section class="section <?php print $layout_classes; ?> edit" field="layout-typography-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="col mw-default-layout-typography-1">
        <div class="element mb-1 ml-2" >
           <?php include elements_path()."ordered-list.php"?>
        </div>
    </div>
</section>
