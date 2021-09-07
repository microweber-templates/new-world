<div class="mw-flex-row">
    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block">Extra Small &lt; 576px</label>
            <select name="slides-xs" class="mw_option_field selectpicker" data-width="100%" data-option-group="<?php print $params['id']; ?>" data-columns="xs">
                <option value="1" <?php if ($slides_xs == '1'): ?>selected<?php endif; ?>>1 slide</option>
                <option value="2" <?php if ($slides_xs == '2'): ?>selected<?php endif; ?>>2 slides</option>
                <option value="3" <?php if ($slides_xs == '3'): ?>selected<?php endif; ?>>3 slides</option>
                <option value="4" <?php if ($slides_xs == '4'): ?>selected<?php endif; ?>>4 slides</option>
                <option value="5" <?php if ($slides_xs == '5'): ?>selected<?php endif; ?>>5 slides</option>
                <option value="6" <?php if ($slides_xs == '6'): ?>selected<?php endif; ?>>6 slides</option>
            </select>
        </div>
    </div>

    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block">Small ≥ 576px</label>
            <select name="slides-sm" class="mw_option_field selectpicker" data-width="100%" data-option-group="<?php print $params['id']; ?>" data-columns="sm">
                <option value="1" <?php if ($slides_sm == '1'): ?>selected<?php endif; ?>>1 slide</option>
                <option value="2" <?php if ($slides_sm == '2'): ?>selected<?php endif; ?>>2 slides</option>
                <option value="3" <?php if ($slides_sm == '3'): ?>selected<?php endif; ?>>3 slides</option>
                <option value="4" <?php if ($slides_sm == '4'): ?>selected<?php endif; ?>>4 slides</option>
                <option value="5" <?php if ($slides_sm == '5'): ?>selected<?php endif; ?>>5 slides</option>
                <option value="6" <?php if ($slides_sm == '6'): ?>selected<?php endif; ?>>6 slides</option>
            </select>
        </div>
    </div>

    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block">Medium ≥ 768px</label>
            <select name="slides-md" class="mw_option_field selectpicker" data-width="100%" data-option-group="<?php print $params['id']; ?>" data-columns="md">
                <option value="1" <?php if ($slides_md == '1'): ?>selected<?php endif; ?>>1 slide</option>
                <option value="2" <?php if ($slides_md == '2'): ?>selected<?php endif; ?>>2 slides</option>
                <option value="3" <?php if ($slides_md == '3'): ?>selected<?php endif; ?>>3 slides</option>
                <option value="4" <?php if ($slides_md == '4'): ?>selected<?php endif; ?>>4 slides</option>
                <option value="5" <?php if ($slides_md == '5'): ?>selected<?php endif; ?>>5 slides</option>
                <option value="6" <?php if ($slides_md == '6'): ?>selected<?php endif; ?>>6 slides</option>
            </select>
        </div>
    </div>

    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block">Large ≥ 992px</label>
            <select name="slides-lg" class="mw_option_field selectpicker" data-width="100%" data-option-group="<?php print $params['id']; ?>" data-columns="lg">
                <option value="1" <?php if ($slides_lg == '1'): ?>selected<?php endif; ?>>1 slide</option>
                <option value="2" <?php if ($slides_lg == '2'): ?>selected<?php endif; ?>>2 slides</option>
                <option value="3" <?php if ($slides_lg == '3'): ?>selected<?php endif; ?>>3 slides</option>
                <option value="4" <?php if ($slides_lg == '4'): ?>selected<?php endif; ?>>4 slides</option>
                <option value="5" <?php if ($slides_lg == '5'): ?>selected<?php endif; ?>>5 slides</option>
                <option value="6" <?php if ($slides_lg == '6'): ?>selected<?php endif; ?>>6 slides</option>
            </select>
        </div>
    </div>

    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block">Extra large ≥ 1200px</label>
            <select name="slides-lg" class="mw_option_field selectpicker" data-width="100%" data-option-group="<?php print $params['id']; ?>" data-columns="xl">
                <option value="1" <?php if ($slides_xl == '1'): ?>selected<?php endif; ?>>1 slide</option>
                <option value="2" <?php if ($slides_xl == '2'): ?>selected<?php endif; ?>>2 slides</option>
                <option value="3" <?php if ($slides_xl == '3'): ?>selected<?php endif; ?>>3 slides</option>
                <option value="4" <?php if ($slides_xl == '4'): ?>selected<?php endif; ?>>4 slides</option>
                <option value="5" <?php if ($slides_xl == '5'): ?>selected<?php endif; ?>>5 slides</option>
                <option value="6" <?php if ($slides_xl == '6'): ?>selected<?php endif; ?>>6 slides</option>
            </select>
        </div>
    </div>
</div>

<hr class="thin"/>

