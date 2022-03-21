<?php
if($size != 'auto') {
    $size = $size . 'px';
}
?>

<a href="<?php if (!in_live_edit()) {
    print site_url();
} else {
    print 'javascript:mw.drag.module_settings();void(0);';
} ?>">
    <?php if ($logoimage == '' and $text == ''): ?>
        <?php if (is_live_edit()) : ?>
            <span class="mw-logo-no-values"><?php _lang('Logo',"templates/new-world"); ?></span>
        <?php endif; ?>
    <?php else: ?>
    <?php if ($logotype == 'image' or $logotype == false): ?>
    <?php if ($logoimage != '' and $logoimage != false): ?>
         <span class="mw-ui-col-x" style="width: <?php print $size; ?>">

            <img src="<?php print $logoimage; ?>" alt="<?php print htmlentities(addslashes($logo_title)); ?>" style="max-width: 100%; width: <?php print $size; ?>;" class="logo " <?php if (in_live_edit()) {
                print 'onclick="javascript:mw.drag.module_settings();void(0);"';
            } ?>/>
                </span>
    <?php else: ?>
        <span class="mw-logo-no-values"><?php _lang('Logo', "templates/new-world"); ?></span>
    <?php endif; ?>
    <?php endif; ?>
    <?php if ($logotype == 'text' or $logotype == 'both'): ?>
        <script>
            mw.lib.require('fitty');
        </script>
    <?php if ($text == '') {
        $text = 'Logo';
    } ?>
        <span class="mw-ui-col-x">
                <div class="logo logo-dark"><span class="logo-text"><span id="fitty-<?php print $params['id'] ?>-1" style="font-family: <?php print $font_family_safe; ?>;font-size:<?php print $font_size; ?>px;line-height: 66px;"><?php print $text; ?></span></span></div>
                <div class="logo logo-light"><span class="logo-text"><span id="fitty-<?php print $params['id'] ?>-2" style="font-family: <?php print $font_family_safe; ?>;font-size:<?php print $font_size; ?>px;line-height: 66px;"><?php print $text; ?></span></span></div>
            </span>
    <?php endif; ?>
    <?php endif; ?>
</a>
