<?php

/*

type: layout

name: Text with Video

position: 3

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


<section class="section-10 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-videos-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container video-right">
        <div class="row ventoux-testimonials-2">
            <div class="col-12 col-lg-6 col-lg-7 left-side m-b-20" style="order: 2;">
                <module type="video" class="video-holder" url="https://vimeo.com/326854751"/>
            </div>

            <div class="col-12 col-lg-6 col-lg-5 right-side" style="order: 1;">
                <div class="testimonial-holder text-start text-left">
                    <div class="info-holder allow-drop" style="max-width: 100%;">
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

                    <div class="element m-t-40">
                        <module type="btn" template="bootstrap" text="Call to action"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
