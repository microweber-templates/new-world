<?php

/*

type: layout

name: Contact Information

position: 1

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-14 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-contacts-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row m-b-40">
            <div class="col-lg-11 mx-auto bg-default bg-content-box">
                <div class="row">
                    <div class="col-md-12 col-lg-4 col-lg-4">
                        <div class="p-40 text-center text-lg-start text-lg-left ">
                            <h3>Service and contact</h3>
                        </div>
                    </div>

                    <div class="offset-sm-1 col-sm-5 offset-lg-0 col-lg-4 col-lg-3 offset-lg-1">
                        <div class="p-t-40 p-b-40 clearfix text-center text-sm-start">
                            <div class="icon">
                                <i class="mw-micon-Headset safe-element"></i>
                            </div>

                            <div class="info allow-drop">
                                <h4 class="m-b-10">Need help?</h4>
                                <p>Contact us at +000 111 222</p>
                            </div>
                        </div>
                    </div>

                    <div class="offset-sm-1 col-sm-5 offset-lg-0 col-lg-4 col-lg-3 offset-lg-1">
                        <div class="p-t-40 p-b-40 clearfix text-center text-sm-start">
                            <div class="icon">
                                <i class="mw-micon-Speach-Bubble3 safe-element"></i>
                            </div>

                            <div class="info allow-drop">
                                <h4 class="m-b-10">Chat</h4>
                                <p>Chat with our friendly team!</p>
                                <br />

                                <module type="btn" template="bootstrap" button_style="btn-primary" text="Chat now" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
