<?php

/*

type: layout
content_type: dynamic
name: Contacts
position: 4
description: Contacts

*/


?>
<?php include template_dir() . "header.php"; ?>

    <div class="edit main-content" rel="content" field="new-world_content">
        <module type="layouts" template="skin-9"/>
        <module type="layouts" template="contacts/skin-2"/>
        <module type="layouts" template="contacts/skin-3"/>
        <module type="layouts" template="contacts/skin-4"/>
    </div>

<?php include template_dir() . "footer.php"; ?>