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