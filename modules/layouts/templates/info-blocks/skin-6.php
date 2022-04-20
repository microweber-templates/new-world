<?php

/*

type: layout

name: Info Block

position: 6

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

<section class="section-17 <?php print $layout_classes; ?> fx-particles edit safe-mode nodrop" field="layout-info-blocks-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row flexbox-container">
            <div class="col-12 col-lg-6 col-xl-5 img-holder" style="background-image: url('<?php print template_url(); ?>assets/img/img-1.png');"></div>

            <div class="col-12 col-lg-6 col-xl-7 right-side text-center text-lg-start text-lg-left ">
                <div class="info-holder shadow-md allow-drop" <?php if(is_live_edit()): ?>no-<?php endif;?>data-aos="fade-up">
                    <h2 class="hr">Do design and code</h2>
                    <p>The Website builder is an open-source content management system and website builder. It is based on the PHP programming language and the Laravel 5 web application framework, using drag and drop and allowing users to quickly create content, while scheduling and managing multiple
                        displays.</p>

                    <div class="element">
                        <br />
                        <module type="btn" button_text="More about this" button_style="8" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
