<?php

/*

type: layout

name: Default

description: Default

*/
?>

<?php if ($action AND $action == 'submit'): ?>
    <?php if (!isset($style) OR $style == '' OR $style == 'btn-default'): ?>
        <button type="submit" id="<?php print $btn_id ?>" class="btn btn-primary">
            <?php print $text; ?>
        </button>
    <?php elseif ($style == '1'): ?>
        <div class="button-1 <?php print $size; ?>" id="<?php print $btn_id ?>">
            <button type="submit"><?php print $text; ?></button>
            <div class="mask"></div>
        </div>
    <?php elseif ($style == '2'): ?>
        <div class="button-2 <?php print $size; ?>" id="<?php print $btn_id ?>">
            <button type="submit"><?php print $text; ?></button>
            <div class="mask"></div>
        </div>
    <?php elseif ($style == '3'): ?>
        <div class="button-3 <?php print $size; ?>" id="<?php print $btn_id ?>">
            <button type="submit"><?php print $text; ?></button>
        </div>
    <?php elseif ($style == '4'): ?>
        <button type="submit" class="button-4 <?php print $size; ?>" id="<?php print $btn_id ?>"><span><?php print $text; ?></span></button>
    <?php elseif ($style == '5'): ?>
        <button type="submit" class="button-5 <?php print $size; ?>" id="<?php print $btn_id ?>"><span><?php print $text; ?></span></button>
    <?php elseif ($style == '6'): ?>
        <div class="button-6 <?php print $size; ?>" id="<?php print $btn_id ?>">
            <button type="submit"><?php print $text; ?></button>
        </div>
    <?php elseif ($style == '7'): ?>
        <button type="submit" class="button-7" id="<?php print $btn_id ?>"><span><?php print $text; ?></span></button>
    <?php elseif ($style == '8'): ?>
        <button type="submit" class="button-8" id="<?php print $btn_id ?>"><span><?php print $text; ?></span></button>
    <?php elseif ($style == '9'): ?>
        <button type="submit" class="button-8 button-red" id="<?php print $btn_id ?>"><span><?php print $text; ?></span></button>
    <?php endif; ?>
<?php else: ?>
    <?php if (!isset($style) OR $style == '' OR $style == 'btn-default'): ?>
        <a id="<?php print $btn_id ?>" href="<?php print $url; ?>" <?php if ($blank) {
            print ' target="_blank" ';
        } ?> class="btn btn-primary">
            <?php print $text; ?>
        </a>
    <?php elseif ($style == '1'): ?>
        <div class="button-1 <?php print $size; ?>" id="<?php print $btn_id ?>">
            <a href="<?php print $url; ?>" <?php if ($blank) {
                print ' target="_blank" ';
            } ?>><?php print $text; ?></a>
            <div class="mask"></div>
        </div>
    <?php elseif ($style == '2'): ?>
        <div class="button-2 <?php print $size; ?>" id="<?php print $btn_id ?>">
            <a href="<?php print $url; ?>" <?php if ($blank) {
                print ' target="_blank" ';
            } ?>><?php print $text; ?></a>
            <div class="mask"></div>
        </div>
    <?php elseif ($style == '3'): ?>
        <div class="button-3 <?php print $size; ?>" id="<?php print $btn_id ?>">
            <a href="<?php print $url; ?>" <?php if ($blank) {
                print ' target="_blank" ';
            } ?>><?php print $text; ?></a>
        </div>
    <?php elseif ($style == '4'): ?>
        <a href="<?php print $url; ?>" <?php if ($blank) {
            print ' target="_blank" ';
        } ?> class="button-4 <?php print $size; ?>" id="<?php print $btn_id ?>"><span><?php print $text; ?></span></a>
    <?php elseif ($style == '5'): ?>
        <a href="<?php print $url; ?>" <?php if ($blank) {
            print ' target="_blank" ';
        } ?> class="button-5 <?php print $size; ?>" id="<?php print $btn_id ?>"><span><?php print $text; ?></span></a>
    <?php elseif ($style == '6'): ?>
        <div class="button-6 <?php print $size; ?>" id="<?php print $btn_id ?>"><a href="<?php print $url; ?>" <?php if ($blank) {
                print ' target="_blank" ';
            } ?>><?php print $text; ?></a></div>
    <?php elseif ($style == '7'): ?>
        <a href="<?php print $url; ?>" <?php if ($blank) {
            print ' target="_blank" ';
        } ?> class="button-7" id="<?php print $btn_id ?>"><span><?php print $text; ?></span></a>
    <?php elseif ($style == '8'): ?>
        <a href="<?php print $url; ?>" <?php if ($blank) {
            print ' target="_blank" ';
        } ?> class="button-8" id="<?php print $btn_id ?>"><span><?php print $text; ?></span></a>
    <?php elseif ($style == '9'): ?>
        <a href="<?php print $url; ?>" <?php if ($blank) {
            print ' target="_blank" ';
        } ?> class="button-8 button-red" id="<?php print $btn_id ?>"><span><?php print $text; ?></span></a>
    <?php endif; ?>
<?php endif; ?>