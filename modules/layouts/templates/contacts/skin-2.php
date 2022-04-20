<?php

/*

type: layout

name: Contact Information

position: 2

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-30';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-30';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section-22 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-contacts-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-start text-lg-left  m-b-40 allow-drop">
                        <h2 class="hr">Why to Contact Us?</h2>
                        <p>The Website builder is an open-source content management system and website builder.
                            It is based on the PHP programming language and the Laravel 5 web application framework, using drag and drop and allowing users to quickly create content, while scheduling and managing multiple displays.</p>
                        <br/>
                        <br/>

                        <div class="element">
                            <module type="btn" template="bootstrap" button_style="btn-primary" button_text="Contact Us"/>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12 cloneable">
                                <div class="shadow-md box">
                                    <div class="icon-holder">
                                        <i class="mw-icon mw-micon-Building safe-element"></i>
                                    </div>
                                    <div class="text-holder allow-drop">
                                        <p><strong>Address</strong></p>
                                        <p>Sofia, Bulgaria, bul. Cherni Vruh 47. Floor 5, Building A</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 cloneable">
                                <div class="shadow-md box">
                                    <div class="icon-holder">
                                        <i class="mw-icon mw-micon-Smartphone-3 safe-element"></i>
                                    </div>
                                    <div class="text-holder allow-drop">
                                        <p><strong>Phone</strong></p>
                                        <p>00359 878 998 778 ( Office ) 00359 878 887 887 ( Sales)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 cloneable">
                                <div class="shadow-md box">
                                    <div class="col-1 icon-holder">
                                        <i class="mw-icon mw-micon-Email safe-element"></i>
                                    </div>
                                    <div class="col text-holder allow-drop">
                                        <p><strong>Other ways to contact us</strong></p>
                                        <p>Email: info@youremail.com</p>
                                    </div>
                                   <div class="col-md-4">
                                       <module type="social_links" />
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

