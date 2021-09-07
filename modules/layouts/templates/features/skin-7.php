<?php

/*

type: layout

name: Features

position: 7

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
<section class="section-20 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-features-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-centerx">
            <div class="row">
                <div class="col-12 col-lg-12 col-lg-10 mx-auto">

                    <div class="row text-center text-white">
                        <div class="col-12 col-sm-6 col-md-4 cloneable m-b-30">
                            <div class="background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/feature-1.jpg');">
                                <div class="square">
                                    <div class="content allow-drop">
                                        <div class="icon-holder nodrop">
                                            <i class="icon mw-micon-solid-Like safe-element"></i>
                                        </div>
                                        <h3>It Is Awesome!</h3>
                                        <p class="m-t-10">Microweber is one of the best website builders and CMS in the world. Use it for your own project, website or online store, for free!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 cloneable m-b-30">
                            <div class="background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/feature-2.jpg');">
                                <div class="square">
                                    <div class="content allow-drop">
                                        <div class="icon-holder nodrop">
                                            <i class="icon mw-micon-solid-Hand safe-element"></i>
                                        </div>

                                        <h3>It Is Free</h3>
                                        <p class="m-t-10">Microweber is one of the best website builders and CMS in the world. Use it for your own project, website or online store, for free!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 cloneable m-b-30">
                            <div class="background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/feature-3.jpg');">
                                <div class="square">
                                    <div class="content allow-drop">
                                        <div class="icon-holder nodrop">
                                            <i class="icon mw-micon-solid-Hipo safe-element"></i>
                                        </div>
                                        <h3>It Is Powerful</h3>
                                        <p class="m-t-10">Microweber is one of the best website builders and CMS in the world. Use it for your own project, website or online store, for free!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
