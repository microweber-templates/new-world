<?php

/*

type: layout

name: Shop Inner

description: Skin 6

*/

?>

<?php

    $pictureElementId = 'module-image-' . $params['id'];

if (is_array($data)): ?>
    <div class="shop-inner-gallery">
        <?php if (sizeof($data) > 1) { ?>
            <div class="shop-inner-gallery-thumbnails">
                <?php $count = -1; foreach ($data as $item): $count++; ?>
                    <a
                        href="<?php print thumbnail($item['filename'], 1920, 1920); ?>"
                        onclick="setProductImage('<?php print $pictureElementId; ?>', '<?php print thumbnail($item['filename'], 1920, 1920); ?>', <?php print $count; ?>);return false;"
                        style="background-image: url('<?php print thumbnail ($item['filename'], 200, 200); ?>');">
                    </a>
                <?php endforeach; ?>
            </div>
        <?php } ?>
        <div class="shop-inner-big-image">
            <img src="<?php print thumbnail($data[0]['filename'], 1920, 1920); ?>" id="<?php print $pictureElementId; ?>" />
        </div>
    </div>


    <script>

        var setProductImage = function (id, url, index) {
            var el = document.getElementById(id);
            el.dataset.index = index;
            var parent = el.parentElement;
            mw.spinner(({element: parent, size: 60, decorate: true})).show();
            mw.element({
                tag: 'img',
                props: {
                    src: url,
                    onload: function (){
                        el.src = url;
                        mw.spinner(({element: parent})).hide();
                    }
                }
            })
        }

        var gallery = <?php print json_encode($data); ?>;

        document.getElementById('<?php print $pictureElementId; ?>').addEventListener('click', function(){
             mw.gallery(gallery, Number(this.dataset.index || 0));
        });
    </script>

<?php endif; ?>
