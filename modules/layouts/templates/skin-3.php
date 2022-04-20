<?php

/*

type: layout

name: Simple Title and Text

position: 3

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center allow-drop">
                <h2 class="hr">Create a beautiful website easily with Microweber</h2>
                <div class="element m-auto" style="max-width: 800px;">
                    <p>The Website builder is an open-source content management system and website builder. It is based on the PHP programming language and the Laravel 5 web application framework, using drag and drop and allowing users to quickly create content, while scheduling and managing multiple
                        displays.</p>
                    <br/>
                    <br/>
                </div>
                <div class="mw-module-container-center no-element m-t-20">
                    <module type="btn" template="bootstrap" button_style="btn-primary" text="Learn more"/>
                </div>
            </div>
        </div>
    </div>
</section>
