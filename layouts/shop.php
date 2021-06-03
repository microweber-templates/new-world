<?php

/*

type: layout
content_type: dynamic
name: Shop
is_shop: y
description: Showcase shop items in a sylish grid arrangement.
position: 2
*/
?>

<?php include template_dir() . "header.php"; ?>


<div class="container">
   <div class="row">

       <div class="edit" rel="content" field="shop-before-content">
           <module type="layouts" template="skin-9"/>
       </div>

       <div class="row justify-content-between">
           <module type="shop" />
       </div>

       <div class="edit" rel="content" field="shop-after-content">
           <p class="element"></p>
       </div>
   </div>
</div>

<?php include template_dir() . "footer.php"; ?>
