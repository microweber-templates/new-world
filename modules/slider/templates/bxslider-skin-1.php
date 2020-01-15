<?php

/*

  type: layout

  name: bxSlider - Background overlay

  description: bxSlider - Background overlay


*/

?>

<div class="home-slider">
    <div class="bxSlider">
        <?php foreach ($data as $slide) { ?>
            <div class="slide">
                <?php if (isset($slide['skin_file'])) {
                    include($slide['skin_file']);
                }
                ?>
            </div>
        <?php } ?>
    </div>
</div>