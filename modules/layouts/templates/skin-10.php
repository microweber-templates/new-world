<?php

/*

type: layout

name: Meeting

position: 10

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


<section class="section-18 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-10-<?php print $params['id'] ?>" rel="module">
    <div class="container text-white">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="row">
                    <div class="col-12 col-md-6 bg-primary text-left cloneable">
                        <div class="allow-drop padding-holder d-flex flex-column">
                            <h2>Meet us on the following events</h2>
                            <br/>
                            <p class="lead"><strong>Contact us today to book your appintment with our representatives.</strong></p>

                            <div class="element nodrop button-holder mt-auto">
                                <module type="btn" button_style="btn-primary" text="CALL TO ACTION"/>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 text-center allow-drop cloneable background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/meeting.png');">
                        <div class="allow-drop padding-holder d-flex flex-column justify-content-center align-items-center">
                            <h2>18-20 SEP</h2>
                            <br/>
                            <p class="lead"><strong>Webit.Festival 2020 Valencia, Spain</strong></p>
                            <br/>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                            <div class="element nodrop button-holder">
                                <module type="btn" button_style="btn-primary" button_size="btn-lg" text="CALL TO ACTION"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
