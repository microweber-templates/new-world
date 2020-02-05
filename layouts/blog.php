<?php

/*

type: layout
content_type: dynamic
name: Blog
position: 3
description: Blog

*/


?>
<?php include template_dir() . "header.php"; ?>

    <div class="edit main-content" rel="content" field="new-world_content">
        <module type="layouts" template="skin-9"/>
        <hr />
        <module type="layouts" template="posts/skin-1"/>
        <hr />
        <module type="layouts" template="posts/skin-2"/>
        <hr />
        <module type="layouts" template="posts/skin-3"/>
        <hr />
        <module type="layouts" template="posts/skin-4"/>
        <hr />
        <module type="layouts" template="posts/skin-5"/>
        <hr />
        <module type="layouts" template="posts/skin-6"/>
    </div>

<?php include template_dir() . "footer.php"; ?>