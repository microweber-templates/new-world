<?php

/*

type: layout
content_type: static
name: About us
position: 5
description: About us

*/


?>
<?php include template_dir() . "header.php"; ?>

    <div class="edit main-content" rel="content" field="content">
        <module type="layouts" template="skin-9"/>
        <module type="layouts" template="features/skin-9"/>
        <module type="layouts" template="galleries/skin-3"/>
        <module type="layouts" template="videos/skin-5"/>
        <module type="layouts" template="people/skin-1"/>
        <module type="layouts" template="blockquotes/skin-4"/>
    </div>

<?php include template_dir() . "footer.php"; ?>
