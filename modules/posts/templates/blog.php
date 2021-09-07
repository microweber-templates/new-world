<?php

/*

type: layout

name: Blog

description: Blog

*/
?>


    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row new-world-news">
                <?php if (!empty($data)): ?>
                    <?php foreach ($data as $key => $item): ?>
                        <?php
                        $itemData = content_data($item['id']);
                        $itemTags = content_tags($item['id']);
                        ?>

                        <div class="col-md-6 col-lg-4 <?php if ($key == 2 AND is_array($data) AND count($data) == 3): ?>d-block d-md-none d-lg-block<?php endif; ?>" <?php if(is_live_edit()): ?>no-<?php endif;?>data-aos="fade-up" data-aos-delay="<?php echo $key; ?>00" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                            <div class="post-holder">
                                <a href="<?php print $item['link'] ?>" itemprop="url">
                                    <div class="thumbnail-holder">
                                        <?php if ($itemTags): ?>
                                            <div class="tags">
                                                <?php foreach ($itemTags as $key => $tag): ?>
                                                    <?php if ($key < 3): ?>
                                                        <span class="badge badge-primary"><?php echo $tag; ?></span>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                                            <div class="thumbnail" style="background: url('<?php print thumbnail($item['image'], 535, 285, true); ?>')">
                                                <!--<img src="<?php print thumbnail($item['image'], 535, 285, true); ?>"/>-->
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </a>

                                <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                    <a href="<?php print $item['link'] ?>"><h3 class="m-b-10"><?php print $item['title'] ?></h3></a>
                                <?php endif; ?>

                                <small><?php echo date('d M Y', strtotime($item['created_at'])); ?></small>

                                <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                    <p><?php print $item['description'] ?></p>
                                <?php endif; ?>

                                <a href="<?php print $item['link'] ?>" itemprop="url" class="button-8 m-t-20"><span>Read more</span></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>"/>
<?php endif; ?>
