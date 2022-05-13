<?php if ($footer == 'true'): ?>
    <footer class="p-t-60 p-b-60">
        <div class="container">
            <div class="edit nodrop safe-mode" field="new-world_footer" rel="global">
                <div class="row">
                    <div class="col-12 col-lg-12 col-lg-3 mx-auto logo-column text-center text-lg-start m-b-20 allow-drop">
                        <div class="m-b-10">
                            <img src="<?php print template_url(); ?>assets/img/logo_footer.png" alt="" />
                            <br/>
                            <br/>
                        </div>
                    </div>

                    <div class="col-12 col-lg-12 col-lg-5 mx-auto text-center text-lg-start m-b-40 allow-drop">
                        <module type="menu" template="simple" id="footer_menu" name="footer_menu"/>
                        <br/>
                        <p><?php _lang('Microweber is free open source drag and drop website builder and CMS. It is under MIT license and we use Laravel PHP framework', 'templates/new-world'); ?></p>
                    </div>

                    <div class="col-12 col-sm col-lg-6 col-lg mx-auto text-white allow-drop">
                        <h6 class="m-b-10 m-t-5">Subscribe for Newsletter</h6>
                        <module type="contact_form" template="footer" id="footer_newsletter"/>
                        <?php /* <module type="newsletter" id="footer_newsletter"/> */ ?>
                    </div>

                    <div class="col-12 col-sm col-lg-6 col-lg mx-auto text-white text-center text-sm-end allow-drop">
                        <h6 class="m-t-5"><?php _lang('Social Networks', 'templates/new-world'); ?></h6>

                        <module type="social_links" id="footer_socials"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 text-center text-md-start edit" field="new-world_footer_copyright" rel="global">
                    <p>All Rights Reserved © <?php date('Y'); ?> - Your Brand Ltd.</p>
                </div>

                <div class="col-md-6 text-center text-md-end">
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


<script>
    mw.lib.require('slick');
</script>
<script>

    $(document).ready(function () {


        $('.navigation .menu .list.menu-root').collapseNav({
            responsive: 1,
            mobile_break: 992,
            more_text: '<?php _ejs("More"); ?>',
            li_class: 'has-sub-menu dropdown'
        });


        if ($(window).width() <= 991) {
            $('.navigation .menu .list.menu-root .has-sub-menu a.dropdown-toggle').attr('href', 'javascript:;');
            $('.navigation .menu .list.menu-root .has-sub-menu').on('click', function (e) {
                // e.preventDefault();
            })
        }
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
        var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl)
        })
    });
</script>

<script src="<?php print template_url(); ?>assets/js/main.js"></script>
</body>
</html>
