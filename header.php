<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">

<head>

    <title>{content_meta_title}</title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta property="og:title" content="{content_meta_title}"/>
    <meta name="keywords" content="{content_meta_keywords}"/>
    <meta name="description" content="{content_meta_description}"/>
    <meta property="og:type" content="{og_type}"/>
    <meta property="og:url" content="{content_url}"/>
    <meta property="og:image" content="{content_image}"/>
    <meta property="og:description" content="{og_description}"/>
    <meta property="og:site_name" content="{og_site_name}"/>
    <script>
        mw.require('icon_selector.js');
        mw.lib.require('material_icons');

        mw.lib.require('bootstrap4');
        mw.lib.require('bootstrap_select');
        mw.lib.require('font_awesome');
        mw.lib.require('mw_icons_mind');
    </script>

    <script>
        $(document).ready(function () {
            $('.selectpicker').selectpicker();
        });
    </script>


    <!-- Plugins Styles -->
    <link href="<?php print template_url(); ?>assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet"/>

    <link href="<?php print template_url(); ?>assets/css/typography.css" rel="stylesheet"/>
<!--    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>-->


    <?php print get_template_stylesheet(); ?>

    <link href="<?php print template_url(); ?>assets/css/custom.css" rel="stylesheet"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php include('template_settings.php'); ?>
</head>
<body class="<?php print helper_body_classes(); ?> <?php print $sticky_navigation; ?> ">

<?php if ($preloader == 'true'): ?>
    <div class="js-ajax-loading">
        <module type="logo" id="header-logo-loading" logo-name="header-logo" class="w-100"/>
    </div>
<?php endif; ?>

<?php if ($top_nav == 'true'): ?>
    <div class="top-nav">
        <div class="container p-0 d-flex flex-row-reverse h-100">
            <div class="row w-100 m-0">
                <div class="col-4 col-sm-3 d-flex text-left justify-content-center align-items-center h-100">
                    <div class="d-block w-100">
                        <module type="menu" template="simple" id="top_menu_1" name="top_menu_1"/>
                    </div>
                </div>
                <div class="col-8 col-sm-9 d-flex text-right justify-content-center align-items-center h-100">
                    <div class="d-none d-sm-block w-100">
                        <module type="menu" template="simple" id="top_menu_2" name="top_menu_2"/>
                    </div>
                    <div class="d-block d-sm-none w-100">
                        <ul>
                            <?php if ($header_search == 'true'): ?>
                                <li><a href="javascript:;" class="js-show-mobile-search"><i class="fa fa-search"></i> SEARCH</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="main">
    <div class="navigation-holder">
        <nav class="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <module type="logo" class="logo" id="header-logo" data-alt-logo="true"/>

                    <div class="menu">
                        <module type="menu" id="header-menu" template="navbar"/>

                        <ul class="list mobile-list">
                            <?php if ($profile_link == 'true'): ?>
                                <li class="mobile-profile">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user-circle-o"></i> <span>Hi <?php print user_name(); ?> <span class="caret"></span></span></a>
                                    <ul class="dropdown-menu">
                                        <?php if (user_id()): ?>
                                            <li><a href="#" data-toggle="modal" data-target="#loginModal"><?php _e("Profile"); ?></a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#ordersModal"><?php _e("My Orders"); ?></a></li>
                                        <?php else: ?>
                                            <li><a href="#" data-toggle="modal" data-target="#loginModal"><?php _e("Login"); ?></a></li>
                                        <?php endif; ?>

                                        <?php if (is_admin()): ?>
                                            <li><a href="<?php print admin_url() ?>"><?php _e("Admin panel"); ?></a></li>
                                        <?php endif; ?>

                                        <?php if (user_id()): ?>
                                            <li><a href="<?php print api_link('logout') ?>"><?php _e("Logout"); ?></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            <?php endif; ?>

                            <li class="mobile-search">
                                <form action="<?php print site_url(); ?>search.php" method="get">
                                    <input type="search" id="keywords" name="keywords" placeholder="SEARCH"/>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>

                            <li class="mobile-socials">
                                <module type="social_links" id="site_socials"/>
                            </li>
                        </ul>
                    </div>

                    <div class="toggle">
                        <a href="javascript:;" class="js-menu-toggle">
                            <span class="mobile-menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                    </div>

                    <ul class="member-nav">
                        <?php if ($header_search == 'true'): ?>
                            <li class="btn-search">
                                <div class="search">
                                    <form action="<?php print site_url(); ?>search" method="get">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                        <input type="search" placeholder="SEARCH" id="keywords" name="keywords"/>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($header_login == 'true'): ?>
                            <li class="btn-additional">
                                <a href="javascript:;" class="btn btn-primary">Log in</a>
                            </li>
                        <?php endif; ?>

                        <?php if ($header_signup == 'true'): ?>
                            <li class="btn-additional">
                                <a href="javascript:;" class="btn btn-primary">0 <span class="fas fa-shopptiong-cart"></span></a>
                            </li>
                        <?php endif; ?>

                        <?php if ($header_posts == 'true'): ?>
                            <li class="btn-challenges">
                                <a href="javascript:;" class="btn btn-primary js-show-challenges">Last posts <span class="fas fa-sort-down"></span></a>
                            </li>
                        <?php endif; ?>
                    </ul>

                </div>

                <?php if ($header_posts == 'true'): ?>
                    <div class="challenges-menu js-challanges-menu">
                        <div class="container p-t-40 p-b-40">
                            <div class="row">
                                <div class="col-lg-3 position-relative challenges-title">
                                    <h3>The last from<br/>blog here</h3>
                                </div>
                                <div class="col-lg-9">
                                    <div class="btn-challenges text-right d-block d-lg-none">
                                        <a href="javascript:;" class="btn btn-primary js-show-challenges">Kies je uitdaging <span class="fas fa-times"></span></a>
                                    </div>

                                    <module type="posts" template="header-posts" limit="6"/>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </nav>
    </div>

    <?php if ($header_search == 'true'): ?>
    <div class="mobile-search-holder">
        <a href="javascript:;" class="js-show-mobile-search close-button"><i class="material-icons">close</i></a>
        <div>
            <form action="<?php print site_url(); ?>search.php" method="get" class="search-holder">
                <input type="search" id="keywords" name="keywords" placeholder="SEARCH"/>
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
<?php endif; ?>