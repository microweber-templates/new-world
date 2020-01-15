<?php

/*

type: layout

name: Default

description: Default

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
            $itemCats = '';
            if ($categories) {
                foreach ($categories as $category) {
                    $itemCats .= $category['title'] . ', ';
                }
            }
            ?>

            <div class="col-12 col-md-6 col-lg-3 col-xl-2 item-<?php print $item['id'] ?>" data-masonry-filter="<?php print $itemCats; ?>" itemscope
                 itemtype="<?php print $schema_org_item_type_tag ?>">
                <div class="product">
                    <?php if (is_array($item['prices'])): ?>
                        <?php foreach ($item['prices'] as $k => $v): ?>
                            <input type="hidden" name="price" value="<?php print $v ?>"/>
                            <input type="hidden" name="content_id" value="<?php print $item['id'] ?>"/>
                            <?php break; endforeach; ?>
                    <?php endif; ?>
                    <div class="product-label sale">Sale</div>

                    <?php if ($show_fields == false or in_array('thumbnail', $show_fields)): ?>
                        <div class="image" style="background-image: url('<?php print thumbnail($item['image'], 450, 450); ?>');">
                            <div class="hover">
                                <?php if ($show_fields == false or ($show_fields != false and in_array('add_to_cart', $show_fields))): ?>
                                    <a href="javascript:;" onclick="mw.cart.add('.shop-products .item-<?php print $item['id'] ?>');" class="btn btn-primary"><i class="material-icons">shopping_cart</i></a>
                                <?php endif; ?>
                                <?php if ($show_fields == false or ($show_fields != false and in_array('read_more', $show_fields))): ?>
                                    <a href="<?php print $item['link'] ?>" class="btn btn-default"><i class="material-icons">remove_red_eye</i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <a href="<?php print $item['link'] ?>">
                        <div class="description">
                            <?php if ($show_fields == false or in_array('title', $show_fields)): ?>
                                <h3><?php print $item['title'] ?></h3>
                            <?php endif; ?>

                            <?php if ($show_fields == false or in_array('price', $show_fields)): ?>
                                <div class="price">
                                    <?php if (isset($item['prices']) and is_array($item['prices'])) { ?>
                                        <?php
                                        $vals2 = array_values($item['prices']);
                                        $val1 = array_shift($vals2); ?>
                                        <span><?php print currency_format($val1); ?></span>
                                    <?php } ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <div class="pagination-container">
        <hr>
        <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
    </div>
<?php endif; ?>
