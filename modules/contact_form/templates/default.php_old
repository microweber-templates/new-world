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


<div class="form">
    <form id="contactform" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
        <?php print csrf_form() ?>

        <div class="row">
            <div class="col-12">
                <module type="custom_fields" default-fields="Your Name[type=text,field_size=6,show_placeholder=true], E-mail Address[type=email,field_size=6,show_placeholder=true], Phone[type=phone,field_size=6,show_placeholder=true], Company[type=text,field_size=6,show_placeholder=true], Message[type=textarea,field_size=12,show_placeholder=true]" input_class="form-control"/>
            </div>
            <?php
           // dd($require_terms);
            ?>
            <div class="col-12">
                <?php if ($require_terms && $require_terms_when == 'b'): ?>
                    <module type="users/terms" data-for="contact_form_default" />
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 text-start text-left">
                <?php if (get_option('disable_captcha', $params['id']) != 'y'): ?>
                    <module type="captcha"/>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-6 text-end text-right">
                <module type="btn" template="bootstrap" button_action="submit" button_style="btn-primary" text="Send message"/>
            </div>
        </div>
    </form>
</div>
