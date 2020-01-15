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


<div class="edit main-content" rel="content" field="new-world_content">

    <module type="layouts" template="skin-2"/>
    <module type="layouts" template="skin-69"/>
    <module type="layouts" template="diagonal-bottom" data-data-orientation="reverse"/>

    <module type="layouts" template="skin-68"/>
    <module type="layouts" template="diagonal-bottom" data-data-orientation="reverse"/>

    <module type="layouts" template="skin-67"/>
</div>

<?php include template_dir() . "footer.php"; ?>
