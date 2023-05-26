<?php
/*

type: layout
content_type: post
name: Title with image
position: 3
description: Title with image
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
                        <h3>Awesome Title Is Here</h3>
                        <div class="text-center" style="margin-bottom: 40px; padding: 100px; margin: 40px 0; background-color: #f5f5f5;">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M180-120q-24 0-42-18t-18-42v-600q0-24 18-42t42-18h600q24 0 42 18t18 42v600q0 24-18 42t-42 18H180Zm0-60h600v-600H180v600Zm56-97h489L578-473 446-302l-93-127-117 152Zm-56 97v-600 600Z"/></svg>
                        </div>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>

    <?php include template_dir() . "footer.php"; ?>
