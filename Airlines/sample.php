<?php
session_start();
//get previous page url
$qs = $_SERVER['HTTP_REFERER']; 
 parse_str($qs, $qs_arr);
 //$arr =  array();
 //foreach ( $qs_arr as $arr ) 
  foreach ( $qs_arr as $key => $value ) 
 //echo $arr;
echo "$key : $value ";

?>