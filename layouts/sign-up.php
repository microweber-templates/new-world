<?php

/*

type: layout
content_type: static
name: Sign up
position: 8
description: Sign up layout

*/


?>
<?php include template_dir() . "header.php"; ?>

<style>
    .navigation .navbar-header>.menu,
    .navigation .navbar-header > .member-nav {
        visibility: hidden !important;
        opacity: 0;
    }

    .section-9 .background-image-holder:before {
        content: '';
        display: block;
        position: absolute;
        width: 100%;
        left: 0;
        right: 0;
        top: 0;
        height: 300px;
        background: rgba(244, 244, 244, 1);
        background: -moz-linear-gradient(top, rgba(244, 244, 244, 1) 0%, rgba(244, 244, 244, 1) 44%, rgba(244, 244, 244, 0.72) 77%, rgba(244, 244, 244, 0) 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(244, 244, 244, 1)), color-stop(44%, rgba(244, 244, 244, 1)), color-stop(77%, rgba(244, 244, 244, 0.72)), color-stop(100%, rgba(244, 244, 244, 0)));
        background: -webkit-linear-gradient(top, rgba(244, 244, 244, 1) 0%, rgba(244, 244, 244, 1) 44%, rgba(244, 244, 244, 0.72) 77%, rgba(244, 244, 244, 0) 100%);
        background: -o-linear-gradient(top, rgba(244, 244, 244, 1) 0%, rgba(244, 244, 244, 1) 44%, rgba(244, 244, 244, 0.72) 77%, rgba(244, 244, 244, 0) 100%);
        background: -ms-linear-gradient(top, rgba(244, 244, 244, 1) 0%, rgba(244, 244, 244, 1) 44%, rgba(244, 244, 244, 0.72) 77%, rgba(244, 244, 244, 0) 100%);
        background: linear-gradient(to bottom, rgba(244, 244, 244, 1) 0%, rgba(244, 244, 244, 1) 44%, rgba(244, 244, 244, 0.72) 77%, rgba(244, 244, 244, 0) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4f4f4', endColorstr='#f4f4f4', GradientType=0);
    }
</style>

<div class="edit main-content bg-silver" rel="content" field="new-world_content">
    <module type="layouts" template="skin-37"/>
    <module type="layouts" template="diagonal-bottom" data-orientation="reverse" data-color="silver"/>
    <module type="layouts" template="skin-52" style="margin-top: -245px;"/>
    <module type="layouts" template="skin-35"/>
</div>

<?php include template_dir() . "footer.php"; ?>
