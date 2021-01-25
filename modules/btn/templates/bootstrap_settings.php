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
                    <?php _lang("Color", "templates/new-world"); ?>
                </label>
                <select class="mw-ui-field mw_option_field" name="button_style">
                    <option <?php if ($style == ''): ?>selected<?php endif; ?> value="btn-default"><?php _lang("Default", "templates/new-world"); ?></option>
                    <option <?php if ($style == 'btn-outline-default'): ?>selected<?php endif; ?> value="btn-outline-default"><?php _lang("Default", "templates/new-world"); ?> Outline</option>
                    <option <?php if ($style == 'btn-primary'): ?>selected<?php endif; ?> value="btn-primary"><?php _lang("Primary"); ?></option>
                    <option <?php if ($style == 'btn-outline-primary'): ?>selected<?php endif; ?> value="btn-outline-primary"><?php _lang("Primary", "templates/new-world"); ?> Outline</option>
                    <option <?php if ($style == 'btn-info'): ?>selected<?php endif; ?> value="btn-info"><?php _lang("Info", "templates/new-world"); ?></option>
                    <option <?php if ($style == 'btn-outline-info'): ?>selected<?php endif; ?> value="btn-outline-info"><?php _lang("Info", "templates/new-world"); ?> Outline</option>
                    <option <?php if ($style == 'btn-success'): ?>selected<?php endif; ?> value="btn-success"><?php _lang("Success", "templates/new-world"); ?></option>
                    <option <?php if ($style == 'btn-outline-success'): ?>selected<?php endif; ?> value="btn-outline-success"><?php _lang("Success", "templates/new-world"); ?> Outline</option>
                    <option <?php if ($style == 'btn-warning'): ?>selected<?php endif; ?> value="btn-warning"><?php _lang("Warning", "templates/new-world"); ?></option>
                    <option <?php if ($style == 'btn-outline-warning'): ?>selected<?php endif; ?> value="btn-outline-warning"><?php _lang("Warning", "templates/new-world"); ?> Outline</option>
                    <option <?php if ($style == 'btn-danger'): ?>selected<?php endif; ?> value="btn-danger"><?php _lang("Danger", "templates/new-world"); ?></option>
                    <option <?php if ($style == 'btn-outline-danger'): ?>selected<?php endif; ?> value="btn-outline-danger"><?php _lang("Danger", "templates/new-world"); ?> Outline</option>
                    <option <?php if ($style == 'btn-link'): ?>selected<?php endif; ?> value="btn-link"><?php _lang("Simple", "templates/new-world"); ?></option>
                </select>
            </div>
        </div>
        <div class="mw-ui-col">
            <div class="mw-ui-col-container">
                <label class="mw-ui-label">
                    <?php _lang("Size", "templates/new-world"); ?>
                </label>
                <select class="mw-ui-field mw_option_field" name="button_size">
                    <option <?php if ($size == ''): ?>selected<?php endif; ?> value="">
                        <?php _lang("Default", "templates/new-world"); ?>
                    </option>
                    <option <?php if ($size == 'btn-default-large btn-lg'): ?>selected<?php endif; ?> value="btn-default-large btn-lg">
                        <?php _lang("Large", "templates/new-world"); ?>
                    </option>
                    <option <?php if ($size == 'btn-default-medium btn-md'): ?>selected<?php endif; ?> value="btn-default-medium btn-md">
                        <?php _lang("Medium", "templates/new-world"); ?>
                    </option>
                    <option <?php if ($size == 'btn-default-small btn-sm'): ?>selected<?php endif; ?> value="btn-default-small btn-sm">
                        <?php _lang("Small", "templates/new-world"); ?>
                    </option>
                    <option <?php if ($size == 'btn-default-mini btn-xs'): ?>selected<?php endif; ?> value="btn-default-mini btn-xs">
                        <?php _lang("Mini", "templates/new-world"); ?>
                    </option>
                </select>
            </div>
        </div>
    </div>
</div>
