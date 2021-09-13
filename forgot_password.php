<?php

/*

  type: layout
  content_type: static
  name: Forgot password
  position: 9
  description: Forgot password page

*/

?>
<?php include template_dir() . "header.php"; ?>

<?php
if (is_logged() == true) {
    return mw()->url_manager->redirect(profile_url());
}
?>

<div class="edit main-content" rel="content" field="content">
    <section class="section  p-t-50 p-b-50">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="m-auto allow-drop" style="max-width: 800px;">
                        <h1>
                            Forgot <span class="text-primary">Password.</span>
                        </h1>

                        <module type="breadcrumb" />

                        <hr class="hr m-t-0">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-22 p-b-30">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="m-auto allow-drop" style="max-width: 400px;">
                        <module type="users/forgot_password" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php include template_dir() . "footer.php"; ?>
