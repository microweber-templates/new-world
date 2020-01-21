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

<section class="section-2 js-header-transparent <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-home-banners-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="background-image-holder d-flex w-100" style="background-image: url('<?php print template_url(); ?>assets/img/sections/bg.jpg');">
        <div class="w-100 align-self-center text-center info-holder allow-drop" data-aos="fade-down">
            <h4>Bicycle Challenge</h4>
            <h1>to Mont Ventoux</h1>
            <br/>
            <br/>
            <div class="element d-inline-block m-3 cloneable">
                <module type="btn" template="bootstrap" text="Call to action"/>
            </div>
        </div>

        <div class="socials-holder">
            <module type="social_links" template="skin-1"/>
        </div>
    </div>
</section>
