<?php

/*

  type: layout
  content_type: static
  name: Home
  position: 11
  description: Home layout

*/

?>
<?php include template_dir() . "header.php"; ?>


<div class="edit main-content" rel="content" field="content">
    <module type="layouts" template="posts/skin-1"/>
    <module type="layouts" template="posts/skin-2"/>
    <module type="layouts" template="posts/skin-3"/>
    <module type="layouts" template="posts/skin-4"/>
    <module type="layouts" template="posts/skin-5"/>
</div>

<?php include template_dir() . "footer.php"; ?>
