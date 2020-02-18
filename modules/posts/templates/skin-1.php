<?php

/*

type: layout

name: Posts Slider

description: Posts Slider

*/
?>

<?php include('slick_options.php'); ?>

<div class="row blog-posts slickslider">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <div class="row m-0 post">
                <div class="col-12 d-flex flex-column h-100" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                    <div class="description">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                            <h3 class=" m-b-20"><?php print $item['title'] ?></h3>
                        <?php endif; ?>

                        <p class="date m-b-10"><?php print $item['created_at'] ?></p>

                        <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                            <p><?php print $item['description'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="m-t-auto">
                        <a href="<?php print $item['link'] ?>" class="button-8"><span>Read more</span></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>" />
<?php endif; ?>