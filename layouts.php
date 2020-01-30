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
    <module type="layouts" template="home-banners/skin-1"/>
    <module type="layouts" template="pricing/skin-1"/>
    <module type="layouts" template="cta/skin-2"/>
</div>

<?php include template_dir() . "footer.php"; ?>
