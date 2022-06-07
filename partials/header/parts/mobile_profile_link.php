<?php if ($profile_link == 'true'): ?>
    <script>
        var $window = $(window), $document = $(document);
        $document.ready(function () {
            $('.js-register-modal').on('click', function () {
                $(".js-login-window").hide();
                $(".js-forgot-window").hide();
                $(".js-register-window").show();
            });
            $('.js-login-modal').on('click', function () {
                $(".js-register-window").hide();
                $(".js-forgot-window").hide();
                $(".js-login-window").show();
            });
        });
    </script>
    <ul class="list">
        <li class="mobile-profile">
            <a href="#" class="dropdown-toggle opacity-8" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user-circle-o"></i> <span><?php _lang("Hi", "templates/new-world"); ?>,<?php if (user_id()): ?> <?php print user_name(); ?> <?php else: ?> Guest <?php endif; ?> <span class="caret"></span></span></a>
            <ul class="dropdown-menu">
                <?php if (user_id()): ?>
                    <li><a href="#" data-toggle="modal" data-target="#loginModal"><?php _lang("Profile", "templates/new-world"); ?></a></li>
                    <li><a href="#" data-toggle="modal" data-target="#ordersModal"><?php _lang("My Orders", "templates/new-world"); ?></a></li>
                <?php else: ?>
                    <li><a href="#" class="js-login-modal" data-toggle="modal" data-target="#loginModal"><?php _lang("Login", "templates/new-world"); ?></a></li>
                    <li><a href="#" class="js-register-modal" data-toggle="modal" data-target="#loginModal"><?php _lang("Register", "templates/new-world"); ?></a></li>
                <?php endif; ?>

                <?php if (is_admin()): ?>
                    <li><a href="<?php print admin_url() ?>"><?php _lang("Admin panel", "templates/new-world"); ?></a></li>
                <?php endif; ?>

                <?php if (user_id()): ?>
                    <li><a href="<?php print logout_url() ?>"><?php _lang("Logout", "templates/new-world"); ?></a></li>
                <?php endif; ?>
            </ul>
        </li>
    </ul>
<?php endif; ?>
