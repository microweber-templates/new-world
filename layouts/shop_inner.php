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
$itemData = content_data($content['id']);
$itemTags = content_tags($content['id']);

if (!isset($itemData['label'])) {
    $itemData['label'] = '';
}
if (!isset($itemData['label-color'])) {
    $itemData['label-color'] = '';
}

$next = next_content();
$prev = prev_content();

?>

    <div class="shop-inner-page" id="shop-content-<?php print CONTENT_ID; ?>">
        <section class="p-t-100 p-b-50 fx-particles">
            <div class="container">

                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <div class="row product-holder justify-content-xl-between">
                            <div class="col-12 col-md-6 col-xl-6">
                                <module type="pictures" rel="content" template="skin-6"/>
                            </div>

                            <div class="col-12 col-md-6 col-xl-6 relative product-info-wrapper">
                                <div class="product-info">
                                    <div class="product-info-content">
                                        <div class="heading">
                                            <h1 class="edit d-inline-block" field="title" rel="content"><?php print content_title(); ?></h1>

                                            <div class="next-previous-content float-right">
                                                <?php if ($prev != false) { ?>
                                                    <a href="<?php print content_link($prev['id']); ?>" class="prev-content tip btn btn-outline-default" data-tip="#prev-tip"><i class="fas fa-chevron-left"></i></a>
                                                    <div id="prev-tip" style="display: none">
                                                        <div class="next-previous-tip-content text-center">
                                                            <img src="<?php print get_picture($prev['id']); ?>" alt="" width="90"/>
                                                            <h6><?php print $prev['title']; ?></h6>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                                <?php if ($next != false) { ?>
                                                    <a href="<?php print $next['url']; ?>" class="next-content tip btn btn-outline-default" data-tip="#next-tip"><i class="fas fa-chevron-right"></i></a>

                                                    <div id="next-tip" style="display: none">
                                                        <div class="next-previous-tip-content text-center">
                                                            <img src="<?php print get_picture($next['id']); ?>" alt="" width="90"/>

                                                            <h6><?php print $next['title']; ?></h6>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-auto" title="Rating points: <?php echo get_rating_points('content_id=' . $content['id'] . ''); ?>" data-toggle="tooltip">
                                                <module type="rating" content_id="<?php print $content['id'] ?>"/>
                                            </div>

                                            <div class="col text-center  bold">
                                                <span class="count"><?php echo get_comments('content_id=' . $content['id'] . '&count=1'); ?></span> <?php if (get_comments('content_id=' . $content['id'] . '&count=1') == 1): ?>review<?php else: ?>reviews<?php endif; ?>
                                            </div>

                                            <div class="col text-center bold">
                                                <span class="">Write a Review</span>
                                            </div>

                                            <div class="col">
                                                <hr class="hr w-100" style="margin-top:8px;"/>
                                            </div>
                                        </div>

                                        <div class="row main-price">
                                            <div class="col-12">
                                                <?php $prices = get_product_prices(content_id(), true); ?>
                                                <?php if (isset($prices[0]) and is_array($prices)) { ?>
                                                    <p>
                                                        <?php if (isset($prices[0]['original_value'])): ?><span class="price-old"><?php print currency_format($prices[0]['original_value']); ?></span><?php endif; ?>
                                                        <?php if (isset($prices[0]['value'])): ?><span class="price"><?php print currency_format($prices[0]['value']); ?></span><?php endif; ?>
                                                    </p>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table w-100">
                                                    <tbody>
                                                    <?php if (isset($content_data['sku'])): ?>
                                                        <tr>
                                                            <th scope="row"><?php _lang("SKU Number", 'templates/new-world') ?></th>
                                                            <td>#<?php print $content_data['sku']; ?></td>
                                                        </tr>
                                                    <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="description-short">
                                                    <div class="edit typography-area" field="content_body_short" rel="content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row m-t-20">
                                            <div class="col-6">
                                                <h5><?php _lang("Options", 'templates/new-world') ?></h5>
                                            </div>

                                            <div class="col-6 text-right">
                                                <div class="availability">
                                                    <?php if ($in_stock == true): ?>
                                                        <span class="text-success"><i class="fas fa-circle" style="font-size: 8px;"></i> <?php _lang("In Stock", 'templates/new-world') ?></span> <span class="text-muted"><?php if ($available_qty != ''): ?>(<?php echo $available_qty; ?>)<?php endif; ?></span>
                                                    <?php else: ?>
                                                        <span class="text-danger"><i class="fas fa-circle" style="font-size: 8px;"></i> <?php _lang("Out of Stock", 'templates/new-world') ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bold">
                                            <module type="shop/cart_add"/>
                                        </div>

                                        <div class="edit safe-mode nodrop element text-right m-t-20" field="post_share_1" rel="inherit">
                                            <module type="sharer" id="product-top-sharer" class="d-inline-block">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-12 text-left">
                                <h5 class="hr"> <?php _lang("Description and Reviews", 'templates/new-world') ?></h5>
                            </div>
                        </div>

                        <div class="bg-silver p-30 m-b-20">
                            <div class="tabs">
                                <!-- Nav tabs -->
                                <ul class="nav" role="tablist">
                                    <li role="presentation" class="m-5 m-l-0"><a href="#product-information" aria-controls="product-information" role="tab" data-toggle="tab" class="btn btn-outline-primary shadow-md active"><?php _lang("Description", 'templates/new-world') ?></a></li>
                                    <li role="presentation" class="m-5"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab" class="btn btn-outline-primary shadow-md"><?php _lang("Reviews", 'templates/new-world') ?></a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="product-information">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="description">
                                                    <div class="edit typography-area" field="content_body" rel="content">
                                                        <h6 class="strong">How to write product descriptions that sell</h6>
                                                        <p class="strong">One of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.</p>

                                                        <h6 class="strong">Think like a consumer</h6>
                                                        <p class="strong">Think about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing
                                                            features — try to
                                                            limit each one to 5-8 words.</p>

                                                        <h6 class="strong">Find differentiators</h6>
                                                        <p class="strong">Pepper your features with details that show how the product stands out against similar offerings. For clothes: is it vintage or hard to find? For art: is the artist well known? For home décor: is it a certain style like
                                                            mid-century modern?
                                                            Unique product descriptions not only help you stand out, they improve your SEO.</p>

                                                        <h6 class="strong">Keep it simple</h6>
                                                        <p class="strong">Provide enough detail to help consumers make an informed decision, but don’t overwhelm with a laundry list of features or flowery language. Densely pack your descriptions with useful information and watch products fly off the
                                                            shelf.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="reviews">
                                        <module type="comments" template="skin-1"/>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="edit safe-mode nodrop m-t-40" field="related_products" rel="inherit">
                            <div class="row m-t-20">
                                <div class="col-12 text-left">
                                    <h5 class="hr"><?php print _lang('Related products', 'templates/new-world'); ?></h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <module type="shop/products" template="skin-1" related="true" limit="4" hide_paging="true"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>


<?php include template_dir() . "footer.php"; ?>