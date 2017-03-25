<?php
if (isset($_GET['lang'])){
    $lang = $_GET['lang'];
    if ($lang == 'et')
    {
        setcookie("lang", "et", time() + 3600*24*30);
        header('Location: index.php');
    }
    else if ($lang == 'en'){
        setcookie("lang", "en", time()+3600*24*30);
        header('Location: index.php');
    }
}



else{
    //dosmth
}
?>