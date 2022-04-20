<?php

/*

type: layout

name: Text with Video

position: 5

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


<section class="section-6 half-cols <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-videos-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-center info-holder">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="row">
                        <div class="offset-lg-1 col-lg-4 info-holder allow-drop">
                            <p class="m-b-20" style="letter-spacing:1.5px;">Introduction Video</p>
                            <h2 class="m-b-30">How we growth <br />our business.</h2>
                            <p>The Website builder is an open-source content management system and website builder. It is based on the PHP programming language and the Laravel 5 web application framework, using drag and drop and allowing users to quickly create content, while scheduling and managing multiple displays.</p>
                            <div class="m-t-40 noelement d-inline-block">
                                <module type="btn" class="noelement" template="bootstrap" text="Contact Us" button_style="btn-primary"/>
                            </div>
                        </div>

                        <div class="col-sm-10 mx-sm-auto col-lg-6 video-holder">
                            <module type="video" url="https://vimeo.com/98679934"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
