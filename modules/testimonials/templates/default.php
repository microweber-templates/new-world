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
                    rtl: document.documentElement.dir === 'rtl',
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1,
                    arrows: true,
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

<div class="slider-wrapper p-b-10" style="background-color: #212529;">
    <div class="slick-testimonials inverse">
        <?php if (isset($data)): ?>
            <?php foreach ($data as $item) { ?>
                <div class="slide">
                    <div class="slide-holder">
                        <?php if ($item['client_picture']): ?>
                            <div class="img-holder" style="background-image: url('<?php print thumbnail($item['client_picture'], 200, 200, true); ?>');"></div>
                        <?php endif; ?>
                        <div class="info-holder">
                            <h3 class="m-t-20 m-b-10"><?php print $item['name']; ?></h3>

                            <?php if (isset($item['client_website'])) { ?>
                                <h5>
                                    <a href="<?php print $item['client_website']; ?>" target="_blank">
                                        <?php if (isset($item["client_company"])): ?><?php print $item['client_company']; ?><?php endif; ?>
                                        <?php if (isset($item["client_role"])): ?><?php if (isset($item["client_company"])): ?>, <?php endif; ?><?php print $item['client_role']; ?><?php endif; ?>
                                    </a>
                                </h5>
                            <?php } else { ?>
                                <h5>
                                    <?php if (isset($item["client_company"])): ?><?php print $item['client_company']; ?><?php endif; ?>
                                    <?php if (isset($item["client_role"])): ?><?php if (isset($item["client_company"])): ?>, <?php endif; ?><?php print $item['client_role']; ?><?php endif; ?>
                                </h5>
                            <?php } ?>
                            <br/>
                            <br/>
                            <br/>
                            <p><?php print $item['content']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php else: ?>

        <?php endif; ?>
    </div>
</div>
