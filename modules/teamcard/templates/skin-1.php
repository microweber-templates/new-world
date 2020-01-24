<?php

/*

type: layout

name: Skin - 1

description: Skin - 1

*/
?>

<div class="row teamcard-2">
    <?php
    $count = 0;
    $default_img = template_url() . 'assets/img/card-active.png';

    if (isset($data) AND !empty($data)): ?>
        <?php foreach ($data as $key => $slide):
            $count++;
            ?>

            <?php if ($slide['file']) {
            $member_img = thumbnail($slide['file'], 240, 290, true);
        } else {
            $member_img = $default_img;
        } ?>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="member">
                    <div class="image" style="background-image: url('<?php print $member_img; ?>');">
                        <div class="hover">
                            <module type="social_links" id="<?php print $params['id']; ?>-team-<?php print $key; ?>"/>
                        </div>
                    </div>
                    <div class="description">
                        <h3><?php print array_get($slide, 'name'); ?></h3>
                        <p><?php print array_get($slide, 'role'); ?></p>
                        <span><?php print array_get($slide, 'bio'); ?></span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="member">
                <div class="image" style="background-image: url('<?php print $default_img; ?>');">
                    <div class="hover">
                        <ul class="socials">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="description">
                    <h3>John Doe</h3>
                    <p>CEO & Co-founder</p>
                    <span>Machine learning and scientist</span>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>