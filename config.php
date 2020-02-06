<?php

$config = array();
$config['name'] = "New World - Default";
$config['author'] = "Microweber";
$config['version'] = 1.0;
$config['url'] = "http://microweber.com";
$config['standalone_module_skins'] = true;
$config['framework'] = "bootstrap4";

$config['is_default'] = 0; //if you set this parameter the template will be selected on the install screen

//Stylesheet Settings / accept type="color" and type="text" and type="title" and type="delimiter"
$config['stylesheet_compiler']['source_file'] = 'assets/css/less/main.less';
$config['stylesheet_compiler']['css_file'] = 'assets/css/main.css';

$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Default colors');
$config['stylesheet_compiler']['settings']['background'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Background color');
$config['stylesheet_compiler']['settings']['default'] = array('type' => 'color', 'default' => '#0044de', 'label' => 'Default color');
$config['stylesheet_compiler']['settings']['defaultHover'] = array('type' => 'color', 'default' => '#454D64', 'label' => 'Default Hover color');
$config['stylesheet_compiler']['settings']['primary'] = array('type' => 'color', 'default' => '#0044de', 'label' => 'Primary color');
$config['stylesheet_compiler']['settings']['secondary'] = array('type' => 'color', 'default' => '#6aabcf', 'label' => 'Secondary color');
$config['stylesheet_compiler']['settings']['dark'] = array('type' => 'color', 'default' => '#3f4043', 'label' => 'Dark color');
$config['stylesheet_compiler']['settings']['light'] = array('type' => 'color', 'default' => '#f4f4f4', 'label' => 'Light color');

$config['stylesheet_compiler']['settings'][] = array('type' => 'delimiter');

$config['stylesheet_compiler']['settings']['textDark'] = array('type' => 'color', 'default' => '#3f4043', 'label' => 'Text Dark');
$config['stylesheet_compiler']['settings']['textLight'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Text Light');
$config['stylesheet_compiler']['settings']['silver'] = array('type' => 'color', 'default' => '#f3f3f3', 'label' => 'Silver');
$config['stylesheet_compiler']['settings']['grey'] = array('type' => 'color', 'default' => '#bfbfbf', 'label' => 'Grey');

$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Font Settings');

$config['stylesheet_compiler']['settings']['fontFamily'] = array('type' => 'font_selector', 'default' => 'lato', 'label' => 'Choose font for your site');
$config['stylesheet_compiler']['settings']['fontFamily']['options'] = array('lato' => 'Lato');

$config['stylesheet_compiler']['settings']['bodyFontSize'] = array('type' => 'text', 'default' => '16px', 'label' => 'Body Font Size');

$config['stylesheet_compiler']['settings']['hr'] = array('type' => 'dropdown_background_image_x', 'default' => "'../img/hr.svg'", 'label' => 'Choose your prefered delimeter');
$config['stylesheet_compiler']['settings']['hr']['options'] = array("'../img/hr.svg'" => 'Wave', "'../img/hr-zigzag.svg'" => 'Zig Zag', "'../img/hr-line.svg'" => 'Line', "'../img/hr-none.svg'" => 'None');


//Stylesheet Settings / accept type="dropdown" and type="text" and type="title" and type="delimiter"
$config['template_settings'][] = array('type' => 'title', 'label' => 'Header Options');

$config['template_settings']['sticky_navigation'] = array('type' => 'dropdown', 'default' => 'sticky-nav', 'label' => 'Sticky Sidebar');
$config['template_settings']['sticky_navigation']['options'] = array('sticky-nav' => 'Yes', '' => 'No');

$config['template_settings']['preloader'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Turn on preloader');
$config['template_settings']['preloader']['options'] = array('true' => 'Yes', 'false' => 'No');

$config['template_settings']['header_posts'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Show posts button in Header');
$config['template_settings']['header_posts']['options'] = array('true' => 'Yes', 'false' => 'No');

$config['template_settings']['header_search'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Show search in Header');
$config['template_settings']['header_search']['options'] = array('true' => 'Yes', 'false' => 'No');

$config['template_settings']['header_profile_link'] = array('type' => 'dropdown', 'default' => 'true', 'label' => 'Show Profile link in Header');
$config['template_settings']['header_profile_link']['options'] = array('true' => 'Yes', 'false' => 'No');

$config['template_settings']['top_nav'] = array('type' => 'dropdown', 'default' => 'false', 'label' => 'Show Top Navigation');
$config['template_settings']['top_nav']['options'] = array('true' => 'Yes', 'false' => 'No');

$config['template_settings'][] = array('type' => 'delimiter');

$config['template_settings'][] = array('type' => 'title', 'label' => 'Footer Options');

$config['template_settings']['footer'] = array('type' => 'dropdown', 'default' => 'true', 'label' => 'Turn on Footer for the website', 'help' => 'You can hide the footer from your website');
$config['template_settings']['footer']['options'] = array('true' => 'Yes', 'false' => 'No');

$config['template_settings']['shopping_cart'] = array('type' => 'dropdown', 'default' => 'true', 'label' => 'Turn on Shopping cart in header', 'help' => 'You can hide the shopping cart button from your website header');
$config['template_settings']['shopping_cart']['options'] = array('true' => 'Yes', 'false' => 'No');


//Layouts Padding Top & Bottom classes definiton
$config['layouts_css_classes'] = [];
$config['layouts_css_classes']['padding-top']['none'] = 'p-t-0';
$config['layouts_css_classes']['padding-top'][1] = 'p-t-10';
$config['layouts_css_classes']['padding-top'][2] = 'p-t-20';
$config['layouts_css_classes']['padding-top'][3] = 'p-t-30';
$config['layouts_css_classes']['padding-top'][4] = 'p-t-40';
$config['layouts_css_classes']['padding-top'][5] = 'p-t-50';
$config['layouts_css_classes']['padding-top'][6] = 'p-t-60';
$config['layouts_css_classes']['padding-top'][7] = 'p-t-70';
$config['layouts_css_classes']['padding-top'][8] = 'p-t-80';
$config['layouts_css_classes']['padding-top'][9] = 'p-t-90';
$config['layouts_css_classes']['padding-top'][10] = 'p-t-100';
$config['layouts_css_classes']['padding-top'][15] = 'p-t-150';
$config['layouts_css_classes']['padding-top'][20] = 'p-t-200';
$config['layouts_css_classes']['padding-top'][25] = 'p-t-250';
$config['layouts_css_classes']['padding-top'][30] = 'p-t-300';

$config['layouts_css_classes']['padding-bottom']['none'] = 'p-b-0';
$config['layouts_css_classes']['padding-bottom'][1] = 'p-b-10';
$config['layouts_css_classes']['padding-bottom'][2] = 'p-b-20';
$config['layouts_css_classes']['padding-bottom'][3] = 'p-b-30';
$config['layouts_css_classes']['padding-bottom'][4] = 'p-b-40';
$config['layouts_css_classes']['padding-bottom'][5] = 'p-b-50';
$config['layouts_css_classes']['padding-bottom'][6] = 'p-b-60';
$config['layouts_css_classes']['padding-bottom'][7] = 'p-b-70';
$config['layouts_css_classes']['padding-bottom'][8] = 'p-b-80';
$config['layouts_css_classes']['padding-bottom'][9] = 'p-b-90';
$config['layouts_css_classes']['padding-bottom'][10] = 'p-b-100';
$config['layouts_css_classes']['padding-bottom'][15] = 'p-b-150';
$config['layouts_css_classes']['padding-bottom'][20] = 'p-b-200';
$config['layouts_css_classes']['padding-bottom'][25] = 'p-b-250';
$config['layouts_css_classes']['padding-bottom'][30] = 'p-b-300';

$config['data-fields-product'] = array();
$config['data-fields-product'][] = array(
    'title' => 'Label',
    'name' => 'label',
    'type' => 'text'
);
$config['data-fields-product'][] = array(
    'title' => 'Label Color',
    'name' => 'label-color',
    'type' => 'color'
);
