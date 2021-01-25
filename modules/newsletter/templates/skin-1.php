<?php

/*

type: layout

name: Skin-1

description: Skin-1

*/
?>

<form method="post" id="newsletters-form-<?php print $params['id'] ?>">
    <?php print csrf_form(); ?>

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <input type="text" name="first_name"  class="form-control input-lg" placeholder="Name"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <input type="text" name="last_name"  class="form-control input-lg" placeholder="Last name"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <input type="email" name="email" class="form-control input-lg" placeholder="Email"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary"><?php _lang('Submit', "templates/new-world"); ?></button>
            </div>
        </div>
    </div>
</form>