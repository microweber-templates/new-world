<?php if ($search_bar == 'true'): ?>
    <li class="search dropdown ml-4">
        <button class="btn-search dropdown-toggle" type="button" id="dropdown_search" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-search"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdown_search">
            <form class="d-flex flex-nowrap" action="<?php print site_url(); ?>search" method="get">
                <i class="fa fa-search"></i>
                <input type="search" placeholder="" id="keywords" name="keywords"/>
                <button class="btn btn-primary btn-sm d-flex flex-center" type="submit"> Search</button>
            </form>
        </div>
    </li>
<?php endif; ?>

<?php if ($header_posts == 'true'): ?>
    <li class="btn-posts ml-4">
        <a href="javascript:;" class="dropdown-toggle js-show-posts"><i class="fas fa-blog"></i></a>
    </li>
<?php endif; ?>

<?php if (get_option('is_active', 'multilanguage_settings') == 'y'): ?>
    <li class="btn-multilanguage ml-4">
        <module type="multilanguage"/>
    </li>
<?php endif; ?>

