<?php

/*

type: layout

name: Default

description: Default

*/
?>

<div class="row teamcard">
    <?php
    $count = 0;
    $default_img = template_url() . 'assets/uploads/team1.jpg';
    if (isset($data) AND !empty($data)): ?>
        <?php foreach ($data as $slide):
            $count++;
            ?>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="member">
                    <div class="image" style="background-image: url('<?php print thumbnail($slide['file'], 400, 400, true); ?>');"></div>
                    <div class="description">
                        <h3><?php print array_get($slide, 'name'); ?></h3>
                        <p><?php print array_get($slide, 'role'); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="member">
                <div class="image" style="background-image: url('<?php print $default_img; ?>');"></div>
                <div class="description">
                    <h3>Jinna Tomson</h3>
                    <p>Manager</p>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>