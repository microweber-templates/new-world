<?php

/*

type: layout

name: Skin-1

description: Skin-1

*/
?>
<?php


$tn = $tn_size;
if (!isset($tn[0]) or ($tn[0]) == 150) {
    $tn[0] = 350;
}
if (!isset($tn[1])) {
    $tn[1] = $tn[0];
}


?>


<?php if (!empty($data)): ?>
    <div class="row shop-products related-products">
        <?php foreach ($data as $item): ?>
            <?php $categories = content_categories($item['id']); ?>

            <?php
            $itemData = content_data($item['id']);
            $itemTags = content_tags($item['id']);

            $in_stock = true;
            if (isset($itemData['qty']) and $itemData['qty'] != 'nolimit' and intval($itemData['qty']) == 0) {
                $in_stock = false;
            }

            if (!isset($itemData['label'])) {
                $itemData['label'] = '';
            }
            if (!isset($itemData['label-color'])) {
                $itemData['label-color'] = '';
            }
            $itemCats = '';
            if ($categories) {
                foreach ($categories as $category) {
                    $itemCats .= $category['title'] . ', ';
                }
            }
            ?>

            <div class="col-12 col-md-6 col-lg-4 col-xl-3 item-<?php print $item['id'] ?>" data-masonry-filter="<?php print $itemCats; ?>" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <div class="product">
                    <?php if (is_array($item['prices'])): ?>
                        <?php foreach ($item['prices'] as $k => $v): ?>
                            <input type="hidden" name="price" value="<?php print $v ?>"/>
                            <input type="hidden" name="content_id" value="<?php print $item['id'] ?>"/>
                            <?php break; endforeach; ?>
                    <?php endif; ?>

                    <?php if ($itemData['label'] != ''): ?>
                        <div class="product-label" style="background-color: <?php echo $itemData['label-color']; ?>;"><?php echo $itemData['label']; ?></div>
                    <?php endif; ?>

                    <?php if ($show_fields == false or in_array('thumbnail', $show_fields)): ?>
                        <a href="<?php print $item['link'] ?>" class="d-flex h-100 w-100">
                            <div class="image" style="background-image: url('<?php print thumbnail($item['image'], 650, 650); ?>');">
                                <?php /*<div class="hover">
                                    <?php if ($show_fields == false or ($show_fields != false and in_array('add_to_cart', $show_fields))): ?>
                                        <a href="javascript:;" onclick="mw.cart.add('.shop-products .item-<?php print $item['id'] ?>');" class="btn btn-primary"><i class="material-icons">shopping_cart</i></a>
                                    <?php endif; ?>
                                    <?php if ($show_fields == false or ($show_fields != false and in_array('read_more', $show_fields))): ?>
                                        <a href="<?php print $item['link'] ?>" class="btn btn-default"><i class="material-icons">remove_red_eye</i></a>
                                    <?php endif; ?>
                                </div>*/ ?>
                            </div>
                        </a>
                    <?php endif; ?>


                    <div class="m-t-20">
                        <?php if ($show_fields == false or in_array('title', $show_fields)): ?>
                            <a href="<?php print $item['link'] ?>">
                                <div class="heading-holder">
                                    <h5><?php print $item['title'] ?></h5>
                                </div>
                            </a>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col-6 price-holder">
                                <?php if ($show_fields == false or in_array('price', $show_fields)): ?>
                                    <?php if (isset($item['prices']) and is_array($item['prices'])) { ?>
                                        <?php
                                        $vals2 = array_values($item['prices']);
                                        $val1 = array_shift($vals2);
                                        ?>
                                        <p>
                                            <?php if (isset($item['original_price']) AND $item['original_price'] != ''): ?>
                                                <span class="price-old"><?php print currency_format($item['original_price']); ?></span>
                                            <?php endif; ?>
                                            <span class="price"><?php print currency_format($val1); ?></span>
                                        </p>
                                    <?php } ?>
                                <?php endif; ?>
                            </div>

                            <div class="col-6 d-flex justify-content-end pl-0">
                                <?php if ($show_fields == false or ($show_fields != false and in_array('add_to_cart', $show_fields))): ?>
                                    <?php if ($in_stock == true): ?>
                                        <a href="javascript:;" onclick="mw.cart.add('.shop-products .item-<?php print $item['id'] ?>');" class="btn btn-primary"><i class="material-icons">shopping_cart</i> <span class="name-of-product-shop "><?php _e("Add to cart"); ?></a>
                                    <?php else: ?>
                                        <span class="text-danger p-1"><i class="material-icons" style="font-size: 18px;">remove_shopping_cart</i> <?php _lang("Out of Stock", 'templates/new-world') ?></span>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>"/>
<?php endif; ?>
