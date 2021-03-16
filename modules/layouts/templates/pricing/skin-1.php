<?php

/*

type: layout

name: Pricing

position: 1

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php echo $layout_classes; ?> edit safe-mode nodrop" field="layout-pricing-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="row text-left m-b-20">
                    <div class="col-12">
                        <h2 class="hr"><?php _lang("See our plans", "templates/new-world"); ?></h2>
                    </div>
                </div>

                <div class="row pricing-list d-flex justify-content-center">
                    <div class="col-sm-6 col-md">
                        <div class="plan">
                            <div class="heading">
                                <p class="safe-element"><?php _lang("Early Bird", "templates/new-world"); ?></p>
                                <div class="price">
                                    <small class="safe-element">$</small>
                                    <span class="sum safe-element">9</span><span class="period safe-element"><?php _lang("Per month", "templates/new-world"); ?></span>
                                </div>
                            </div>
                            <div class="description allow-drop">
                                <p><?php _lang("It is a long established fact that a reader will be distracted by the readable content of a page when.", "templates/new-world"); ?></p>

                                <div class="element button-holder">
                                    <module type="btn" template="bootstrap" button_style="btn-outline-primary" button_size="btn-lg btn-block" class="m-t-20" button_text="Purchase Now"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md">
                        <div class="plan">
                            <div class="heading">
                                <p class="safe-element"><?php _lang("Team", "templates/new-world"); ?></p>
                                <div class="price">
                                    <small class="safe-element">$</small>
                                    <span class="sum safe-element">32</span><span class="period safe-element"><?php _lang("Per month", "templates/new-world"); ?></span>
                                </div>
                            </div>

                            <div class="description allow-drop">
                                <p><?php _lang("It is a long established fact that a reader will be distracted by the readable content of a page when.", "templates/new-world"); ?></p>

                                <div class="element button-holder">
                                    <module type="btn" template="bootstrap" button_style="btn-outline-primary" button_size="btn-lg btn-block" class="m-t-20" button_text="Purchase Now"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md">
                        <div class="plan">
                            <div class="heading">
                                <p class="safe-element"><?php _lang("Personal", "templates/new-world"); ?></p>
                                <div class="price">
                                    <small class="safe-element">$</small>
                                    <span class="sum safe-element">69</span><span class="period safe-element"><?php _lang("Per month", "templates/new-world"); ?></span>
                                </div>
                            </div>

                            <div class="description allow-drop">
                                <p><?php _lang("It is a long established fact that a reader will be distracted by the readable content of a page when.", "templates/new-world"); ?></p>

                                <div class="element button-holder">
                                    <module type="btn" template="bootstrap" button_style="btn-outline-primary" button_size="btn-lg btn-block" class="m-t-20" button_text="Purchase Now"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md">
                        <div class="plan">
                            <div class="heading ">
                                <p class="safe-element"><?php _lang("Gold", "templates/new-world"); ?></p>

                                <div class="price">
                                    <small class="safe-element">$</small>
                                    <span class="sum safe-element">99</span><span class="period safe-element"><?php _lang("Per month", "templates/new-world"); ?></span>
                                </div>
                            </div>

                            <div class="description allow-drop">
                                <p><?php _lang("It is a long established fact that a reader will be distracted by the readable content of a page when.", "templates/new-world"); ?></p>

                                <div class="element button-holder">
                                    <module type="btn" template="bootstrap" button_style="btn-outline-primary" button_size="btn-lg btn-block" class="m-t-20" button_text="Purchase Now"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
