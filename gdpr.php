<?php

/*

type: layout
content_type: dynamic
name: GDPR
position: 30
description: GDPR

*/


?>
<?php include template_dir() . "header.php"; ?>


<?php
$cookies = [];
foreach ($_COOKIE as $key => $val) {
    if ($key == '_ga') {
        $cookies[$key] = array('name' => 'Google Analytics', 'period' => '1 year');
    } elseif ($key == '__tawkuuid') {
        $cookies[$key] = array('name' => 'Tawk.to', 'period' => '1 year');
    } elseif ($key == 'mw-back-to-live-edit') {
        $cookies[$key] = array('name' => 'Microweber Back to Live edit', 'period' => '1 year');

    } elseif ($key == 'scwCookie') {
        $cookies[$key] = array('name' => 'Cookies Module', 'period' => '1 year');
    } elseif ($key == 'scwCookieHidden') {
        $cookies[$key] = array('name' => 'Cookies Module', 'period' => '1 year');
    } elseif ($key == 'lang') {
        $cookies[$key] = array('name' => 'Language', 'period' => '1 year');

    } else {
        $cookies[$key] = array('name' => '', 'period' => '');
    }
}

dd($cookies);
?>


<?php include template_dir() . "footer.php"; ?>