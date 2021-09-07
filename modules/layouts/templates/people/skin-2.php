<?php

/*

type: layout

name: People - Team cards

position:

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
<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-people-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="d-flex w-100">
        <div class="container align-self-centerx">
            <div class="row">
                <div class="col-lg-8 col-lg-8 text-center m-b-20 mx-auto">
                    <h1 class="m-b-10">Our Team</h1>
                    <p class="lead">It is a long established fact that a reader will be distracted. </p>
                    <hr class="hr"/>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <module type="teamcard" template="skin-2"/>
                </div>
            </div>
        </div>
    </div>
</section>
