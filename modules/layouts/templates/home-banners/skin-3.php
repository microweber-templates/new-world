<?php

/*

type: layout

name: Home Vimeo Video Banner

position: 2

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-0';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';

$vimeo_url = get_option('vimeo_url', $params['id']);
if ($vimeo_url) {
    $vimeo_url = $vimeo_url;
} elseif (isset($params['data-vimeo-url'])) {
    $vimeo_url = $params['data-vimeo-url'];
} else {
    $vimeo_url = '22439234';
}
?>
<script>
    $(document).ready(function () {
        $('.js-play-video', '#<?php echo $params['id']; ?>').on('click', function () {
            var url = $('.js-video', '#<?php echo $params['id']; ?>').attr('src');

            var regEx = /([?&]z)=([^#&]*)/g;
            var newurl = url.replace('autoplay=0', 'autoplay=1');

            $('.js-video', '#<?php echo $params['id']; ?>').attr('src', newurl);
            $('.info-holder', '#<?php echo $params['id']; ?>').hide('slow');

        });
    });
</script>
<section class="section-2 js-header-transparent <?php print $layout_classes; ?>">
    <div class="background-image-holder d-flex w-100">
        <div class="vimeo-bg-wrapper">
            <module type="video" autoplay="true" url="https://vimeo.com/<?php print $vimeo_url; ?>"/>
        </div>

        <div class="w-100 align-self-center text-center info-holder allow-drop  edit safe-mode" field="layout-home-banners-skin-3-<?php print $params['id'] ?>" rel="module">
            <h4><?php _lang("An amazing video", "templates/new-world"); ?></h4>
            <h1><?php _lang("shooted in Bulgaria", "templates/new-world"); ?></h1>

        </div>

    </div>
</section>
