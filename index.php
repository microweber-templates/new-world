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
    <module type="layouts" template="home-sliders/skin-1"/>
    <module type="layouts" template="skin-2"/>
    <module type="layouts" template="features/skin-1"/>
    <module type="layouts" template="skin-3"/>
    <module type="layouts" template="features/skin-6"/>
    <module type="layouts" template="videos/skin-5"/>
    <module type="layouts" template="skin-3"/>

    <module type="layouts" template="info-blocks/skin-1"/>
    <module type="layouts" template="info-blocks/skin-2"/>
    <module type="layouts" template="info-blocks/skin-3"/>
    <module type="layouts" template="info-blocks/skin-4"/>
    <module type="layouts" template="info-blocks/skin-5"/>

</div>

<?php include template_dir() . "footer.php"; ?>
