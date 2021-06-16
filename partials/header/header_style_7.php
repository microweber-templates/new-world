<nav class="navigation">
    <div class="container color-background-container">
        <div class="navbar-header">
            <div class="main-header">
                <module type="logo" class="logo me-3" id="header-logo" data-alt-logo="false"/>
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

                    </div>
                </div>
                <?php if ($shopping_cart == 'true' or $profile_link == 'true' or $search_bar == 'true'): ?>
                    <ul class="member-nav main-member-nav visible-search">
                        <?php include('parts/desktop_profile_link.php'); ?>
                        <?php include('parts/shopping_cart.php'); ?>
                        <?php include('parts/desktop_search_bar.php'); ?>
                        <li class="">
                            <div class="toggle ms-3">
                                <a href="javascript:;" class="js-menu-toggle mobile-menu-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </li>
                    </ul>
                <?php endif; ?>
                <?php if ($shopping_cart == 'false' and $profile_link == 'false' and $search_bar == 'false'): ?>
                    <div class="toggle">
                        <a href="javascript:;" class="js-menu-toggle mobile-menu-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="down-header">
                <div class="secondary-menu">
                    <module type="menu" name="secondary_menu" id="secondary_menu" template="navbar"/>
                </div>
                <span class="mobile-menu-label">
                    <b>Show Categories</b>
                    <b>Close Categories</b>
                </span>
                <div class="extra-toggle">
                    <a href="javascript:;" class="js-extra-menu-toggle mobile-menu-btn-2">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php include('parts/header_posts_holder.php'); ?>
</nav>
