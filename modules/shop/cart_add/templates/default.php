<?php

/*

type: layout

name: Default

description: Default

*/
?>
<?php

if (isset($params['content-id'])) {
    $product = get_content_by_id($params["content-id"]);
    $title = $product['title'];
} else {
    $title = _e("Product", true);
}


?>

<br class="mw-add-to-cart-spacer"/>

<div class="row product-custom-fields-holder">
    <div class="col-sm-4 col">&nbsp;</div>
    <div class="col-sm-8 col">
        <module type="custom_fields" data-content-id="<?php print intval($for_id); ?>" data-skip-type="price" id="cart_fields_<?php print $params['id'] ?>"/>
    </div>
</div>

<?php if (is_array($data)): ?>
    <div class="price">
        <?php $i = 1;

        foreach ($data as $key => $v): ?>
            <div class="mw-price-item text-md-start text-center">

                <?php $keyslug_class = str_slug(strtolower($key)); ?>

                <?php if (is_string($key) and trim(strtolower($key)) == 'price'): ?>
                    <span class="mw-price-item-key mw-price-item-key-<?php print ($keyslug_class); ?>">
                    <?php _lang($key, "templates/new-world"); ?>
                </span>

                <?php else: ?>
                    <span class="mw-price-item-key mw-price-item-key-<?php print ($keyslug_class); ?>">
                    <?php print $key; ?>
                </span>
                <?php endif; ?>:

                <span class="mw-price-item-value mb-md-0 mb-3"><?php print currency_format($v); ?></span>

                <?php if (!isset($in_stock) or $in_stock == false) : ?>
                    <button class="btn btn-default float-md-end" type="button"
                            onclick="alert('<?php print addslashes(_e("This item is out of stock and cannot be ordered", true)); ?>');">
                        <i class="icon-shopping-cart glyphicon glyphicon-shopping-cart"></i>
                        <?php _lang("Out of stock", "templates/new-world"); ?>
                    </button>
                <?php else: ?>

                    <button class="btn btn-primary float-end " type="button" onclick="mw.cart.add('.mw-add-to-cart-<?php print $params['id'] ?>','<?php print $v ?>', '<?php print $title; ?>');">
                        <i class="fas fa-shopping-cart"></i>
                        <?php _lang($button_text !== false ? $button_text : "Add to cart", "templates/new-world"); ?>
                    </button>
                    <div class="clearfix"></div>
                    <?php $i++; endif; ?>
            </div>
            <?php if ($i > 1) : ?>
                <br/>
            <?php endif; ?>
            <?php $i++; endforeach; ?>
    </div>
<?php endif; ?>
