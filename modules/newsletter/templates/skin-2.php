<?php

/*

type: layout

name: Skin 2

description: Skin 2

*/
?>

<form method="post" id="newsletters-form-<?php print $params['id'] ?>">
    <?php print csrf_form(); ?>

    <div class="row">
        <div class="col-12 col-sm-7 p-0">
            <div class="form-group">
                <input type="email" name="email" class="form-control input-lg" placeholder="E-mail"/>
            </div>
        </div>

        <div class="col-12 col-sm-5 p-0">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"><?php _lang('Submit', "templates/new-world"); ?></button>
            </div>
        </div>
    </div>
</form>