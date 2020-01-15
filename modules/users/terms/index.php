<?php
$terms_label = get_option('terms_label', 'users');
$terms_label_cleared = str_replace('&nbsp;', '', $terms_label);
$terms_label_cleared = strip_tags($terms_label_cleared);
$terms_label_cleared = mb_trim($terms_label_cleared);

if ($terms_label_cleared == '') {
    $terms_label = 'I agree with the <a href="' . site_url() . 'terms" target="_blank" class="text-white">Terms and Conditions</a>';
}
?>
<div class="row">
    <div class="col-xs-12" class="i_agree_with_terms_row_popup">
        <div class="form-group p-20">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="terms" required="true" value="1" autocomplete="off" class="custom-control-input i_agree_with_terms_input" id="i_agree_with_terms_input"/>
                <label class="custom-control-label" for="i_agree_with_terms_input"><?php print $terms_label; ?></label>
            </div>
        </div>
    </div>
</div>