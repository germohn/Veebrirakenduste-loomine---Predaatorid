<?php
//error_reporting(E_ALL);
//var_dump($_SERVER);
$post_data = $_POST['data'];
if (!empty($post_data)) {
    $dir = 'server';
    $file = 'data';
    $filename ='server/data.txt';
    $handle = fopen($filename, "w");
    fwrite($handle, $post_data);
    fclose($handle);

}
?>