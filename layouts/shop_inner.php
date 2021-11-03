<?php include template_dir() . "header.php"; ?>

<?php
$content_data = content_data(CONTENT_ID);
$in_stock = true;
if (isset($content_data['qty']) and $content_data['qty'] != 'nolimit' and intval($content_data['qty']) == 0) {
    $in_stock = false;
}

if (isset($content_data['qty']) and $content_data['qty'] == 'nolimit') {
    $available_qty = '';
} elseif (isset($content_data['qty']) and $content_data['qty'] != 0) {
    $available_qty = $content_data['qty'];
} else {
    $available_qty = 0;
}

$item = get_content_by_id(CONTENT_ID);
$itemData = [];

if($content and isset($content['id'])){
    $itemData = content_data($content['id']);
}

$itemTags = [];
if($content and isset($content['id'])){
    $itemTags = content_tags($content['id']);
}


if (!isset($itemData['label'])) {
    $itemData['label'] = '';
}
if (!isset($itemData['label-color'])) {
    $itemData['label-color'] = '';
}

$next = next_content();
$prev = prev_content();


?>

<?php $maxLines = 6; ?>
<div class="shop-inner-page" id="shop-content-<?php print CONTENT_ID; ?>" field="shop-inner-page" rel="page">
    <section class="p-md-5 mb-md-5 fx-particles">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <module class="d-flex justify-content-start" type="breadcrumb" template="skin-1"/>
                    <div class="row product-holder">
                        <div class="col-12 col-md-6 col-lg-6">
                            <module type="pictures" rel="content" template="skin-6"/>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 relative product-info-wrapper">
                            <div class="product-info">
                                <div class="product-info-content">
                                    <div class="heading">
                                        <h1 class="edit d-inline-block" field="title" rel="content"><?php print content_title(); ?></h1>

                                        <div class="next-previous-content float-end">
                                            <?php if ($prev != false) { ?>
                                                <a href="<?php print content_link($prev['id']); ?>" class="prev-content tip btn btn-outline-default" data-tip="#prev-tip"><i class="mdi mdi-arrow-left"></i></a>
                                                <div id="prev-tip" style="display: none">
                                                    <div class="next-previous-tip-content text-center">
                                                        <img src="<?php print get_picture($prev['id']); ?>" alt="" width="90"/>
                                                        <h6><?php print $prev['title']; ?></h6>
                                                    </div>
                                                </div>
                                            <?php } ?>

                                            <?php if ($next != false) { ?>
                                                <a href="<?php print $next['url']; ?>" class="next-content tip btn btn-outline-default" data-tip="#next-tip"><i class="mdi mdi-arrow-right"></i></a>

                                                <div id="next-tip" style="display: none">
                                                    <div class="next-previous-tip-content text-center">
                                                        <img src="<?php print get_picture($next['id']); ?>" alt="" width="90"/>

                                                        <h6><?php print $next['title']; ?></h6>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="row main-price">
                                        <div class="col-12 d-flex">
                                            <div class="col-6">
                                                <?php $prices = get_product_prices(content_id(), true); ?>
                                                <?php if (isset($prices[0]) and is_array($prices)) { ?>
                                                    <p>
                                                        <?php if (isset($prices[0]['original_value'])): ?><span class="price-old"><?php print currency_format($prices[0]['original_value']); ?></span><?php endif; ?>
                                                        <?php if (isset($prices[0]['value'])): ?><span class="price"><?php print currency_format($prices[0]['value']); ?></span><?php endif; ?>
                                                    </p>
                                                <?php } ?>
                                            </div>

                                            <div class="availability col-6 text-end text-right align-self-center">
                                                <?php if ($in_stock == true): ?>
                                                    <span class="text-success"><i class="mdi mdi-circle" style="font-size: 8px;"></i> <?php _lang("In Stock", 'templates/new-world') ?></span> <span class="text-muted"><?php if ($available_qty != ''): ?>(<?php echo $available_qty; ?>)<?php endif; ?></span>
                                                <?php else: ?>
                                                    <span class="text-danger"><i class="mdi mdi-circle" style="font-size: 8px;"></i> <?php _lang("Out of Stock", 'templates/new-world') ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <?php if (isset($content_data['sku'])): ?>
                                                <?php _lang("SKU", 'templates/new-world') ?>
                                                - <?php print $content_data['sku']; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <div class="description">
                                                <div class="edit mw-tpl-new-world-product-description" field="content_body" rel="content">
                                                    <p class="comment more"><?php _lang("How to write product descriptions that sell
                                                    One of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.
                                                    Think like a consumer
                                                    Think about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing
                                                   features — try to
                                                            limit each one to 5-8 words.", 'templates/new-world') ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bold">
                                        <module type="shop/cart_add"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="edit safe-mode nodrop mt-5" field="related_products" rel="content">
                        <div class="col-12 text-start text-left">
                            <h5><?php _lang('Related products', 'templates/new-world'); ?></h5>
                            <hr style="opacity: 0.2;">
                        </div>

                        <div class="col-12">
                            <module type="shop/products" template="skin-1" related="true" limit="4" hide_paging="true"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include template_dir() . "footer.php"; ?>


