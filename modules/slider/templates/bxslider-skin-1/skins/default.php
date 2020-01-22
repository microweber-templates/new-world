<div class="img-holder center" style="background-image: url('<?php print thumbnail($slide['images'][0], 1920, 760); ?>');">
    <div class="container info-holder">
        <h1 class="m-b-20"><?php echo $slide['primaryText']; ?></h1>
        <p><?php echo $slide['secondaryText']; ?></p>

        <?php if ($slide['seemoreText']): ?>
            <div class="button center m-t-30">
                <a class="btn btn-primary" href="<?php if (isset($slide['url'])) {
                    print $slide['url'];
                } ?>"><?php print $slide['seemoreText'] ?></a>
            </div>
        <?php endif; ?>
    </div>
</div>