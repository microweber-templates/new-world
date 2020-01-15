<?php

/*

type: layout

name: Skin-1

description: Skin-1

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
            <module type="custom_fields" />
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="Naam"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Voornaam"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <div class="button-2 button-md">
                    <button type="submit">Schrijf in</button>
                    <div class="mask"></div>
                </div>
            </div>
        </div>
    </div>
</form>