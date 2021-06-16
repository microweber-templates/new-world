<nav class="navigation">
    <div class="container">
        <div class="navbar-header">
            <module type="logo" class="logo" id="header-logo" data-alt-logo="false"/>
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
                   <div class="mw-module-container-center">
                       <module  type="menu" name="header_menu" id="header_menu" template="navbar"/>
                   </div>
                </div>
            </div>
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
    </div>

    <?php include('parts/header_posts_holder.php'); ?>
</nav>
