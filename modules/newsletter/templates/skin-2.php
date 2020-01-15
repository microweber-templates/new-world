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