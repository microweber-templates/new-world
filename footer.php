    <?php if ($footer == 'true'): ?>
        <footer class="p-t-60 p-b-60">
            <div class="container">
                <div class="edit nodrop safe-mode" field="new-world_footer" rel="global">
                    <div class="row">
                        <div class="col-sm-12 col-lg-3 mx-auto logo-column">
                            <img src="<?php print template_url(); ?>assets/img/logo_footer.png" alt="" class="m-b-10"/>
                            <br/>
                            <br/>
                            <p><?php print _lang('Powered by Microweber CMS', 'templates/new-world'); ?></p>
                        </div>

                        <div class="col-12 col-sm-4 col-md col-sm mx-auto">
                            <module type="menu" template="simple" id="footer_menu" name="footer_menu_1"/>
                            <br/>
                            <br/>
                            <p><?php print _lang('Microweber is free open source drag and dop websitre builder and CMS. It is under MIT licenbse and we use Laravel  PHP framework', 'templates/new-world'); ?></p>
                        </div>

                        <div class="col-12 col-sm-12 col-lg mx-auto">
                            <div class="row flex-column-reverse flex-sm-row">
                                <div class="col-12 col-sm-8 col-lg-12">
                                    <h4><?php print _lang('Tips in je mailbox', 'templates/new-world'); ?></h4>
                                    <p>Schrijf je in op onze nieuwsbrief en blijf op de hoogte van Mon Ventoux.</p>
                                    <br/>
                                    <module type="contact_form" template="footer" id="footer_newsletter"/>
                                    <?php /* <module type="newsletter" id="footer_newsletter"/> */ ?>
                                </div>

                                <div class="col-12 col-sm-4 col-lg-12">
                                    <h4><?php print _lang('Share your challenge', 'templates/new-world'); ?></h4>

                                    <p><a href="#" class="underlined">#monventoux</a></p>

                                    <h4 class="d-block d-sm-none m-t-60"><?php print _lang('Social', 'templates/new-world'); ?></h4>
                                    <module type="social_links" id="site_socials"/>
                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row copyright">
                    <div class="col-12 col-sm-12 col-lg-4 text-left">

                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 text-center">
                        <module type="menu" template="simple" id="footer_menu_copyright" name="footer_menu_copyright"/>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <p class="text-center text-sm-right"><?php print powered_by_link(); ?>. <?php print _e("All rights Reserved."); ?></p>
                    </div>
                </div>
            </div>
        </footer>

        <div class="bg-pines d-block d-lg-none bg-default" style="height: 50px;"></div>
    <?php endif; ?>

    </div>

    <button id="to-top" class="btn" style="display: block;"></button>

    <?php include('footer_cart.php'); ?>

    <!-- Plugins -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en-GB&amp;key=AIzaSyDbN7i-eF7dlNNp-bxbERNomOGYpZld3B0"></script>

    <script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="<?php print template_url(); ?>assets/js/libs/anime.min.js"></script>
    <script src="<?php print template_url(); ?>assets/js/libs/jquery.sticky-sidebar.min.js"></script>
    <script>
        mw.lib.require('slick');
        mw.lib.require('collapse_nav');
    </script>
    <script src="<?php print template_url(); ?>assets/js/main.js"></script>


</body>
</html>