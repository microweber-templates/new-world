<?php

/*

type: layout

name: Features

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

<section class="section-7 <?php echo $layout_classes; ?> edit safe-mode nodrop" field="layout-features-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-lg-10 mx-auto">
                <div class="row">
                    <div class="m-b-40 col-sm-6 col-lg-4 cloneable">
                        <div class="card shadow-md">
                            <div class="stamp">
                                <i class="mw-micon-Monitor-2 safe-element"></i>
                            </div>

                            <div class="allow-drop">
                                <h4 class="m-b-30">Beautiful Website</h4>

                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when .</p>
                            </div>
                        </div>
                    </div>

                    <div class="m-b-40 col-sm-6 col-lg-4 cloneable">
                        <div class="card shadow-md">
                            <div class="stamp">
                                <i class="mw-micon-Earphones safe-element"></i>
                            </div>

                            <div class="allow-drop">
                                <h4 class="m-b-30">Modern Design</h4>

                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when .</p>
                            </div>
                        </div>
                    </div>

                    <div class="m-b-40 col-sm-6 col-lg-4 cloneable">
                        <div class="card shadow-md">
                            <div class="stamp">
                                <i class="mw-micon-Duplicate-Window safe-element"></i>
                            </div>

                            <div class="allow-drop">
                                <h4 class="m-b-30">Easy Interface</h4>

                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
