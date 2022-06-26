<?php

/*

type: layout

name: CTA

position: 2

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

<!--.home-slider .slide .img-holder.left-->

<section class="section-27 js-header-transparent <?php print $layout_classes; ?> edit safe-mode nodrop" data-bg-cover data-overlay="1" field="layout-cta-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="background-image-holder d-flex w-100 justify-content-center bg-primary" style="background-image: url('<?php print template_url(); ?>assets/img/blue-bg.jpg');">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="w-100 text-center info-holder allow-drop" <?php if(is_live_edit()): ?>no-<?php endif;?>data-aos="fade-down">
                <h3>Enjoy the Power of the Website Builder</h3>
                <br/>
                <br/>
                <br/>
                <br/>
                <h1>Created for Your<br/>Business</h1>
                <br/>
                <br/>
                <br/>
                <br/>
                <div class="element d-inline-block cloneable">
                    <module type="btn" template="bootstrap" button_style="btn-outline-dark" button_size="btn-md" text="Start Now"/>
                </div>
            </div>
        </div>

        <div class="socials-holder">
            <module type="social_links" template="skin-1"/>
        </div>
    </div>
</section>
