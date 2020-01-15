<?php

/*

type: layout

name: Default

description: Default

*/
?>

<?php
if (!isset($default_content)) {
    $default_content = '';
}

if ($json == false) {
    print lnotif(_e('Click to edit tabs', true));

    return;
}

if (isset($json) == false or count($json) == 0) {
    $json = array(0 => $defaults);
}

$has_default = isset($params['default_content']);

if (function_exists('tab_content') === false) {
    function tab_content($slide, $count, $key, $default_content, $has_default)
    {
        if (isset($slide[$key]) and trim($slide[$key]) != '') {
            return $slide[$key];
        } else {
            if ($has_default) {
                if (isset($default_content) && isset($default_content[$count])) {
                    return $default_content[$count][$key];
                }
            } else {
                if ($key == 'icon') {
                    return '';
                } else {
                    return 'Tab ' . $key . ' ' . $count;
                }
            }
        }
    }
}
?>

<?php if (isset($params['default_content'])) {
    $fname = 'default_content_' . $params['default_content'] . '.php';

    $p = module_templates($config['module']);
    $default_file = $p[0]['directory'] . '../' . $fname;

    if (file_exists($default_file)) {
        include $default_file;
    }
} ?>


<div id="mw-tabs-module-<?php print $params['id'] ?>">
    <div class="tabs">
        <ul id="q-tabs-<?php print $params['id'] ?>" class="nav nav-tabs" role="tablist">
            <?php
            $count = -1;
            foreach ($json as $slide) {
                $count++;
                ?>
                <?php
                $icon = tab_content($slide, $count, 'icon', $default_content, $has_default);
                if (strpos($icon, '</') !== false) {
                    $picon = $icon;
                } else {
                    $picon = 'icon ' . $icon . '';
                }

                $picon = '';
                ?>

                <li role="presentation" <?php if ($count == 0): ?>class="active"<?php endif; ?>>
                    <a href="#tab-<?php print $params['id'] ?><?php print $count ?>" aria-controls="tab-<?php print $params['id'] ?><?php print $count ?>" role="tab" data-toggle="tab" class="<?php print $picon; ?>"><span><?php print tab_content($slide, $count, 'title', $default_content, $has_default); ?></span></a>
                </li>
            <?php } ?>
        </ul>

        <div class="tab-content">
            <?php
            $count = -1;
            foreach ($json as $slide) { ?>
                <?php $count++; ?>
                <div role="tabpanel" class="tab-pane <?php if ($count == 0): ?>active<?php endif; ?>" id="tab-<?php print $params['id'] ?><?php print $count ?>">
                    <div class="edit allow-drop"
                         field="tab-item-<?php print $count ?>"
                         rel="module-<?php print $params['id'] ?>">
                        <div class="element"><?php print tab_content($slide, $count, 'content', $default_content, $has_default); ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>