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
                <div class="col-12 col-xl-10 mx-auto text-center">
                    <h2 class="hr m-b-30"><?php _lang("Our Features", "templates/new-world"); ?></h2>

                    <div class="row">
                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Monitor-2 safe-element"></i>
                            <h5><?php _lang("Beautiful Website", "templates/new-world"); ?></h5>
                        </div>

                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Earphones safe-element"></i>
                            <h5><?php _lang("Modern Design", "templates/new-world"); ?></h5>
                        </div>

                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Duplicate-Window safe-element"></i>
                            <h5><?php _lang("Easy Interface", "templates/new-world"); ?></h5>
                        </div>

                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Mouse-3 safe-element"></i>
                            <h5><?php _lang("Drag and Drop", "templates/new-world"); ?></h5>
                        </div>
               
                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Hanger safe-element"></i>
                            <h5><?php _lang("Online Store", "templates/new-world"); ?></h5>
                        </div>

                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Duplicate-Window safe-element"></i>
                            <h5><?php _lang("Easy Interface", "templates/new-world"); ?></h5>
                        </div>

                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Coding safe-element"></i>
                            <h5><?php _lang("Clean Code", "templates/new-world"); ?></h5>
                        </div>

                        <div class="icon-holder col-6 col-sm-3 mx-auto cloneable">
                            <i class="icon mw-micon-Palette safe-element"></i>
                            <h5><?php _lang("Customizable Colors", "templates/new-world"); ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
