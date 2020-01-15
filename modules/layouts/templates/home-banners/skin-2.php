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

<section class="section-3 js-header-transparent <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-home-banners-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="background-image-holder d-flex w-100" style="background-image: url('<?php print template_url(); ?>assets/img/sections/bg10.jpg');">
        <div class="w-100 align-self-center text-center info-holder allow-drop" data-aos="fade-down">
            <h1>Blog</h1>
        </div>

        <div class="socials-holder">
            <module type="social_links" template="skin-1"/>
        </div>
    </div>
</section>
