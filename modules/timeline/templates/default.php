<?php

/*

type: layout

name: Default

description: Default

*/
?>

<script>mw.lib.require('slick');</script>
<script>
    $(document).ready(function () {
        $('<?php echo '#' . $params['id']; ?> .timeline').slick({
            rtl: document.documentElement.dir === 'rtl',
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 475,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        $('.slickNext-timeline').on('click', function () {
            $('<?php echo '#' . $params['id']; ?> .timeline').slick('slickNext');
        });

        $('.slickPrev-timeline').on('click', function () {
            $('<?php echo '#' . $params['id']; ?> .timeline').slick('slickPrev');
        });
    });
</script>

<div class="timeline row">
    <?php if (is_array($data) AND $data): ?>
        <?php foreach ($data as $key => $event): ?>
            <div class="event col-md-3 <?php if ($key == 0): ?>x-active<?php endif; ?>">
                <?php print $event['icon']; ?>
                <span class="date"><?php print $event['date']; ?></span>
                <span class="desc"><?php print $event['description']; ?></span>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="event col-md-3 active">
            <i class="fa fa-calendar"></i>
            <span class="date">20 JUNI 2019</span>
            <span class="desc">Startdaag</span>
        </div>

        <div class="event col-md-3">
            <i class="fa fa-calendar"></i>
            <span class="date">20 Juni 2019</span>
            <span class="desc">Startdaag</span>
        </div>

        <div class="event col-md-3">
            <i class="fa fa-calendar"></i>
            <span class="date">20 Juni 2019</span>
            <span class="desc">Startdaag</span>
        </div>

        <div class="event col-md-3">
            <i class="fa fa-calendar"></i>
            <span class="date">20 Juni 2019</span>
            <span class="desc">Startdaag</span>
        </div>
    <?php endif; ?>
</div>
