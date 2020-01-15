<?php

/*

type: layout

name: Skin-2

description: Skin-2

*/

?>

<div class="alert alert-success margin-bottom-30" id="msg<?php print $form_id; ?>" style="display:none;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong><?php _lang("Thank You", "templates/new-world"); ?>!</strong> <?php _lang("Your message successfully sent", "templates/new-world"); ?>!
</div>


<form method="post" id="newsletters-form-<?php print $params['id'] ?>" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
    <?php print csrf_form(); ?>

    <div class="row">
        <div class="col-12">
            <module type="custom_fields"/>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-7 p-0">
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email"/>
            </div>
        </div>

        <div class="col-12 col-sm-5 p-0">
            <div class="form-group">
                <div class="button-2 button-md btn-block">
                    <button type="submit">IK WIL WINNEN</button>
                    <div class="mask"></div>
                </div>
            </div>
        </div>
    </div>
</form>