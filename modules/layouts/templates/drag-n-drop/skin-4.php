<?php

/*

type: layout

name: Two text columns with icon and title

position: 4

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section <?php print $layout_classes; ?> edit safe-mode " field="layout-drag-n-drop-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row d-flex justify-content-center">
           <div class="col-md-5 col d-flex">
               <div class="col-md-6 col">
                   <div class="mb-3"><i class="mdi mdi-earth" style="font-size: 25px;"></i></div>
                   <h6 class="mb-3 font-weight-bold">Awesome title</h6>
                   <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
               </div>

               <div class="col-md-6 col">
                   <div class="mb-3"><i class="mdi mdi-earth" style="font-size: 25px;"></i></div>
                   <h6 class="mb-3 font-weight-bold">Awesome title</h6>
                   <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
               </div>
           </div>
        </div>
    </div>
</section>
