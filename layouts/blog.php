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
        <module type="blog" />
    </div>

<?php include template_dir() . "footer.php"; ?>
