<?php

/*

type: layout
content_type: dynamic
name: Shop
is_shop: y
description: Showcase shop items in a sylish grid arrangement.
position: 2
*/
?>

<?php include template_dir() . "header.php"; ?>

<?php
if (!isset($shop_sidebar)) {
    $shop_sidebar = false;
}
?>

<div>

    <div class="edit" rel="content" field="shop-before-content">
        <module type="layouts" template="skin-9"/>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="row justify-content-between">
                    <div class="<?php if ($shop_sidebar == 'true'): ?>col-sm-12 col-md-8 col-lg-9 col-xl-9<?php else: ?>col-12<?php endif; ?>">
                        <div class="edit" rel="content" field="shop-content">
                            <module type="shop/products" <?php if ($shop_sidebar == 'false'): ?>template="skin-1"<?php endif; ?>/>
                        </div>
                    </div>

                    <?php if ($shop_sidebar == 'true'): ?>
                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-2">
                            <div class="edit" rel="content" field="shop-sidebar">
                                <?php include(__DIR__ . DS .'shop_sidebar.php'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="edit" rel="content" field="shop-after-content">
        <p class="element"></p>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>
