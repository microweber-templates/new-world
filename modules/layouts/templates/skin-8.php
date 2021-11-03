<?php

/*

type: layout

name: Parallax

position: 7

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

<section class="section-21 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-8-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="text-left text-start text-left m-b-10">
                            <h2 class="hr">Last blog posts</h2>
                            <a href="#" class="btn btn-link float-right float-end">Browse Articles</a>
                        </div>

                        <module type="posts" template="skin-1"/>
                    </div>

                    <div class="col-12 col-lg-4 text-center">
                        <div class="h-100 d-flex flex-column justify-content-center align-items-center text-white twitter-holder">
                            <module type="twitter_feed" template="skin-1" search_string="microweber" number_of_items="1"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
