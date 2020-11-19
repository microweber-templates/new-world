<?php
$style = get_option('button_style', $params['id']);
$size = get_option('button_size', $params['id']);
$action = get_option('button_action', $params['id']);
$url = get_option('url', $params['id']);
$popupcontent = get_option('popupcontent', $params['id']);
$text = get_option('text', $params['id']);
$description = get_option('description', $params['id']);

$url_blank = get_option('url_blank', $params['id']);
?>
<div class="mw-ui-field-holder">
    <div class="mw-ui-row-nodrop">
        <div class="mw-ui-col">
            <div class="mw-ui-col-container">
                <label class="mw-ui-label">
                    <?php _e("Color"); ?>
                </label>
                <select class="mw-ui-field mw_option_field" name="button_style">
                    <option <?php if ($style == ''): ?>selected<?php endif; ?> value="btn-default"><?php _e("Default"); ?></option>
                    <option <?php if ($style == 'btn-outline-default'): ?>selected<?php endif; ?> value="btn-outline-default"><?php _e("Default"); ?> Outline</option>
                    <option <?php if ($style == 'btn-primary'): ?>selected<?php endif; ?> value="btn-primary"><?php _e("Primary"); ?></option>
                    <option <?php if ($style == 'btn-outline-primary'): ?>selected<?php endif; ?> value="btn-outline-primary"><?php _e("Primary"); ?> Outline</option>
                    <option <?php if ($style == 'btn-info'): ?>selected<?php endif; ?> value="btn-info"><?php _e("Info"); ?></option>
                    <option <?php if ($style == 'btn-outline-info'): ?>selected<?php endif; ?> value="btn-outline-info"><?php _e("Info"); ?> Outline</option>
                    <option <?php if ($style == 'btn-success'): ?>selected<?php endif; ?> value="btn-success"><?php _e("Success"); ?></option>
                    <option <?php if ($style == 'btn-outline-success'): ?>selected<?php endif; ?> value="btn-outline-success"><?php _e("Success"); ?> Outline</option>
                    <option <?php if ($style == 'btn-warning'): ?>selected<?php endif; ?> value="btn-warning"><?php _e("Warning"); ?></option>
                    <option <?php if ($style == 'btn-outline-warning'): ?>selected<?php endif; ?> value="btn-outline-warning"><?php _e("Warning"); ?> Outline</option>
                    <option <?php if ($style == 'btn-danger'): ?>selected<?php endif; ?> value="btn-danger"><?php _e("Danger"); ?></option>
                    <option <?php if ($style == 'btn-outline-danger'): ?>selected<?php endif; ?> value="btn-outline-danger"><?php _e("Danger"); ?> Outline</option>
                    <option <?php if ($style == 'btn-link'): ?>selected<?php endif; ?> value="btn-link"><?php _e("Simple"); ?></option>
                </select>
            </div>
        </div>
        <div class="mw-ui-col">
            <div class="mw-ui-col-container">
                <label class="mw-ui-label">
                    <?php _e("Size"); ?>
                </label>
                <select class="mw-ui-field mw_option_field" name="button_size">
                    <option <?php if ($size == ''): ?>selected<?php endif; ?> value="">
                        <?php _e("Default"); ?>
                    </option>
                    <option <?php if ($size == 'btn-default-large btn-lg'): ?>selected<?php endif; ?> value="btn-default-large btn-lg">
                        <?php _e("Large"); ?>
                    </option>
                    <option <?php if ($size == 'btn-default-medium btn-md'): ?>selected<?php endif; ?> value="btn-default-medium btn-md">
                        <?php _e("Medium"); ?>
                    </option>
                    <option <?php if ($size == 'btn-default-small btn-sm'): ?>selected<?php endif; ?> value="btn-default-small btn-sm">
                        <?php _e("Small"); ?>
                    </option>
                    <option <?php if ($size == 'btn-default-mini btn-xs'): ?>selected<?php endif; ?> value="btn-default-mini btn-xs">
                        <?php _e("Mini"); ?>
                    </option>
                </select>
            </div>
        </div>
    </div>
</div>
