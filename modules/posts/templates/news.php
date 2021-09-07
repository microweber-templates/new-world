<?php

/*

type: layout

name: News 1

description: News 1

*/
?>


    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="row new-world-news">
                <?php if (!empty($data)): ?>
                    <?php foreach ($data as $key => $item): ?>
                        <?php $itemData = content_data($item['id']); ?>

                        <?php if ($key == 0): ?>
                            <div class="col-12 post-big" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                                <div class="post-holder">
                                    <div class="thumbnail justify-content-bottom align-items-end d-flex flex-cloumns" style="background-image: url('<?php print thumbnail($item['image'], 1135, 540, true); ?>');">
                                        <div>
                                            <small><?php echo date('d M Y', strtotime($item['created_at'])); ?></small>

                                            <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                                <a href="<?php print $item['link'] ?>"><h3><?php print $item['title'] ?></h3></a>
                                            <?php endif; ?>

                                            <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                                <p><?php print $item['description'] ?></p>
                                            <?php endif; ?>

                                            <a href="<?php print $item['link'] ?>" itemprop="url" class="btn btn-primary m-t-10"><span>Read more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="col-md-6" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                                <div class="post-holder">
                                    <a href="<?php print $item['link'] ?>" itemprop="url">
                                        <div class="thumbnail-holder">
                                            <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                                                <div class="thumbnail">
                                                    <img src="<?php print thumbnail($item['image'], 535, 285, true); ?>"/>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </a>

                                    <small><?php echo date('d M Y', strtotime($item['created_at'])); ?></small>
                                    <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                        <a href="<?php print $item['link'] ?>"><h3><?php print $item['title'] ?></h3></a>
                                    <?php endif; ?>

                                    <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                        <p><?php print $item['description'] ?></p>
                                    <?php endif; ?>

                                    <a href="<?php print $item['link'] ?>" itemprop="url" class="button-8 m-t-10"><span>Read more</span></a>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>"/>
<?php endif; ?>
