<?php

/*

type: layout

name: Default

description: Default Instagram Feed

*/

?>


<?php if (!$profile_data['is_private']): ?>
    <?php if ($photos): ?>
        <div class="mw-instagram-feeds row">
            <?php foreach ($photos as $key => $photo): ?>

                <div class="col-12 col-sm-4 col-lg-3 feed-photo" <?php if(is_live_edit()): ?>no-<?php endif;?>data-aos="fade-up" data-aos-delay="<?php echo $key; ?>00">
                    <a href="https://www.instagram.com/p/<?php print $photo['shortcode']; ?>" data-fancybox target="_blank">
                        <div class="background-holder" style="background: url('<?php print $photo['thumbnail_src']; ?>');">
                            <div class="info-holder">
                                <p><?php print $photo['module_caption']; ?></p>

                                <div class="counts">
                                    <?php if (isset($photo['edge_liked_by']['count'])) : ?>
                                        <span><i class="fas fa-heart"></i> <?php echo $photo['edge_liked_by']['count']; ?></span>
                                    <?php endif; ?>
                                    <?php if (isset($photo['edge_media_to_comment']['count'])) : ?>
                                        <span><i class="fas fa-comment"></i> <?php echo $photo['edge_media_to_comment']['count']; ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
<?php else: ?>
    <p>This profile is private!</p>
<?php endif; ?>
