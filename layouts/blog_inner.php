<?php include template_dir() . "header.php"; ?>
<div class="main-content" id="blog-content-<?php print CONTENT_ID; ?>">
<?php
$post = get_content_by_id(CONTENT_ID);
$picture = get_picture(CONTENT_ID);

if (!$picture) {
    $picture = '';
}
$itemData = [];
if($post and isset($post['id'])){
    $itemData = content_data($post['id']);
}

$itemTags = [];
if($post and isset($post['id'])){
    $itemTags = content_tags($post['id']);
}

$post_title = 'Title';
$post_updated_at = date('Y-m-d His');

if(isset($post['title'])){
    $post_title = $post['title'];
}


if(isset($post['updated_at'])){
    $post_updated_at = $post['updated_at'];
}

?>

<?php if ($picture != '' AND $picture != false): ?>
    <section class="section-19">
        <div class="container">
            <div class="background-image-holder d-flex" style="background-image: url('<?php print $picture; ?>');">
                <?php /*<div class="row w-100 m-0 align-self-center">
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
                <h1 class="m-b-30 text-dark"><?php echo $post_title ; ?></h1>
            </div>
        </div>
    </section>

    <div class="blog-inner-page" id="blog-content-<?php print CONTENT_ID; ?>">
        <div class="container m-t-30 m-b-50">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="description edit dropcap typography-area" field="content" rel="content">
                        <?php

//                        element_display('paragraph');
//                        element_display('paragraph');
//                        element_display('unordered-list');
//                        element_display('paragraph');
//                        element_display('blockquote');
//                        element_display('paragraph');
//                        element_display('paragraph');

                        //include(template_dir() . 'elements' . DS . 'paragraph-highlight.php');
                        //include(template_dir() . 'elements' . DS . 'paragraph-lead.php');
                        //include(template_dir() . 'elements' . DS . 'paragraph.php');
                        //include(template_dir() . 'elements' . DS . 'titles' . DS . 'title-2.php');
                        //include(template_dir() . 'elements' . DS . 'paragraph.php');
                        //include(template_dir() . 'elements' . DS . 'blockquote.php');
                        //include(template_dir() . 'elements' . DS . 'titles' . DS . 'title-3.php');
                        //include(template_dir() . 'elements' . DS . 'paragraph.php');
                        // include(template_dir() . 'elements' . DS . 'ordered-list.php');
                        //include(template_dir() . 'elements' . DS . 'paragraph.php');
                        //include(template_dir() . 'elements' . DS . 'unordered-list.php');
                        ?>
                    </div>

                    <div class="text-end text-right m-b-20">
                        <h6 class="text-dark"><?php echo date('d M Y', strtotime($post_updated_at)); ?></h6>
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
                                <module type="sharer" id="post-bottom-sharer" template="skin-1" class="float-end " style="xwidth: calc(100% - 45px);"/>
                                <div class="float-end ">Share</div>
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
