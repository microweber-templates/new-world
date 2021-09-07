<?php

/*

type: layout

name: CTA

position: 1

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


<section class="section-4 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-cta-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto position-relative bg-primary">

                <div class="row info-holder">
                    <div class="col-9 col-sm-7 col-md-8">
                        <div class="h-100 d-flex align-items-center justify-content-left">
                            <h3 class="m-b-5">Call to Action Section Here</h3>
                        </div>
                    </div>

                    <div class="col-sm-5 col-md-4 text-sm-end">
                        <module type="btn" template="bootstrap" text="Call To Action"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
