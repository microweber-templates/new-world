<?php include modules_path() . 'editor' . DS . 'template_settings' . DS . 'generated_vars.php'; ?>

<?php if (isset($params['data-parent-module-id']) AND $params['data-parent-module-id'] == 'template_settings_admin'): ?>
    <module type="editor/template_settings"/>

<hr>

    <module type="editor/stylesheet_compiler"/>

<?php endif; ?>
