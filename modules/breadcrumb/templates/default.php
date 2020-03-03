<?php

/*

type: layout

name: Default

description: Default


*/

?>
<?php if (isset($data) and is_array($data)): ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php print  $homepage['url']; ?>"><?php print $homepage['title']; ?></a></li>

            <?php foreach ($data as $item): ?>
                <?php if (!($item['is_active'])): ?>
                    <li class="breadcrumb-item"><a href="<?php print($item['url']); ?>"><?php print($item['title']); ?></a></li>
                <?php else: ?>
                    <li class="breadcrumb-item active" aria-current="page"><?php print($item['title']); ?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ol>
    </nav>
<?php endif; ?>
