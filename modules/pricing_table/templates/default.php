<?php

/*

type: layout

name: Default

description: Default

*/
?>

    <div class="row pricing-list nodrop safe-mode justify-content-center">
        <?php $class = 'col-sm-6 col-md'; ?>

        <?php for ($i = 1; $i <= $columns; $i++): ?>
            <div class="<?php echo $class; ?> edit" rel="module-<?php print $params['id']; ?>" field="plan-content-<?php print $i; ?>">
                <div class="plan <?php if ($feature == $i): ?><?php endif; ?>">
                    <div class="heading">
                        <p class="safe-element">Early Bird</p>
                        <div class="price">
                            <small class="safe-element">$</small>
                            <span class="sum safe-element">9</span><span class="period safe-element">Per month</span>
                        </div>
                    </div>
                    <div class="description allow-drop">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when.</p>

                        <div class="element button-holder">
                            <module type="btn" template="bootstrap" button_style="<?php //print $buttonColor; ?> btn-outline-primary" button_size="btn-lg btn-block" class="m-t-20" button_text="Purchase Now" id="dbtn_<?php print $params['id'] . $i; ?>"/>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>


<?php if (is_admin()): ?>
    <?php print notif(_e('Click here to edit the pricing table', true)); ?>
<?php endif; ?>