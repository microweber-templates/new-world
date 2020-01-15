<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<div class="form-group m-t-20">
    <div class="row">
        <div class="col-4">
            <a href="javascript:;" class="tip" data-tip="Refresh captcha" data-tipposition="top-center"><img onclick="mw.tools.refresh_image(this);" class="img-responsive" id="captcha-<?php print $form_id; ?>" src="<?php print api_link('captcha') ?>?w=70&h=48"/></a>
        </div>
        <div class="col-8">
            <input class="form-control input-lg" name="captcha" type="text" required placeholder="<?php _e("Security code"); ?>">
        </div>
    </div>
</div>