<?php

/*

type: layout

name: Default

description: Default Search template

*/

?>
<script>mw.moduleCSS("<?php print modules_url(); ?>search/search.css"); </script>
<div class="sidebar-search">
    <form action="<?php print site_url(); ?>search.php" method="get">
        <div class="mw-ui-row search-field">
            <div class="mw-ui-col">
                <input type="search" name="keywords" class="form-control mw-search-field" placeholder="<?php _lang("Search", "templates/new-world"); ?>"/>
            </div>
            <div class="mw-ui-col mw-search-default-btn-holder">
                <button class="mw-search-default-btn" type="submit"></button>
            </div>
        </div>
    </form>
</div>