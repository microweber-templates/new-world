<?php

/*

  type: layout

  name: bxSlider 2

  description: bxSlider 2


*/

?>

<?php $pagerCustom = 'bxSlider-pager'; ?>
<?php if (count($data) > 1): ?>
    <div class="bxSlider-pager icons-pager">
        <?php foreach ($data as $key => $slide) { ?>
            <?php
            $icon = '<span class="mw-icon mw-micon- mw-micon-Alien-2"></span>';
            if (isset($slide['icon']) AND $slide['icon']) {
                $icon = $slide['icon'];
            } ?>
            <a data-slide-index="<?php echo $key; ?>" href="javascript:;" class="icon-holder">
                <div><?php echo $icon; ?></div>
            </a>
        <?php } ?>
    </div>
<?php endif; ?>

<div class="icons-slider">
    <div class="bxSlider">
        <?php foreach ($data as $slide) { ?>
            <div class="slide">
                <?php if (isset($slide['skin_file'])) {
                    include($slide['skin_file']);
                }
                ?>
            </div>
        <?php } ?>
    </div>
</div>

