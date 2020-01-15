<?php include template_dir() . "header.php"; ?>


<?php
$keywords = '';
if (isset($_GET['keywords'])) {
    $keywords = htmlspecialchars($_GET['keywords']);
}

$searchType = '';
if (isset($_GET['search-type'])) {
    $searchType = htmlspecialchars($_GET['search-type']);
}
?>


<section>
    <div class="container">
        <?php if ($searchType == 'blog' OR $searchType == ''): ?>
            <h4><em><?php _e('Results found mentioning'); ?></em> &ldquo;<?php print $keywords; ?>&rdquo;</h4>
            <br/>
            <br/>
            <module type="posts" limit="18" keyword="<?php print $keywords; ?>" description-length="70"/>
        <?php endif; ?>
    </div>
</section>


<?php include template_dir() . "footer.php"; ?>
