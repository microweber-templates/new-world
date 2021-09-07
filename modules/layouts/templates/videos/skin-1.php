<?php

/*

type: layout

name: Text with Video

position: 1

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


<section class="section-6 half-cols <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-videos-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-center info-holder">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="row">
                        <div class="offset-lg-1 col-lg-5 info-holder allow-drop">
                            <h2 class="m-b-30">Watch Our Video Here</h2>
                            <h3 class="m-b-30">Learn more about the company</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                            <div class="element m-t-30">
                                <ul class="ul safe-mode nodrop">
                                    <li class="cloneable safe-element m-b-30"><span class="safe-element">Interested things about us 1</span></li>
                                    <li class="cloneable safe-element m-b-30"><span class="safe-element">Interested things about us 2</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-10 mx-sm-auto col-lg-5 video-holder">
                            <module type="video" url="https://vimeo.com/326854751"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
