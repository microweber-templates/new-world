<?php include template_dir() . "header.php"; ?>
<div class="main-content" id="blog-content-<?php print CONTENT_ID; ?>">
<?php
$post = get_content_by_id(CONTENT_ID);
$picture = get_picture(CONTENT_ID);

if (!$picture) {
    $picture = '';
}

$itemData = content_data($post['id']);
$itemTags = content_tags($post['id']);
?>

<?php if ($picture != '' AND $picture != false): ?>
    <section class="section-19">
        <div class="container">
            <module type="pictures" content-id="<?php print CONTENT_ID; ?>" template="blog" />

                <?php /*


             <div class="background-image-holder d-flex" style="background-image: url('<?php print $picture; ?>');">


 <div class="row w-100 m-0 align-self-center">
                            <div class="col-lg-12">
                                <div class="d-flex w-100 h-100">
                                    <div class="w-100 align-self-center info-holder text-white">
                                        <h1 class="m-b-30"><?php echo $post['title']; ?></h1>
                                        <h5><?php echo date('d M Y', strtotime($post['updated_at'])); ?></h5>
                                    </div>
                                </div>
                            </div>*/ ?>
            </div>
        </div>
    </div>
    </section>
<?php else: ?>
    <?php /*
            <section class="section-19">
                <div class="container">
                    <div class="text-holder d-flex bg-silver">
                        <div class="row w-100 m-0 align-self-center">
                            <div class="col-lg-12">
                                <div class="d-flex w-100 h-100">
                                    <div class="w-100 align-self-center info-holder">
                                        <h1 class="m-b-30 text-dark"><?php echo $post['title']; ?></h1>
                                        <h5 class="text-primary"><?php echo date('d M Y', strtotime($post['updated_at'])); ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>*/ ?>
<?php endif; ?>

    <section class="section">
        <div class="container">
            <div class="text-holder text-center">
                <h1 class="m-b-30 text-dark edit plain-text" field="title" rel="content"><?php echo $post['title']; ?></h1>
            </div>
            <div class="text-center">
                <h6 class="text-dark"><?php echo date('d M Y', strtotime($post['updated_at'])); ?></h6>
            </div>
        </div>
    </section>

    <div class="blog-inner-page" id="blog-content-<?php print CONTENT_ID; ?>">
        <div class="container  m-b-50">
            <div class="row">
                <div class="col-xl-6 mx-auto">
                    <div class="description edit dropcap typography-area" field="content" rel="content">
                        <?php
                        //element_display('paragraph-highlight.php');
                        //element_display('paragraph-lead.php');
//                        element_display('paragraph.php');
                        //element_display('titles' . DS . 'title-2.php');
                        include(elements_path() . DS . 'paragraph-highlight.php');
                        //element_display('blockquote.php');
                        //element_display('titles' . DS . 'title-3.php');
                        //element_display('paragraph.php');
                        // element_display('ordered-list.php');
                        //element_display('paragraph.php');
                        //element_display('unordered-list.php');
                        ?>
                    </div>



                    <div class="border-top-bottom">
                        <div class="m-t-40 m-b-40 row">
                            <div class="col-sm-4">
                                <?php if ($itemTags): ?>
                                    <div class="posts-tags">
                                        <?php foreach ($itemTags as $tag): ?>
                                            <a href="<?php print content_link(PAGE_ID); ?>/tags:<?php print url_title($tag) ?>"><span class="badge badge-primary"><?php echo $tag; ?></span></a>
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

    <div class="edit safe-mode nodrop blog-inner-page" field="blog-inner" rel="page">
        <module type="comments" template="default"/>
    </div>
    </div>
<?php include template_dir() . "footer.php"; ?>
