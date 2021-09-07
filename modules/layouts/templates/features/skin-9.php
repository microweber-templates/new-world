<?php

/*

type: layout

name: Features

position: 9

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

<section class="section-23 <?php echo $layout_classes; ?> edit safe-mode nodrop" field="layout-features-skin-9-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-lg-10 mx-auto">
                <div class="row">
                    <div class="m-b-30 col-sm-6 col-lg-3 cloneable">
                        <div class="card shadow-md">
                            <div class="stamp">
                                <i class="mw-micon-Computer-2 safe-element"></i>
                            </div>

                            <div class="allow-drop">
                                <h4 class="m-b-20">Development</h4>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>

                    <div class="m-b-30 col-sm-6 col-lg-3 cloneable">
                        <div class="card shadow-md">
                            <div class="stamp">
                                <i class="mw-micon-Student-Hat safe-element"></i>
                            </div>

                            <div class="allow-drop">
                                <h4 class="m-b-20">Lessons</h4>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>

                    <div class="m-b-30 col-sm-6 col-lg-3 cloneable">
                        <div class="card shadow-md">
                            <div class="stamp">
                                <i class="mw-micon-Computer-2 safe-element"></i>
                            </div>

                            <div class="allow-drop">
                                <h4 class="m-b-20">Development</h4>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>

                    <div class="m-b-30 col-sm-6 col-lg-3 cloneable">
                        <div class="card shadow-md">
                            <div class="stamp">
                                <i class="mw-micon-Add-Cart safe-element"></i>
                            </div>

                            <div class="allow-drop">

                                <h4 class="m-b-20">Online Store</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
