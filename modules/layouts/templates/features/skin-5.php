<?php

/*

type: layout

name: Features

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

<section class="section-8 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-features-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-centerx">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto text-center">
                    <h2 class="hr m-b-30">Our Features</h2>

                    <div class="row">
                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Monitor-2 safe-element"></i>
                            <h5>Beautiful Website</h5>
                        </div>

                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Earphones safe-element"></i>
                            <h5>Modern Design</h5>
                        </div>

                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Duplicate-Window safe-element"></i>
                            <h5>Easy Interface</h5>
                        </div>

                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Mouse-3 safe-element"></i>
                            <h5>Drag and Drop</h5>
                        </div>
               
                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Hanger safe-element"></i>
                            <h5>Online Store</h5>
                        </div>

                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Duplicate-Window safe-element"></i>
                            <h5>Easy Interface</h5>
                        </div>

                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Coding safe-element"></i>
                            <h5>Clean Code</h5>
                        </div>

                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Palette safe-element"></i>
                            <h5>Customizable Colors</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
