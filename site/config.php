<?php
    $_PATHS['root'] = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR;
    $_PATHS['include_root'] = $_PATHS['root'] . "site/";
    $_PATHS['link'] = explode("www",$_PATHS['root'])[1] . "site/";
    $_PATHS['image'] = $_PATHS['link'] . "images/";
    $_PATHS['db'] = $_PATHS['include_root'] . "database/";
    $_PATHS['php'] = $_PATHS['include_root'] . "php/";
    $_PATHS['css'] = $_PATHS['link'] . "css/";
    $_PATHS['js'] = $_PATHS['link'] . "js/";
?>
