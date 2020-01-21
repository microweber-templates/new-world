<div class="events">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $key => $item): ?>
            <?php
            $itemData = content_data($item['id']);
            $itemTags = content_tags($item['id']);

            if (!isset($itemData['challenge-type'])) {
                $itemData['challenge-type'] = '';
            }
            if (!isset($itemData['challenge-distance'])) {
                $itemData['challenge-distance'] = '';
            }
            if (!isset($itemData['challenge-difficulty'])) {
                $itemData['challenge-difficulty'] = '';
            }
            if (!isset($itemData['challenge-short-description'])) {
                $itemData['challenge-short-description'] = '';
            }
            ?>

            <div class="event">
                <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>
                    <div class="image">
                        <a href="<?php print $item['link'] ?>" itemprop="url">
                            <img src="<?php print thumbnail($item['image'], 140, 140, true); ?>"/>
                        </a>
                    </div>
                <?php endif; ?>

                <div class="info">
                    <p class="km"><?php print $itemData['challenge-distance'] ?></p>
                    <h5><?php print $item['title'] ?></h5>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

