<?php

/*

type: layout

name: Default

description: Default

*/

?>

<div class="alert alert-success margin-bottom-30" id="msg<?php print $form_id; ?>" style="display:none;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong><?php _lang("Thank You", "templates/new-world"); ?>!</strong> <?php _lang("Your message successfully sent", "templates/new-world"); ?>!
</div>


<div class="section-42">
    <div class="form">
        <form id="contactform" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
            <?php print csrf_form() ?>

            <div class="row">
                <div class="col-12">
                    <module type="custom_fields" default-fields="name, email, phone, message"/>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <!-- <div class="form-group">
                        <?php /*if (get_option('disable_captcha', $params['id']) != 'y'): */ ?>
                            <module type="captcha" template="default"/>
                        <?php /*endif; */ ?>
                    </div>-->

                    <module type="btn" button_action="submit" button_style="1" button_size="btn-md" text="Vraag aan"/>
                </div>
            </div>

            <?php if ($require_terms && $require_terms_when == 'b'): ?>
                <module type="users/terms" data-for="contact_form_default"/>
            <?php endif; ?>
        </form>
    </div>
</div>