<nav class="navigation">
    <div class="container">
        <div class="navbar-header">
            <div class="main-header">
                <module type="social_links" class="header-social-links hidden-xs" id="header-socials"/>
                <module type="logo" class="logo" id="header-logo" data-alt-logo="false"/>
                <ul class="member-nav main-member-nav visible-search">
                    <?php include('parts/desktop_profile_link.php'); ?>
                    <?php include('parts/shopping_cart.php'); ?>
                    <?php include('parts/desktop_search_bar.php'); ?>
                    <li class="ms-3">
                        <div class="toggle">
                            <a href="javascript:;" class="js-menu-toggle mobile-menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="down-header">
                <div class="menu-overlay">
                    <div class="menu">
                        <div class="toggle-inside-menu">
                            <a href="javascript:;" class="js-menu-toggle mobile-menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <?php //include('parts/mobile_search_bar.php'); ?>
                        <?php include('parts/mobile_profile_link.php'); ?>
                        <module type="menu" name="header_menu" id="header_menu" template="navbar"/>

                        <!--Javascript Append social in mobile menu -->
                        <ul class="socials header-social-links header-social-phone hidden-sm hidden-md hidden-lg"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('parts/header_posts_holder.php'); ?>
</nav>
