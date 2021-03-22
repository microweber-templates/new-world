<?php

/*

  type: layout
  content_type: static
  name: typography
  position: 26
  description: New Typography for Drag N drop

*/

?>
<?php include template_dir() . "header.php"; ?>
<div class="edit main-content" rel="content" field="new-world_content">
    <?php
    $module_layouts = module_templates('layouts');
    $i=0;
    foreach ($module_layouts as $module) {
        if (strpos($module['layout_file'], 'typography/') !== false) {
            $i++;
            print 'Typography-'.$i.'<module type="layouts"  template="' . ($module['layout_file']) . '" template_order_number="'.$i.'" id="mod-' . md5($module['name']) . '" />';
        }
    }
    ?>
</div>

<?php include template_dir() . "footer.php"; ?>
