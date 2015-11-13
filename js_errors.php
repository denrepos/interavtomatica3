<?php

$str = "\r\n".date("Y-m-d H:i:s").'  ---------------------------'."\r\n";

$str .= $_SERVER["HTTP_USER_AGENT"]."\r\n";

foreach ($_POST as $key => $val) {
    $str .=  $key .'  =  '. $val."\r\n";
}


file_put_contents('js.log',$str,FILE_APPEND);

echo $str;