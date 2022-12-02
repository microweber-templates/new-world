<?php

/*

type: layout

name: Sidebar Posts

description: Sidebar Posts

*/
?>


<div class="container-fluid">
    <div class="row blog-posts-2">
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $item): ?>
                <div class="m-b-10 col-12" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                    <a href="<?php print $item['link'] ?>" itemprop="url">
                        <div class="post  d-flex align-content-center align-self-center align-items-center">
                            <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                                <div class="image" style="background-image: url('<?php print thumbnail($item['image'], 120, 120, true); ?>');"></div>
                            <?php endif; ?>
                            <div class="description">
                                <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                    <a href="<?php print $item['link'] ?>"><h5><?php print $item['title'] ?></h5></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>"/>
<?php endif; ?>
