<?php

/*

type: layout

name: Contact Information - Form

position: 4

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-contacts-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto allow-drop text-center">
                <h2 class="m-b-10">Ask Your Question to Us</h2>
                <p class="lead">Read what our clients says for our services.</p>
                <br />
                <br />
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mx-auto">
                <module type="contact_form"/>
            </div>
        </div>
    </div>
</section>
