<!--<meta http-equiv="refresh" content="900">-->
<?php
/*
$char = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789=+-[]{}()&$%@#!.";
$gen = substr(str_shuffle($char),0,6);
$link = "<script>window.open('http://webnet.ml/search/r?search=$gen&search_button=Search+Now')</script>";
echo $link;
*/
?>
<meta http-equiv="refresh" content="10"> 
<?php
// credits Sempitaernal#0521 -> discord
    $file = "words_alpha.txt";
    $file_arr = file('words_alpha.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $num_lines = count($file_arr);
    $last_arr_index = $num_lines - 1;
    $rand_index = rand(0, $last_arr_index);
    $gen = $file_arr[$rand_index];
    $link =  "<script>window.open('http://webnet.ml/search/r?search=$gen&search_button=Search+Now')</script>";
echo $link;
?>
