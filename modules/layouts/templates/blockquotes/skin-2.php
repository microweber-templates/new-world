<?php

/*

type: layout

name: Testimonial

position: 2

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-300';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-300';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section edit safe-mode nodrop layout-blockquotes-block" data-background-position="center bottom" field="layout-blockquotes-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="background-image-holder d-flex w-100 <?php print $layout_classes; ?>" style="background-image: url('<?php print template_url(); ?>assets/img/blockquote-1.jpg');">
        <div class="container">
            <div class="row element">
                <div class="col-12">
                    <div class="safe-mode nodrop mx-auto p-5" style="max-width: 780px;">
                        <blockquote class="safe-element text-white">
                            Long quote text on the image. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci didunt ut labore et dolore
                            <div class="testimonial">
                                <img src="<?php print template_url(); ?>assets/img/testimonial.png"/>
                                <span class="name">John Doe</span>
                                <span class="info">Developer</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
