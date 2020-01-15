<?php

/*

type: layout

name: Default

description: Default captcha

*/


?>

<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<div class="captcha-holder">
    <div>
        <a href="javascript:;" class="tip" data-tip="Refresh captcha" data-tipposition="top-center"><img onclick="mw.tools.refresh_image(this);" class="img-responsive" id="captcha-<?php print $form_id; ?>" src="<?php print api_link('captcha') ?>?w=70&h=48"/></a>
    </div>
    <input name="captcha" type="text" required class="mw-captcha-input form-control" placeholder="<?php _e("Security code"); ?>"/>
</div>
