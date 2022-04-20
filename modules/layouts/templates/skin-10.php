<?php

/*

type: layout

name: Text with Images

position: 10

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-80';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-80';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-25 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-10-<?php print $params['id'] ?>" rel="module">
    <div class="container align-self-center info-holder">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto">
                <div class="row d-flex">
                    <div class="col-md-6">
                        <div class="img-holder h-100 w-100">
                            <div class="image-1" style="background-image: url('<?php print template_url(); ?>assets/img/1.jpg');"></div>
                            <div class="image-2" style="background-image: url('<?php print template_url(); ?>assets/img/2.jpg');"></div>
                        </div>
                    </div>

                    <div class="col-md-6 right-side allow-drop">
                        <div class="element">
                        <div class="nodrop clearfix">
                            <div class="float-right " style="width: 80px;">
                                <hr class="hr w-100 safe-element m-t-10"/>
                            </div>
                            <p class="m-b-20 text-primary" style="letter-spacing:1.5px;">Trust our best services</p>
                        </div>
                        </div>

                        <h2 class="m-b-30">What we are <br class="d-none d-lg-block"/>doing best.</h2>
                        <p>The Website builder is an open-source content management system and website builder. It is based on the PHP programming language and the Laravel 5 web application framework, using drag and drop and allowing users to quickly create content, while scheduling and managing multiple
                            displays.</p>

                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <div class="small-cta no-drop element" style="margin-bottom: 15px;">
                            <div class="icon-holder element">
                                <i class="mw-micon-Telephone safe-element"></i>
                            </div>
                            <div>
                                <p>Make a call</p>
                                <h4>00 1 234 567 890</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
