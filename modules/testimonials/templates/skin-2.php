<?php

/*

type: layout

name:  Skin 2

description:  Skin 2

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
                    adaptiveHeight: true
                });
            });
        }
    });
</script>

<div class="slider-wrapper p-b-10">
    <div class="slick-testimonials">
        <?php if (isset($data)): ?>
            <?php foreach ($data as $item) { ?>
                <div class="slide">
                    <div class="slide-holder">
                        <?php if ($item['client_picture']): ?>
                            <div class="img-holder" style="background-image: url('<?php print thumbnail($item['client_picture'], 150, 150); ?>');"></div>
                        <?php endif; ?>

                        <div class="info-holder">
                            <p><?php print $item['content']; ?></p>
                        </div>

                        <div class="info-holder">
                            <h3>- <?php print $item['name']; ?></h3>

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
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php else: ?>
            <div class="slide">
                <div class="slide-holder">
                    <div class="img-holder" style="background-image: url('<?php print template_url(); ?>assets/uploads/testimonial4.png');"></div>
                    <div class="info-holder">
                        <h3>Steven Doe</h3>
                        <h4>CEO, Microweber</h4>
                        <p>This team is awesome. I get a great supportand deffenetely recoment Microweber for your next website! </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-holder">
                    <div class="img-holder" style="background-image: url('<?php print template_url(); ?>assets/uploads/testimonial2.png');"></div>
                    <div class="info-holder">
                        <h3>Joana Hanna</h3>
                        <h4>CEO, Microweber</h4>
                        <p>This team is awesome. I get a great supportand deffenetely recoment Microweber for your next website! </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-holder">
                    <div class="img-holder" style="background-image: url('<?php print template_url(); ?>assets/uploads/testimonial3.png');"></div>
                    <div class="info-holder">
                        <h3>John Doe</h3>
                        <h4>CEO, Microweber</h4>
                        <p>This team is awesome. I get a great supportand deffenetely recoment Microweber for your next website! </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-holder">
                    <div class="img-holder" style="background-image: url('<?php print template_url(); ?>assets/uploads/testimonial1.png');"></div>
                    <div class="info-holder">
                        <h3>Steven Doe</h3>
                        <h4>CEO, Microweber</h4>
                        <p>This team is awesome. I get a great supportand deffenetely recoment Microweber for your next website! </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-holder">
                    <div class="img-holder" style="background-image: url('<?php print template_url(); ?>assets/uploads/testimonial2.png');"></div>
                    <div class="info-holder">
                        <h3>Joana Hanna</h3>
                        <h4>CEO, Microweber</h4>
                        <p>This team is awesome. I get a great supportand deffenetely recoment Microweber for your next website! </p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide-holder">
                    <div class="img-holder" style="background-image: url('<?php print template_url(); ?>assets/uploads/testimonial3.png');"></div>
                    <div class="info-holder">
                        <h3>John Doe</h3>
                        <h4>CEO, Microweber</h4>
                        <p>This team is awesome. I get a great supportand deffenetely recoment Microweber for your next website! </p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>