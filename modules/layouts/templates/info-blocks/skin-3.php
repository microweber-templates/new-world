<?php

/*

type: layout

name: Info Block

position: 3

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-30';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-30';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-info-blocks-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-center text-lg-start text-lg-left ">
                            <div class="m-b-20">
                                <img src="<?php print template_url(); ?>assets/img/img-5.png" alt=""/>
                            </div>

                            <div class=" m-b-20">
                                <div class="allow-drop">
                                    <h2 class="m-b-30">It is the new generation</h2>
                                    <p>The Website builder is an open-source content management system and website builder. It is based on the PHP programming language and the Laravel 5 web application framework.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center text-lg-start text-lg-left ">
                            <div class="m-b-20">
                                <img src="<?php print template_url(); ?>assets/img/img-6.png" alt=""/>
                            </div>

                            <div class=" m-b-20">
                                <div class="allow-drop">
                                    <h2 class="m-b-30">Unique design</h2>
                                    <p>The Website builder is an open-source content management system and website builder. It is based on the PHP programming language and the Laravel 5 web application framework.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
