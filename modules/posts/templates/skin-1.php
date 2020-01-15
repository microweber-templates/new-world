<?php

/*

type: layout

name: Posts Slider

description: Posts Slider

*/
?>

<?php include('slick_options.php'); ?>

<div class="row blog-posts four-columns slickslider">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <div>
                <div class="col-12" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                    <a href="<?php print $item['link'] ?>" itemprop="url" class="post">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                            <div class="image-holder">
                                <div class="image" style="background-image: url('<?php print thumbnail($item['image'], $thumb_quality, $thumb_quality, true); ?>');">
                                    <div class="hover">
                                    <span class="btn btn-default"><i class="material-icons">remove_red_eye</i>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="description">
                            <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                <h3><?php print $item['title'] ?></h3>
                            <?php endif; ?>
                            <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                <p itemprop="description"><?php print $item['description'] ?></p>
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>
