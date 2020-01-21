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
                        <div class="offset-xl-2 col-xl-3 info-holder allow-drop">
                            <h2 class="m-b-30">Some title for the video section here</h2>
                            <p>Microweber is an open-source content management system and website builder and drag and drop CMS.</p>
                            <div class="element m-t-40">
                                <module type="btn" template="bootstrap" text="Learn more" button_style="btn-primary"/>
                            </div>
                        </div>

                        <div class="col-sm-10 mx-sm-auto col-xl-6 video-holder">
                            <module type="video" url="https://vimeo.com/22439234"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>