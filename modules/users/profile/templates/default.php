<?php $user = get_user_by_id(user_id()); ?>
<div>
    <script>
        saveuserdata = function () {
            var data = mw.serializeFields('#user-data');
            if (data.password != data.password2) {
                mw.$('#errnotification').html('Passwords do not match').show();
                return false;
            } else {
                mw.$('#errnotification').hide();

                if (data.password == '') {
                    delete data.password;
                    delete data.password2;
                }
            }
            mw.tools.loading('#user-data')
            $.post("<?php print api_url(); ?>save_user", data, function () {
                mw.tools.loading('#user-data', false);
            });
        }
    </script>


    <p>From this window you can edit your profile.<br/><br/></p>

    <form method="post" id="user-data">
        <div class="mw-ui-box mw-ui-box-important mw-ui-box-content" id="errnotification" style="display: none;margin-bottom: 12px;"></div>

        <div class="form-group">
            <input class="form-control input-lg" type="text" name="username" value="<?php print $user['username']; ?>" placeholder="Username or E-mail">
        </div>

        <div class="form-group">
            <input class="form-control input-lg" type="email" name="email" value="<?php print $user['email']; ?>" placeholder="E-mail">
        </div>

        <div class="form-group">
            <input class="form-control input-lg" type="text" name="first_name" value="<?php print $user['first_name']; ?>" placeholder="<?php _e('First name'); ?>">
        </div>

        <div class="form-group">
            <input class="form-control input-lg" type="text" name="last_name" value="<?php print $user['last_name']; ?>" placeholder="<?php _e('Last name'); ?>">
        </div>

        <div class="form-group">
            <input class="form-control input-lg" type="password" name="password" placeholder="<?php _e('New Password'); ?>">
        </div>

        <div class="form-group">
            <input class="form-control input-lg" type="password" name="password2" placeholder="<?php _e('Confirm Password'); ?>">
        </div>

        <button type="button" class="btn btn-default btn-lg btn-block m-t-10" onclick="saveuserdata()"><?php _e('Save'); ?></button>
    </form>
</div>