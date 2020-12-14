<?php

/*

type: layout

name: Blog

description: Blog inner

*/

?>

<?php if (is_array($data)): ?>

            <?php foreach ($data as $count => $item): ?>
            <div class="background-image-holder d-flex" style="background-image: url('<?php print $item['filename']; ?>');">

             <?php break; //1 image until we make slider  ?>
             <?php endforeach; ?>

<?php endif; ?>