
<?php

/*

type: layout

name: Home Banner

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

<section class="section-3 js-header-transparent <?php print $layout_classes; ?> edit safe-mode nodrop" data-overlay="1" field="layout-home-banners-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="background-image-holder d-flex w-100 justify-content-center" style="background-image: url('<?php print template_url(); ?>assets/img/slide-1.jpg');">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="w-100 text-center info-holder allow-drop" <?php if(is_live_edit()): ?>no-<?php endif;?>data-aos="fade-down">
                <h1>Title Goes Here</h1>
            </div>
        </div>

        <div class="socials-holder">
            <module type="social_links" template="skin-1"/>
        </div>
    </div>
</section>
