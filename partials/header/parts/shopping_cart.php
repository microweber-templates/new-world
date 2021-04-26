<?php if ($shopping_cart == 'true'): ?>
    <li class="dropdown btn-cart ml-4">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart"></i> <span class="js-shopping-cart-quantity"><?php print cart_sum(false); ?></span></a>
        <div class="dropdown-menu shopping-cart">
            <module type="shop/cart" template="small_modal" class="no-settings"/>
        </div>
    </li>
<?php endif; ?>
