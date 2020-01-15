<?php

/*

type: layout

name: Posts

position: 4

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-posts-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <module type="posts" template="challenges" />
                <?php /* <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="challenge-holder" style="background-image: url('<?php print template_url(); ?>assets/img/sections/bg.jpg')">
                            <div class="footer">
                                <div class="bg"></div>
                                <div class="info">
                                    <div class="km">21km</div>
                                    <h3>Ladies@ventoux</h3>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="info">
                                    <div class="holder">
                                        <a href="#">
                                            <h3 class="hr">Ladies@ventoux</h3>
                                        </a>
                                        <p>Sed do eiusmod tempor incididunt u tempor incididun.</p>
                                    </div>
                                </div>
                                <div class="bg">
                                    <a href="#" class="button-7"><span>Meer info</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="challenge-holder" style="background-image: url('<?php print template_url(); ?>assets/img/sections/bg.jpg')">
                            <div class="footer">
                                <div class="bg"></div>
                                <div class="info">
                                    <div class="km">21km</div>
                                    <h3>Ladies@ventoux</h3>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="info">
                                    <div class="holder">
                                        <a href="#">
                                            <h3 class="hr">Ladies@ventoux</h3>
                                        </a>
                                        <p>Sed do eiusmod tempor incididunt u tempor incididun.</p>
                                    </div>
                                </div>
                                <div class="bg">
                                    <a href="#" class="button-7"><span>Meer info</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="challenge-holder" style="background-image: url('<?php print template_url(); ?>assets/img/sections/bg.jpg')">
                            <div class="footer">
                                <div class="bg"></div>
                                <div class="info">
                                    <div class="km">21km</div>
                                    <h3>Ladies@ventoux</h3>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="info">
                                    <div class="holder">
                                        <a href="#">
                                            <h3 class="hr">Ladies@ventoux</h3>
                                        </a>
                                        <p>Sed do eiusmod tempor incididunt u tempor incididun.</p>
                                    </div>
                                </div>
                                <div class="bg">
                                    <a href="#" class="button-7"><span>Meer info</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="challenge-holder" style="background-image: url('<?php print template_url(); ?>assets/img/sections/bg.jpg')">
                            <div class="footer">
                                <div class="bg"></div>
                                <div class="info">
                                    <div class="km">21km</div>
                                    <h3>Ladies@ventoux</h3>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="info">
                                    <div class="holder">
                                        <a href="#">
                                            <h3 class="hr">Ladies@ventoux</h3>
                                        </a>
                                        <p>Sed do eiusmod tempor incididunt u tempor incididun.</p>
                                    </div>
                                </div>
                                <div class="bg">
                                    <a href="#" class="button-7"><span>Meer info</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="challenge-holder" style="background-image: url('<?php print template_url(); ?>assets/img/sections/bg.jpg')">
                            <div class="footer">
                                <div class="bg"></div>
                                <div class="info">
                                    <div class="km">21km</div>
                                    <h3>Ladies@ventoux</h3>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="info">
                                    <div class="holder">
                                        <a href="#">
                                            <h3 class="hr">Ladies@ventoux</h3>
                                        </a>
                                        <p>Sed do eiusmod tempor incididunt u tempor incididun.</p>
                                    </div>
                                </div>
                                <div class="bg">
                                    <a href="#" class="button-7"><span>Meer info</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="challenge-holder" style="background-image: url('<?php print template_url(); ?>assets/img/sections/bg.jpg')">
                            <div class="footer">
                                <div class="bg"></div>
                                <div class="info">
                                    <div class="km">21km</div>
                                    <h3>Ladies@ventoux</h3>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="info">
                                    <div class="holder">
                                        <a href="#">
                                            <h3 class="hr">Ladies@ventoux</h3>
                                        </a>
                                        <p>Sed do eiusmod tempor incididunt u tempor incididun.</p>
                                    </div>
                                </div>
                                <div class="bg">
                                    <a href="#" class="button-7"><span>Meer info</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> */ ?>
            </div>
        </div>
    </div>
</section>
