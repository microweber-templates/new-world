<?php

/*

type: layout

name: Skin-2

description: Skin-2

*/

?>
    <style>
        .slick-gallery img {
            padding: 0 6px;
        }

        .slick-gallery .slick-next {
            right: 45px;
            z-index: 99;
        }

        .slick-gallery .slick-prev {
            left: 45px;
            z-index: 99;
        }
    </style>
    <script>
        /* ###################### Slick   ###################### */
        $(document).ready(function () {
            if ($('<?php print '#' . $params['id']; ?> .slick-gallery').length > 0) {
                $('<?php print '#' . $params['id']; ?> .slick-gallery').each(function () {
                    var el = $(this);
                    el.slick({
                        rtl: document.documentElement.dir === 'rtl',
                        centerMode: true,
                        centerPadding: '0px',
                        slidesToShow: 1,
                        arrows: true,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        dots: false
                    });
                });
            }
        });

    </script>
<?php if (is_array($data)): ?>
    <?php $rand = uniqid(); ?>


    <div class="slick-gallery">
        <?php $count = -1;
        foreach ($data as $item): ?>
            <?php $count++; ?>
            <div class="slide item pictures picture-<?php print $item['id']; ?>" onclick="mw.gallery(gallery<?php print $rand; ?>, <?php print $count; ?>);return false;">
                <img src="<?php print thumbnail($item['filename'], 1200, 700, true); ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
    <script>
        gallery<?php print $rand; ?> = [
                <?php foreach($data  as $item): ?>{image: "<?php print thumbnail($item['filename'], 1200); ?>", description: "<?php print $item['title']; ?>"},
            <?php endforeach;  ?>
        ];
    </script>
<?php endif; ?>
