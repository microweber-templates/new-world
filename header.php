<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" <?php print lang_attributes(); ?>>

<head>

    <title>{content_meta_title}</title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta property="og:title" content="{content_meta_title}"/>
    <meta name="keywords" content="{content_meta_keywords}"/>
    <meta name="description" content="{content_meta_description}"/>
    <meta property="og:type" content="{og_type}"/>
    <meta property="og:url" content="{content_url}"/>
    <meta property="og:image" content="{content_image}"/>
    <meta property="og:description" content="{og_description}"/>
    <meta property="og:site_name" content="{og_site_name}"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap">
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/fonts/fontawesome-free-5.15.4-web/css/all.css"/>
    <script>
        mw.require('icon_selector.js');
        mw.lib.require('bootstrap5js');
        mw.lib.require('bootstrap_select');
        mw.lib.require('collapse_nav');

        mw.iconLoader()
            .addIconSet('materialDesignIcons')
            .addIconSet('fontAwesome')
            .addIconSet('iconsMindLine')
            .addIconSet('iconsMindSolid')
            .addIconSet('mwIcons')
            .addIconSet('materialIcons');
    </script>

    <script>
        $(document).ready(function () {
            $('.selectpicker').selectpicker();
        });

    </script>

    <?php print get_template_stylesheet(); ?>




    <?php include('template_settings.php'); ?>
</head>
<body class="<?php print helper_body_classes(); ?> <?php print $sticky_navigation; ?> ">

<?php if ($preloader == 'true'): ?>
    <div class="js-ajax-loading">
        <module type="logo" id="header-logo-loading" logo-name="header-logo" class="w-100"/>
    </div>
<?php endif; ?>

<div class="main">
    <div class="navigation-holder <?php print $header_style; ?><?php if ($search_bar == 'false'): ?> no_search_bar <?php endif; ?>">
        <?php if ($header_style == 'header_style_1'): ?>
            <?php include('partials/header/header_style_1.php'); ?>
        <?php elseif ($header_style == 'header_style_2'): ?>
            <?php include('partials/header/header_style_2.php'); ?>
        <?php elseif ($header_style == 'header_style_3'): ?>
            <?php include('partials/header/header_style_3.php'); ?>
        <?php elseif ($header_style == 'header_style_4'): ?>
            <?php include('partials/header/header_style_4.php'); ?>
        <?php elseif ($header_style == 'header_style_5'): ?>
            <?php include('partials/header/header_style_5.php'); ?>
        <?php elseif ($header_style == 'header_style_6'): ?>
            <?php include('partials/header/header_style_6.php'); ?>
        <?php elseif ($header_style == 'header_style_7'): ?>
            <?php include('partials/header/header_style_7.php'); ?>
        <?php elseif ($header_style == 'header_style_8'): ?>
            <?php include('partials/header/header_style_8.php'); ?>
        <?php elseif ($header_style == 'header_style_9'): ?>
            <?php include('partials/header/header_style_9.php'); ?>
        <?php else: ?>
            <?php include('partials/header/header_style_1.php'); ?>
        <?php endif; ?>
    </div>

