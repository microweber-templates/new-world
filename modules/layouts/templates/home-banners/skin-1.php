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

<section class="section-2 js-header-transparent pt-0 pb-0 <?php print $layout_classes; ?> edit nodrop" data-overlay="1" field="layout-home-banners-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="background-image-holder d-flex w-100 justify-content-center" style="background-image: url('<?php print template_url(); ?>assets/img/slide-1.jpg');">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="w-100 text-start text-left text-start text-left info-holder allow-drop" <?php if(is_live_edit()): ?>no-<?php endif;?>data-aos="fade-down">
                <h1>This is the default <br/>template of Microweber</h1>
                <br/>
                <p class="lead">Drag and drop open-source website builder<br/>and CMS of new generation.</p>
                <br/>
                <br/>

                <div class="element">
                    <module type="btn" button_text="Call to action">
                </div>
            </div>
        </div>
    </div>
</section>
