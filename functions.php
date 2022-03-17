<?php

autoload_add_namespace(__DIR__ . '/src/', 'MicroweberPackages\\Template\\NewWorld\\');

api_expose('theme_colors_palette_css');

function theme_colors_palette_css($params = false)
{
    return include __DIR__ . DS . 'styles.php';
}

api_expose_admin('theme_css_styles_save');

function theme_css_styles_save($params = false)
{
    $option = array();
    $option['option_value'] = json_encode($params);
    $option['option_key'] = 'new-world_theme_less_vars';
    $option['option_group'] = 'template';
    save_option($option);
}


api_expose('theme_css_styles_get_url');

function theme_css_styles_get_url($params = false)
{


    return template_url() . 'assets/css/main.css';
}


function theme_css_styles_get_less_vars()
{


    $less_file = template_dir() . 'assets/css/less/vars.less';
    $css_file = template_dir() . 'assets/css/main.css';

    $url_root = template_url();

    try {
        $parser = new Less_Parser();
        $parser->parseFile($less_file, $url_root);
        $css = $parser->getCss();
        $variables = $parser->getVariables();
        return $variables;
    } catch (Exception $e) {
        $error_message = $e->getMessage();
        print $error_message;
        return;
    }


}
