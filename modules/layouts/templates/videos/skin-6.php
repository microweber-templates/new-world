<?php

/*

type: layout

name: Text with Video

position: 6

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-90';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-90';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section-6 half-cols text-white bg-default <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-videos-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-center info-holder">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="row justify-content-lg-between">
                        <div class="col-sm-10 mx-sm-auto mx-lg-0 col-lg-6 info-holder allow-drop">
                            <div class="element nodrop clearfix">
                                <h5 class="float-end " style="width: 80px;">
                                    <hr class="hr w-100 safe-element" style="background-color: #fff;"/>
                                </h5>
                                <p class="m-b-20" style="letter-spacing:1.5px;">Introduction</p>
                            </div>

                            <h2 class="m-b-30">How we growth <br class="d-none d-lg-block"/>our business.</h2>
                            <p>The Website builder is an open-source content management system and website builder. It is based on the PHP programming language and the Laravel 5 web application framework, using drag and drop and allowing users to quickly create content, while scheduling and managing multiple
                                displays.</p>
                            <div class="element m-t-40">
                                <module type="btn" template="bootstrap" text="Contact Us" button_style="btn-primary"/>
                            </div>
                        </div>

                        <div class="col-sm-10 mx-sm-auto mx-lg-0 col-lg-5 video-holder d-flex align-items-center justify-content-center">
                            <div class="w-100">
                                <div class="div-table">
                                    <div class="div-table-cell d-flex justify-content-center">
<!--                                        <div class="d-flex position-absolute align-self-center">-->
<!--                                            <module class="popup-vimeo" type="btn" template="bootstrap" icon="&lt;i class='fa fa-play'&gt;&lt;/i&gt;" text="$notext" button_style="btn-primary"/>-->
<!--                                        </div>-->

                                        <div class="img">
                                            <img src="<?php print template_url(); ?>assets/img/video-bg.jpg">
                                        </div>
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
