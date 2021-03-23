<?php

/*

type: layout

name: Two text columns

position: 3

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


<section class="section <?php print $layout_classes; ?> edit safe-mode " field="layout-drag-n-drop-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5 col d-flex">
                <div class="col-md-6 col">
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from from 45 BC, making it over 2000 years old.</p>
                </div>

                <div class="col-md-6 col">
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from from 45 BC, making it over 2000 years old.</p>
                </div>
            </div>
        </div>
    </div>
</section>
