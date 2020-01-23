<?php

/*

type: layout

name: Three per row

description: Skin-7

*/

?>

<?php if (is_array($data)): ?>
    <?php $rand = uniqid(); ?>
    <div class="gallery-holder-2">
        <div class="row row-mx-10">
            <?php foreach ($data as $count => $item): ?>
                <div class="col-lg-4 m-b-10 col-px-5">
                    <div class="item pictures picture-<?php print $item['id']; ?>" onclick="mw.gallery(gallery<?php print $rand; ?>, <?php print $count; ?>);return false;">
                        <img src="<?php print thumbnail($item['filename'], 450, 320, true); ?>" alt="">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script>
        gallery<?php print $rand; ?> = [
                <?php foreach($data  as $item): ?>{image: "<?php print thumbnail($item['filename'], 1200); ?>", description: "<?php print $item['title']; ?>"},
            <?php endforeach;  ?>
        ];
    </script>
<?php endif; ?>