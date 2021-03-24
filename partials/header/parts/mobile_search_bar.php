<?php if ($search_bar == 'true'): ?>
    <ul class="list">
        <li class="mobile-search">
            <form class="" action="<?php print site_url(); ?>search" method="get">
                <i class="fa fa-search"></i>
                <input type="search" id="keywords" name="keywords"/>
                <button type="submit"><?php _e('Search'); ?></button>
            </form>
        </li>
    </ul>
<?php endif; ?>
