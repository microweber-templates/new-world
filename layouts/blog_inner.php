<?php
/*

type: layout
content_type: post
name: Title with text
position: 3
description: A simple inner page with title and text

*/
?>


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

<?php if (content_id() > 0) { ?>



<?php } else { ?>

    <div class="container">
        <div class="row px-3" style="padding: 40px;">
            <div class="col-xl-10 p-3 m-5" style="margin: 0 auto;">
                <h3 class="mb-5">Awesome Title Is Here</h3>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                </p>
            </div>
        </div>
    </div>

<?php } ?>

<?php include template_dir() . "footer.php"; ?>
