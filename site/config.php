<?php
    $_PATHS['root'] = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR;
    $_PATHS['include_root'] = $_PATHS['root'] . "site/";
    $_PATHS['link'] = explode("www",$_PATHS['root'])[1] . "site/";


    $_PATHS['php'] = $_PATHS['include_root'] . "php/";
    $_PATHS['css'] = $_PATHS['link'] . "css/";
    $_PATHS['js'] = $_PATHS['link'] . "js/";
    $_PATHS['db'] = $_PATHS['include_root'] . "database/";

    $cssPath = $_PATHS['include_root'] . "css/";
    $jsPath = $_PATHS['include_root'] . "js/";

    $css = scandir($cssPath);
    foreach($css as $file) {
        $_PATHS[$file] = $_PATHS['css'] . $file;
    }

    $js = scandir($jsPath);
    foreach($js as $file) {
        $_PATHS[$file] = $_PATHS['js'] . $file;
    }

    $php = scandir($_PATHS['php']);
    foreach($php as $file) {
        $_PATHS[$file] = $_PATHS['php'] . $file;
    }

    $common = scandir($_PATHS['include_root'] . "common/");
    foreach($common as $file) {
        $_PATHS[$file] = $_PATHS['include_root'] . "common/" . $file;
    }

    $database = scandir($_PATHS['db']);
    foreach($database as $file) {
        $_PATHS[$file] = $_PATHS['db'] . $file;
    }

    $_PATHS['image'] = $_PATHS['link'] . "images/";

    $_PATHS['font-varela'] = "https://fonts.googleapis.com/css?family=Varela+Round";
    $_PATHS['jquery'] = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js";
    $_PATHS['tinymce'] = "https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=d6pd00vz5b8iwawywnsddp7hgkfvmw7ozlewa1diihifo621";
?>
