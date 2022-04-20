<?php

/*

type: layout

name: Info Block

position: 5

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-0';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-info-blocks-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row">
                    <div class="order-2 order-lg-2 text-center text-sm-center text-lg-start text-lg-left  col-md-10 mx-auto col-lg-7 m-b-20 d-flex flex-column justify-content-center align-items-center">
                        <div class="allow-drop">
                            <h1 class="m-b-30">Making the web a better place with Microweber</h1>
                            <p>The Website builder is an open-source content management system and website builder. It is based on the PHP programming language and the Laravel 5 web application framework, using drag and drop and allowing users to quickly create content, while scheduling and managing multiple
                                displays.</p>
                            <div class="element m-t-50 text-center text-lg-end">
                                <module type="btn" template="bootstrap" button_style="btn-primary" button_size="btn-lg" text="Become a Partner"/>
                            </div>
                        </div>
                    </div>

                    <div class="order-1 order-lg-1 text-start text-left text-start text-left text-sm-center text-lg-start col-lg-5 m-b-20">
                        <img src="<?php print template_url(); ?>assets/img/img-9.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
