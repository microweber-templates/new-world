<?php
/*

  type: layout

  name: Footer

  description: Footer

 */
?>

<div class="alert alert-success margin-bottom-30" id="msg<?php print $form_id; ?>" style="display:none;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong><?php _lang("Thank You", "templates/new-world"); ?>!</strong> <?php _lang("Your message successfully sent", "templates/new-world"); ?>!
</div>


<form method="post" id="newsletters-form-<?php print $params['id'] ?>" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
    <?php print csrf_form(); ?>

    <div class="row" style="display: none;">
        <div class="col-12">
            <module type="custom_fields"/>
        </div>
        <div class="col-12">
            <?php if ($require_terms && $require_terms_when == 'b'): ?>
                <module type="users/terms" data-for="contact_form_default"/>
            <?php endif; ?>
        </div>
    </div>

    <div class="footer-newsletter">

            <input type="email" name="email" required class="form-control input-lg" placeholder="Email"/>

            <button class="btn btn-primary btn-block text-center" type="submit"><?php _e('Go'); ?></button>

    </div>


</form>
