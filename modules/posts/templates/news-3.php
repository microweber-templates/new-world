<?php

/*

type: layout

name: News 4

description: News 4

*/
?>


<div class="row">
    <div class="col-lg-12 mx-auto">
        <div class="row new-world-news-3">
            <?php if (!empty($data)): ?>
                <div class="col-lg-7 m-b-30">
                    <div class="row">
                        <?php foreach ($data as $key => $item): ?>
                            <?php $itemData = content_data($item['id']); ?>
                            <?php if ($key == 0): ?>

                                <div class="col-12">
                                    <div class="post-big">
                                        <div class="post-holder">
                                            <div class="thumbnail justify-content-bottom align-items-end d-flex flex-cloumns" style="background-image: url('<?php print thumbnail($item['image'], 790, 390, true); ?>');">
                                                <div>
                                                    <small><?php echo date('d M Y', strtotime($item['created_at'])); ?></small>

                                                    <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                                        <a href="<?php print $item['link'] ?>">
                                                            <h3><?php print $item['title'] ?></h3>
                                                        </a>
                                                    <?php endif; ?>

                                                    <a href="<?php print $item['link'] ?>" class="btn btn-primary m-t-10">Read now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endif; ?>

                            <?php if ($key == 1 OR $key == 2): ?>
                                <div class="col-6 d-none d-lg-block">
                                    <div class="row m-b-30">
                                        <div class="col-lg-5">
                                            <div class="post-holder">
                                                <a href="<?php print $item['link'] ?>">
                                                    <img src="<?php print thumbnail($item['image'], 300, 225, true); ?>" alt=""/>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="post-holder">
                                                <small><?php echo date('d M Y', strtotime($item['created_at'])); ?></small>
                                                <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                                    <a href="<?php print $item['link'] ?>">
                                                        <h4 class="m-b-10"><?php print $item['title'] ?></h4>
                                                    </a>
                                                <?php endif; ?>

                                                <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                                    <p class="d-none"><?php print character_limiter($item['description'], 50) ?></p>
                                                <?php endif; ?>


                                                <a href="<?php print $item['link'] ?>" itemprop="url" class="button-8 button-red m-t-10"><span>Read more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="col-lg-5 d-none d-lg-block">
                    <?php foreach ($data as $key => $item): ?>
                        <?php $itemData = content_data($item['id']); ?>
                        <?php if ($key == 3): ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="post-big high">
                                        <div class="post-holder">
                                            <div class="thumbnail justify-content-bottom align-items-end d-flex flex-cloumns" style="background-image: url('<?php print thumbnail($item['image'], 565, 643, true); ?>');">
                                                <div>
                                                    <small><?php echo date('d M Y', strtotime($item['created_at'])); ?></small>

                                                    <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                                        <a href="<?php print $item['link'] ?>">
                                                            <h3><?php print $item['title'] ?></h3>
                                                        </a>
                                                    <?php endif; ?>

                                                    <a href="<?php print $item['link'] ?>" class="btn btn-primary m-t-10">Read now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

