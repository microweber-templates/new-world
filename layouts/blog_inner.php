<?php include template_dir() . "header.php"; ?>
    <div class="main-content" id="blog-content-<?php print CONTENT_ID; ?>">
        <?php
        $post = get_content_by_id(CONTENT_ID);
        $picture = get_picture($post['id']);
        if (!$picture) {
            $picture = template_url() . 'assets/img/sections/bg.jpg';
        }

        $itemData = content_data($post['id']);
        $itemTags = content_tags($post['id']);

        if (!isset($itemData['post-blockquote'])) {
            $itemData['post-blockquote'] = '';
        }
        if (!isset($itemData['post-blockquote-author'])) {
            $itemData['post-blockquote-author'] = '';
        }
        if (!isset($itemData['post-blockquote-cup'])) {
            $itemData['post-blockquote-cup'] = '';
        }

        ?>

        <section class="section-19">
            <div class="container">
                <div class="background-image-holder cuted d-flex" style="background-image: url('<?php print $picture; ?>');">
                    <div class="row  w-100 m-0 align-self-end">
                        <div class="col-lg-6">
                            <div class="d-flex w-100 h-100">
                                <div class="w-100 align-self-end text-left info-holder allow-drop">
                                    <h2 class="m-b-30"><?php echo $post['title']; ?></h2>
                                    <h4><?php echo date('d M Y', strtotime($post['updated_at'])); ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex w-100 h-100">
                                <div class="w-100 align-self-end text-left info-holder allow-drop">
                                    <div class="stamp">
                                        <blockquote class="safe-element">
                                            <?php echo $itemData['post-blockquote']; ?>
                                            <div class="testimonial">
                                                <span class="name"><?php echo $itemData['post-blockquote-author']; ?></span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="socials-holder align-self-center">
                        <module type="social_links" template="skin-1" id="blog_post_socials"/>
                    </div>
                </div>
            </div>
        </section>

        <div class="blog-inner-page" id="blog-content-<?php print CONTENT_ID; ?>">
            <div class="container m-t-100 m-b-50">
                <div class="row">
                    <div class="col-xl-6 mx-auto">
                        <div class="description edit dropcap" field="content" rel="content">
                            <?php
                            include(template_dir() . 'elements' . DS . 'paragraph-lead.php');
                            include(template_dir() . 'elements' . DS . 'paragraph.php');
                            include(template_dir() . 'elements' . DS . 'titles' . DS . 'title-2.php');
                            include(template_dir() . 'elements' . DS . 'paragraph.php');
                            include(template_dir() . 'elements' . DS . 'titles' . DS . 'title-3.php');
                            include(template_dir() . 'elements' . DS . 'paragraph.php');
                            include(template_dir() . 'elements' . DS . 'blockquote.php');
                            include(template_dir() . 'elements' . DS . 'titles' . DS . 'title-2.php');
                            include(template_dir() . 'elements' . DS . 'paragraph.php');
                            include(template_dir() . 'elements' . DS . 'ordered-list.php');
                            include(template_dir() . 'elements' . DS . 'paragraph.php');
                            include(template_dir() . 'elements' . DS . 'unordered-list.php');
                            ?>
                        </div>

                        <div class="border-top-bottom">
                            <div class="m-t-40 m-b-40 row">
                                <div class="col-sm-4">
                                    <?php if ($itemTags): ?>
                                        <div class="posts-tags">
                                            <?php foreach ($itemTags as $tag): ?>
                                                <span class="badge badge-primary"><?php echo $tag; ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-8">
                                    <module type="sharer" id="post-bottom-sharer" template="skin-1" class="float-right" style="xwidth: calc(100% - 45px);"/>
                                    <div class="float-right">Share</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="edit safe-mode nodrop" field="blog-inner" rel="page">
            <module type="layouts" template="skin-14"/>
            <module type="layouts" template="skin-35"/>
        </div>
    </div>
<?php include template_dir() . "footer.php"; ?>