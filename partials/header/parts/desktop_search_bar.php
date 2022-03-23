<?php if ($search_bar == 'true'): ?>
    <li class="search dropdown ms-4 dropdown-toggle-v2-list-item">
        <button class="dropdown-toggle-v2 btn-search" type="button" id="dropdown_search">
            <i class="mdi mdi-magnify"></i>
        </button>
        <div class="dropdown-menu-v2" aria-labelledby="dropdown_search">
            <form class="d-flex flex-nowrap" action="<?php print site_url(); ?>search" method="get">
                <i class="mdi mdi-magnify"></i>
                <input type="search" placeholder="" id="keywords" name="keywords"/>
                <button class="btn btn-primary btn-sm" type="submit">Search</button>
            </form>
        </div>
    </li>
<?php endif; ?>

<?php if ($header_posts == 'true'): ?>
    <li class="btn-posts ms-4">
        <a href="javascript:;" class="dropdown-toggle js-show-posts"><i class="fas fa-blog"></i></a>
    </li>
<?php endif; ?>

<?php if (get_option('is_active', 'multilanguage_settings') == 'y'): ?>
    <li class="btn-multilanguage ms-4">
        <module type="multilanguage"/>
    </li>
<?php endif; ?>

