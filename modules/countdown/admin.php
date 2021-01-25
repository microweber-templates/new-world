<?php
$date = get_option('date', $params['id']);
if ($date == false or $date == '') {
    $date = date('M d, Y H:i:s');
    //Oct 31, 2019 8:37:25';
}
?>

<div class="module-live-edit-settings module-countdown-settings">
    <div class="mw-ui-field-holder">
        <label class="mw-ui-label"><?php _lang("Date", "templates/new-world"); ?></label>
        <input name="date" class="mw-ui-field mw_option_field mw-full-width" type="text" value="<?php print $date; ?>">
    </div>
</div>