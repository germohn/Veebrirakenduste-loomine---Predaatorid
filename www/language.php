<?php
$lang=$_COOKIE['lang'];
$et = 'et';
$en = 'en';

if(isset($lang)){
    if ($lang == $et){
        include 'lang.et.php';
    }
    else if ($lang == $en){
        include  'lang.en.php';
    }
    else {
        include  'lang.et.php';
    }
} else {
    include  'lang.et.php';
}
?>