<div class="mw-flex-row slider-options">
    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block"><?php _lang("Pager", "templates/new-world"); ?></label>
            <select name="pager" class="mw_option_field selectpicker" data-width="100%" option_group="<?php print $params['id'] ?>">
                <option value="false" <?php if ($pager == 'false'): ?> selected="selected" <?php endif ?>><?php _lang("False", "templates/new-world"); ?></option>
                <option value="true" <?php if ($pager == 'true'): ?> selected="selected" <?php endif ?>><?php _lang("True", "templates/new-world"); ?></option>
            </select>
        </div>
    </div>

    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block"><?php _lang("Controls", "templates/new-world"); ?></label>
            <select name="controls" class="mw_option_field selectpicker" data-width="100%" option_group="<?php print $params['id'] ?>">
                <option value="false" <?php if ($controls == 'false'): ?> selected="selected" <?php endif ?>><?php _lang("False", "templates/new-world"); ?></option>
                <option value="true" <?php if ($controls == 'true'): ?> selected="selected" <?php endif ?>><?php _lang("True", "templates/new-world"); ?></option>
            </select>
        </div>
    </div>

    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block"><?php _lang("Loop", "templates/new-world"); ?></label>
            <select name="loop" class="mw_option_field selectpicker" data-width="100%" option_group="<?php print $params['id'] ?>">
                <option value="false" <?php if ($loop == 'false'): ?> selected="selected" <?php endif ?>><?php _lang("False", "templates/new-world"); ?></option>
                <option value="true" <?php if ($loop == 'true'): ?> selected="selected" <?php endif ?>><?php _lang("True", "templates/new-world"); ?></option>
            </select>
        </div>
    </div>

    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block"><?php _lang("Adaptive Height", "templates/new-world"); ?></label>
            <select name="adaptive_height" class="mw_option_field selectpicker" data-width="100%" option_group="<?php print $params['id'] ?>">
                <option value="false" <?php if ($adaptiveHeight == 'false'): ?> selected="selected" <?php endif ?>><?php _lang("False", "templates/new-world"); ?></option>
                <option value="true" <?php if ($adaptiveHeight == 'true'): ?> selected="selected" <?php endif ?>><?php _lang("True", "templates/new-world"); ?></option>
            </select>
        </div>
    </div>

    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block"><?php _lang("Autoplay Speed" , "templates/new-world"); ?></label>
            <input type="text" value="<?php print $speed; ?>" name="speed" class="mw_option_field form-control" option_group="<?php print $params['id'] ?>"/>
        </div>
    </div>

    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block"><?php _lang("Pause on hover", "templates/new-world"); ?></label>
            <select name="pause_on_hover" class="mw_option_field selectpicker" data-width="100%" option_group="<?php print $params['id'] ?>">
                <option value="false" <?php if ($pauseOnHover == 'false'): ?> selected="selected" <?php endif ?>><?php _lang("False", "templates/new-world"); ?></option>
                <option value="true" <?php if ($pauseOnHover == 'true'): ?> selected="selected" <?php endif ?>><?php _lang("True", "templates/new-world"); ?></option>
            </select>
        </div>
    </div>

    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block"><?php _lang("Autoplay", "templates/new-world"); ?></label>
            <select name="autoplay" class="mw_option_field selectpicker" data-width="100%" option_group="<?php print $params['id'] ?>">
                <option value="false" <?php if ($autoplay == 'false'): ?> selected="selected" <?php endif ?>><?php _lang("False", "templates/new-world"); ?></option>
                <option value="true" <?php if ($autoplay == 'true'): ?> selected="selected" <?php endif ?>><?php _lang("True", "templates/new-world"); ?></option>
            </select>
        </div>
    </div>

    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block"><?php _lang("Draggable", "templates/new-world"); ?></label>
            <select name="draggable" class="mw_option_field selectpicker" data-width="100%" option_group="<?php print $params['id'] ?>">
                <option value="false" <?php if ($draggable == 'false'): ?> selected="selected" <?php endif ?>><?php _lang("False", "templates/new-world"); ?></option>
                <option value="true" <?php if ($draggable == 'true'): ?> selected="selected" <?php endif ?>><?php _lang("True", "templates/new-world"); ?></option>
            </select>
        </div>
    </div>

    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block"><?php _lang("Fade", "templates/new-world"); ?>
                <small>(work only for 1 slide)</small>
            </label>
            <select name="fade" class="mw_option_field selectpicker" data-width="100%" option_group="<?php print $params['id'] ?>">
                <option value="false" <?php if ($fade == 'false'): ?> selected="selected" <?php endif ?>><?php _lang("False", "templates/new-world"); ?></option>
                <option value="true" <?php if ($fade == 'true'): ?> selected="selected" <?php endif ?>><?php _lang("True", "templates/new-world"); ?></option>
            </select>
        </div>
    </div>

    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block"><?php _lang("Focus On Select", "templates/new-world"); ?></label>
            <select name="focus_on_select" class="mw_option_field selectpicker" data-width="100%" option_group="<?php print $params['id'] ?>">
                <option value="false" <?php if ($focusOnSelect == 'false'): ?> selected="selected" <?php endif ?>><?php _lang("False", "templates/new-world"); ?></option>
                <option value="true" <?php if ($focusOnSelect == 'true'): ?> selected="selected" <?php endif ?>><?php _lang("True", "templates/new-world"); ?></option>
            </select>
        </div>
    </div>

    <div class="mw-flex-col-xs-4 ">
        <div class="form-group">
            <label class="control-label d-block"><?php _lang("Center Padding", "templates/new-world"); ?></label>
            <input name="center_padding" class="mw_option_field form-control" data-option-group="<?php print $params['id']; ?>" value="<?php print $centerPadding; ?>" placeholder="40px"/>
        </div>
    </div>
</div>
