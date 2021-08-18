<?php
$randomId = uniqid();
?>

<div class="input-group mb-3">
    <input type="text" class="form-control js-filter-search-field" value="{{$search}}" placeholder="<?php _e('Search');?>" />
    <div class="input-group-append">
        <button type="submit" class="btn btn-primary btn-icon pl-3 pr-2 js-filter-search-submit"><i class="mdi mdi-magnify"></i></button>
    </div>
</div>
