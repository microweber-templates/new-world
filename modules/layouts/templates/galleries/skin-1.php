<?php

/*

type: layout

name: Carousel Grid Gallery

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

<section class="section-5 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-galleries-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-centerx">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto text-center">
                    <h2 class="hr m-b-30">Your Pretty Gallery</h2>

                    <module type="carousel_grid" max_row_height="300" row_height="300" items_number="10"/>

                    <div class="allow-drop">
                        <br/>
                        <br/>
                        <br/>
                        <module type="btn" template="bootstrap" button_style="btn-primary" text="See more"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
