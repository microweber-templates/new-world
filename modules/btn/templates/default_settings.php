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
                    <option <?php if (!isset($style) OR $style == '' OR $style == 'btn-default') {print 'selected';} ?> value="btn-default"><?php _e("Default Button"); ?></option>
<!--                    <option --><?php //if ($style == '1') {print 'selected';} ?><!-- value="1">--><?php //_e("Style 1"); ?><!--</option>-->
<!--                    <option --><?php //if ($style == '2') {print 'selected';} ?><!-- value="2">--><?php //_e("Red Button with Arrow"); ?><!--</option>-->
<!--                    <option --><?php //if ($style == '3') {print 'selected';} ?><!-- value="3">--><?php //_e("Red Border White Button"); ?><!--</option>-->
<!--                    <option --><?php //if ($style == '4') {print 'selected';} ?><!-- value="4">--><?php //_e("White Border Transparent Button"); ?><!--</option>-->
<!--                    <option --><?php //if ($style == '5') {print 'selected';} ?><!-- value="5">--><?php //_e("White Border Transparent Button with Arrow"); ?><!--</option>-->
<!--                    <option --><?php //if ($style == '6') {print 'selected';} ?><!-- value="6">--><?php //_e("White Button"); ?><!--</option>-->
                    <option <?php if ($style == '7') {print 'selected';} ?> value="7"><?php _e("Underlined White Link"); ?></option>
                    <option <?php if ($style == '8') {print 'selected';} ?> value="8"><?php _e("Blue Link"); ?></option>
<!--                    <option --><?php //if ($style == '9') {print 'selected';} ?><!-- value="9">--><?php //_e("Red Link"); ?><!--</option>-->
                </select>
            </div>
        </div>
        <div class="mw-ui-col">
            <div class="mw-ui-col-container">
                <label class="mw-ui-label">
                    <?php _e("Size"); ?>
                </label>
                <select class="mw-ui-field mw_option_field" name="button_size">
                    <option <?php if ($size == '') {
                        print 'selected';
                    } ?> value="">
                        <?php _e("Large"); ?>
                    </option>

                    <option <?php if ($size == 'btn-block') {
                        print 'selected';
                    } ?> value="btn-block">
                        <?php _e("Large Block"); ?>
                    </option>

                    <option <?php if ($size == 'button-md') {
                        print 'selected';
                    } ?> value="button-md">
                        <?php _e("Medium"); ?>
                    </option>

                    <option <?php if ($size == 'button-md btn-block') {
                        print 'selected';
                    } ?> value="button-md btn-block">
                        <?php _e("Medium Block"); ?>
                    </option>
                </select>
            </div>
        </div>
    </div>
</div>
