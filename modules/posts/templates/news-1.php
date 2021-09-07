<?php

/*

type: layout

name: News 2

description: News 2

*/
?>


<div class="row">
    <div class="col-lg-12 mx-auto">
        <div class="row new-world-news-1">
            <?php if (!empty($data)): ?>
                <?php foreach ($data as $key => $item): ?>
                    <?php $itemData = content_data($item['id']); ?>
                    <?php if ($key == 0): ?>
                        <div class="col-lg-7 post-big m-b-20" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                            <div class="post-holder">
                                <a href="<?php print $item['link'] ?>">
                                    <div class="thumbnail justify-content-bottom align-items-end d-flex flex-cloumns" style="background-image: url('<?php print thumbnail($item['image'], 800, 800); ?>');"></div>
                                </a>
                                <small><?php echo date('d M Y', strtotime($item['created_at'])); ?></small>
                                <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                    <a href="<?php print $item['link'] ?>"><h2><?php print $item['title'] ?></h2></a>
                                <?php endif; ?>

                                <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                    <p><?php print $item['description'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

                <div class="col-lg-5 offset-lg-1 col-lg-4">
                    <div class="row">
                        <?php foreach ($data as $key => $item): ?>
                            <?php $itemData = content_data($item['id']); ?>
                            <?php if ($key == 1 OR $key == 2): ?>
                                <div class="col-lg-12 m-b-20" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                                    <div class="post-holder">
                                        <a href="<?php print $item['link'] ?>">
                                            <div class="thumbnail justify-content-bottom align-items-end d-flex flex-cloumns" style="background-image: url('<?php print thumbnail($item['image'], 500, 500); ?>');"></div>
                                        </a>

                                        <small><?php echo date('d M Y', strtotime($item['created_at'])); ?></small>
                                        <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                            <a href="<?php print $item['link'] ?>"><h4><?php print $item['title'] ?></h4></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
