<?php if ($footer == 'true'): ?>
    <footer class="p-t-60 p-b-60">
        <div class="container">
            <div class="edit nodrop safe-mode" field="new-world_footer" rel="global">
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-3 mx-auto logo-column text-center text-xl-left m-b-20">
                        <img src="<?php print template_url(); ?>assets/img/logo_footer.png" alt="" class="m-b-10"/>
                        <br/>
                        <br/>
                    </div>

                    <div class="col-12 col-lg-12 col-xl-5 mx-auto text-center text-xl-left m-b-40">
                        <module type="menu" template="simple" id="footer_menu" name="footer_menu_1"/>
                        <br/>
                        <p><?php print _lang('Microweber is free open source drag and dop websitre builder and CMS. It is under MIT licenbse and we use Laravel  PHP framework', 'templates/new-world'); ?></p>
                    </div>

                    <div class="col-12 col-sm col-lg-6 col-xl mx-auto text-white">
                        <h6 class="m-b-10 m-t-5">Subscribe for Newsletter</h6>
                        <module type="contact_form" template="footer" id="footer_newsletter"/>
                        <?php /* <module type="newsletter" id="footer_newsletter"/> */ ?>
                    </div>

                    <div class="col-12 col-sm col-lg-6 col-xl mx-auto text-white text-center text-sm-right">
                        <h6 class="m-t-5">Social Networks</h6>

                        <module type="social_links" id="footer_socials"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 text-center text-md-left edit" field="new-world_footer_copyright" rel="global">
                    <p>All Rights Reserved © <?php date('Y'); ?> - Your Brand Ltd.</p>
                </div>

                <div class="col-md-6 text-center text-md-right">
                    <p><?php print powered_by_link(); ?></p>
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

<script src="<?php print template_url(); ?>assets/plugins/elevatezoom/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script src="<?php print template_url(); ?>assets/js/libs/anime.min.js"></script>
<script src="<?php print template_url(); ?>assets/js/libs/jquery.sticky-sidebar.min.js"></script>

<script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/masonry/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/masonry/isotope.pkgd.min.js"></script>


<script>
    mw.lib.require('slick');
    mw.lib.require('collapse_nav');
</script>
<script src="<?php print template_url(); ?>assets/js/main.js"></script>


</body>
</html>