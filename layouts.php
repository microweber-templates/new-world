<?php

/*

  type: layout
  content_type: static
  name: Layouts
  position: 11
  description: Home layout

*/

?>
<?php include template_dir() . "header.php"; ?>

<div class="main-content edit" rel="content" field="new-world_content">

    <module type="layouts" template="skin-9"/>
    <module type="layouts" template="features/skin-9"/>
    <module type="layouts" template="contacts/skin-2"/>
    <module type="layouts" template="videos/skin-5"/>
    <module type="layouts" template="galleries/skin-3"/>
    <module type="layouts" template="people/skin-1"/>
    <module type="layouts" template="contacts/skin-4"/>
</div>

<?php include template_dir() . "footer.php"; ?>
