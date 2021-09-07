<?php

/*

type: layout

name: Features

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

<section class="section-8 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-features-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-centerx">
            <div class="row">
                <div class="col-12 col-lg-12 mx-auto">
                    <div class="row text-center text-md-start">
                        <div class="icon-holder col-12 col-sm-6 mx-auto col-md-3 cloneable allow-drop">
                            <i class="icon mw-micon-solid-Like safe-element"></i>
                            <h3>It Is Awesome!</h3>
                            <p class="m-t-10">Microweber is one of the best website builders and CMS in the world. Use it for your own project, website or online store, for free!</p>
                        </div>

                        <div class="icon-holder col-12 col-sm-6 mx-auto col-md-3 cloneable allow-drop">
                            <i class="icon mw-micon-solid-Hand safe-element"></i>
                            <h3>It Is Free</h3>
                            <p class="m-t-10">Microweber is one of the best website builders and CMS in the world. Use it for your own project, website or online store, for free!</p>
                        </div>

                        <div class="icon-holder col-12 col-sm-6 mx-auto col-md-3 cloneable allow-drop">
                            <i class="icon mw-micon-solid-Hipo safe-element"></i>
                            <h3>It Is Powerful</h3>
                            <p class="m-t-10">Microweber is one of the best website builders and CMS in the world. Use it for your own project, website or online store, for free!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
