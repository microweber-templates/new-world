<?php

/*

type: layout

name: Default

description: Default

*/
?>

<div class="tags">
    <?php foreach ($content_tags as $item): ?>
        <a href="<?php print $tags_url_base ?>/tags:<?php print url_title($item) ?>"><?php print $item ?></a>
    <?php endforeach; ?>
</div>