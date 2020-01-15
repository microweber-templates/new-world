<?php

/*

type: layout

name: Default

description: Default

*/
?>
    <div class="row justify-content-center pricing-list nodrop safe-mode">
        <?php if ($columns == 4) {
            $class = 'col-md-6 col-lg-3';
        } else if ($columns == 3) {
            $class = 'col-md-4 col-ld-4';
        } else if ($columns == 2) {
            $class = 'col-md-6 col-lg-4';
        } else {
            $class = 'col-md-6 col-lg-4';
        }
        ?>

        <?php for ($i = 1; $i <= $columns; $i++): ?>
            <div class=" <?php print $class; ?>">
                <div class="plan  <?php if ($feature == $i): ?><?php endif; ?>">
                    <?php if ($feature == $i): ?>
                        <?php /*<div class="label bestseller edit" rel="module-<?php print $params['id']; ?>" field="label-content-<?php print $i; ?>"><i class="fa fa-star safe-element"></i> <span class="safe-element">Best Seller</span> <i class="fa fa-star safe-element"></i></div>*/ ?>
                    <?php endif; ?>

                    <div class="heading  <?php print $styleColor; ?> edit" rel="module-<?php print $params['id']; ?>" field="title-content-<?php print $i; ?>">
                        <div class="price">
                            <small class="safe-element">$</small>
                            <span class="sum safe-element">69</span><span class="period safe-element">Month</span>
                        </div>
                        <p class="safe-element">Standart</p>
                    </div>
                    <div class="description">
                        <div class="edit" rel="module-<?php print $params['id']; ?>" field="table-content-<?php print $i; ?>">
                            <p class="cloneable">1000 MB Disk Space</p>
                            <p class="cloneable">100 products included</p>
                            <p class="cloneable">5 hours of support</p>
                            <p class="cloneable">Free sub-domain</p>
                            <p class="strikethrough cloneable">All mockup included</p>
                        </div>

                        <module type="btn" button_style="<?php print $buttonColor; ?>" button_size="btn-lg" class="m-t-20" text="OrderNow" id="dbtn_<?php print $params['id'] . $i; ?>"/>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>


<?php if (is_admin()): ?>
    <?php print notif(_e('Click here to edit the pricing table', true)); ?>
<?php endif; ?>