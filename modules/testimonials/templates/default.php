<?php

/*

type: layout

name: Default

description: Testimonials Default

*/

?>

<script>
    $(document).ready(function () {
        if ($('<?php print '#' . $params['id']; ?> .slick-testimonials').length > 0) {
            $('<?php print '#' . $params['id']; ?> .slick-testimonials').each(function () {
                var el = $(this);
                el.slick({
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                    responsive: [
                        {
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 1
                            }
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 1
                            }
                        }
                    ]
                });
            });
        }
    });
</script>

<div class="slider-wrapper p-b-10">
    <div class="slick-testimonials inverse">
        <?php if (isset($data)): ?>
            <?php foreach ($data as $item) { ?>
                <div class="slide">
                    <div class="slide-holder">
                        <?php if ($item['client_picture']): ?>
                            <div class="img-holder" style="background-image: url('<?php print thumbnail($item['client_picture'], 200, 200, true); ?>');"></div>
                        <?php endif; ?>
                        <div class="info-holder">
                            <?php if (isset($item['client_website'])) { ?>
                                <h4>
                                    <a href="<?php print $item['client_website']; ?>" target="_blank">
                                        <?php if (isset($item["client_company"])) { ?>
                                            <?php print $item['client_company']; ?><?php if (isset($item["client_role"])) { ?>, <?php print $item['client_role']; ?><?php } ?>
                                        <?php } ?>
                                    </a>
                                </h4>
                            <?php } else { ?>
                                <h4>
                                    <?php if (isset($item["client_company"])) { ?>
                                        <?php print $item['client_company']; ?>
                                        <?php if (isset($item["client_role"])) { ?>, <?php print $item['client_role']; ?><?php } ?>
                                    <?php } ?>
                                </h4>
                            <?php } ?>

                            <p><?php print $item['content']; ?></p>

                            <p class="m-t-20 uppercase"><?php print $item['name']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php else: ?>

        <?php endif; ?>
    </div>
</div>