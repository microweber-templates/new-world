<?php

/*

type: layout

name: Skin - 2

description: Skin - 2

*/
?>


<?php if (isset($data) AND !empty($data)) : ?>
    <?php
    foreach ($data as $slide) {
        $cats[] = $slide['role'];
    }

    $cats = array_unique($cats);
    ?>
    <div class="masonry-team">
        <?php if ($cats): ?>
            <div class="page-section_images__filter m-b-30 ">
                <ul class="js-masonry-grid-works-filter text-center">
                    <li class="list-masonry-grid-works-filter__item m-5"><a class="btn btn-primary list-masonry-grid-works-filter__link list-masonry-grid-works-filter__link_active all" href="javascript:;" data-filter="*">See all</a></li>
                    <?php foreach ($cats as $cat): ?>
                        <li class="list-masonry-grid-works-filter__item m-5">
                            <a href="javascript:;" class="btn btn-outline-primary shadow-md" data-filter=".js-masonry-grid-works__item_<?php echo url_title($cat); ?>"><?php print $cat ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="teamcard">
            <div class="masonry-grid-works js-masonry-grid-works">
                <div class="masonry-grid-works__sizer masonry-grid-works__sizer_w-25 js-masonry-grid-works__sizer"></div>
                <?php foreach ($data as $slide): ?>

                    <div class="masonry-grid-works__item masonry-grid-works__item_w-25 js-masonry-grid-works__item_ js-masonry-grid-works__item_<?php print url_title(array_get($slide, 'role')); ?>">
                        <div class="member shadow-md">
                            <div class="image" style="background-image: url('<?php print thumbnail($slide['file'], 400, 400, true); ?>');"></div>
                            <div class="description">
                                <h5><?php print array_get($slide, 'name'); ?></h5>
                                <p><?php print array_get($slide, 'role'); ?></p>
                            </div>
                            <div class="element socials-holder">
                                <module type="social_links"/>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
