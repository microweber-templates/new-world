<?php

/*

type: layout

name: Meeting

position: 5

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


<section class="section-18 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="container text-white">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row m-0">
                    <div class="col-12 col-md-6 bg-primary text-start text-left text-start text-left cloneable">
                        <div class="allow-drop padding-holder d-flex flex-column">
                            <h2>Meet us on the following events</h2>
                            <br/>
                            <p class="lead"><strong>Contact us today to book your appintment with our representatives.</strong></p>

                            <div class="element button-holder mt-auto">
                                <module type="btn" template="bootstrap" button_style="btn-outline-primary" button_size="btn-lg" template="bootstrap" button_text="SET A MEETING"/>
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
                            <div class="element button-holder">
                                <module type="btn" template="bootstrap" button_style="btn-outline-primary" button_size="btn-lg" button_text="CONTACT US"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
