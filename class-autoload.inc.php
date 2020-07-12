<?php
spl_autoload_register('myAutoloader');
function myAutoloader($className){
    if (isset($_SERVER['HTTP_HOST']) === TRUE) {
  $host = $_SERVER['HTTP_HOST'];
}
    $url=$host.$_SERVER['REQUEST_URI'];
    if(strpos($url, 'includes') !== false){
        $path="../classes/";
    }else{
        $path="classes/";
    }
    $extension=".class.php";
    require_once $path.$className.$extension;
}
?>
