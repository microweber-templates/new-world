<?php

/*

type: layout
content_type: dynamic
name: Shop
is_shop: y
description: Showcase shop items in a sylish grid arrangement.
position: 4
*/

?>

<?php include template_dir() . "header.php"; ?>

<div class="edit" rel="content" field="new-world_content">
    <module type="layouts" template="skin-9"/>

    <div class="container safe-mode nodrop">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="row justify-content-between">
                    <div class="col-9">
                        <module type="shop/products"/>
                    </div>
                    <div class="col-2">
                        <?php include('shop_sidebar.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>
