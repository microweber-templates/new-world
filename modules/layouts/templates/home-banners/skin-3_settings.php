<div id="settings-holder">
    <br/><br/>
    <h5 style="font-weight: bold; display: block;"><?php _lang("Skin Settings", "templates/new-world"); ?></h5>

    <?php
    $vimeo_url = get_option('vimeo_url', $params['id']);
    if ($vimeo_url) {
        $vimeo_url = $vimeo_url;
    } elseif (isset($params['data-vimeo-url'])) {
        $vimeo_url = $params['data-vimeo-url'];
    } else {
        $vimeo_url = '328186174';
    }
    ?>

    <div class="orientation-select" style="padding-top: 15px;">
        <label class="mw-ui-label"><?php _lang("Vimeo Video ID", "templates/new-world"); ?></label>
        <input type="text" name="vimeo_url" class="mw-ui-field mw_option_field" data-option-group="<?php print $params['id']; ?>" value="<?php echo $vimeo_url; ?>"/>
    </div>
</div>