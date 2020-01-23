<?php

/*

type: layout

name: Simple Title and Text

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-9-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="m-auto allow-drop" style="max-width: 800px;">
                    <h1>Contact Us<span class="text-primary">.</span></h1>

                    <module type="breadcrumb"/>
                    <hr class="hr"/>

                    <p class="lead">Say Helllo to us!</p>
                </div>
            </div>
        </div>
    </div>
</section>
