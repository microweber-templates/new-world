<nav class="navigation">
    <div class="container">
        <div class="navbar-header">
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
            <module type="logo" class="logo" id="header-logo" data-alt-logo="false"/>
            <?php if ($shopping_cart == 'true' or $profile_link == 'true' or $search_bar == 'true'): ?>
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
    </div>

    <?php include('parts/header_posts_holder.php'); ?>
</nav>
