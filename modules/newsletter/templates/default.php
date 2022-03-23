<?php

/*

type: layout

name: Default

description: Default

*/
?>

<form method="post" id="newsletters-form-<?php print $params['id'] ?>">
    <?php print csrf_form(); ?>

    <div class="row m-0">
        <div class="col-10 p-0">
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email"/>
            </div>
        </div>

        <div class="col-2 p-0">
            <div class="form-group">
                <button class="btn btn-primary btn-block text-center" type="submit"><i class="fas fa-arrow-right m-0 float-none"></i></button>
            </div>
        </div>
    </div>
</form>
