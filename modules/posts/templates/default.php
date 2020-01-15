<?php

/*

type: layout

name: Default

description: Grid Columns

*/
?>

<?php
$columns = get_option('columns', $params['id']);
if ($columns === null OR $columns === false OR $columns == '') {
    $columns = 'col-12 col-sm-6 col-md-4 col-lg-3';
}

$columns_xl = get_option('columns-xl', $params['id']);
$thumb_quality = '1920';
if ($columns_xl != null OR $columns_xl != false OR $columns_xl != '') {
    if ($columns_xl == 'col-xl-12') {
        $thumbs_columns = 1;
    } else if ($columns_xl == 'col-xl-6') {
        $thumbs_columns = 2;
    } else if ($columns_xl == 'col-xl-4') {
        $thumbs_columns = 3;
    } else if ($columns_xl == 'col-xl-3') {
        $thumbs_columns = 4;
    } else if ($columns_xl == 'col-xl-2') {
        $thumbs_columns = 6;
    }

    $thumb_quality = 1920 / $thumbs_columns;
}
?>

<div class="row blog-posts">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <div class="m-b-40 <?php print $columns; ?>" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <a href="<?php print $item['link'] ?>" itemprop="url">
                    <div class="post">
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                            <div class="image" style="background-image: url('<?php print thumbnail($item['image'], $thumb_quality, $thumb_quality, true); ?>');"></div>
                        <?php endif; ?>
                        <div class="description">
                            <?php
                            $cats = content_categories($item['id']);

                            $postCats = array();
                            if ($cats) {
                                foreach ($cats as $cat) {
                                    $postCats[] = array(
                                        'title' => $cat['title'],
                                        'url' => category_link($cat['id'])
                                    );
                                }
                            }
                            ?>

                            <?php if ($postCats): ?>
                                <p class="cats" style="display:none;">
                                    .<?php foreach ($postCats as $cat): ?>&nbsp;<?php print $cat['title']; ?> .<?php endforeach; ?>
                                </p>
                            <?php endif; ?>

                            <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                <h3><?php print $item['title'] ?></h3>
                            <?php endif; ?>

                            <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                <p><?php print $item['description'] ?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <?php print paging("num={$pages_count}&paging_param={$paging_param}&current_page={$current_page}") ?>
<?php endif; ?>
