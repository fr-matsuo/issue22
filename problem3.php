<?php
$str="abcdefgaabbacd";

//aの数
$a_num      = substr_count($str, 'a');
//abの並びの数
$ab_num     = substr_count($str, 'ab');
//文字列の長さ
$str_length = mb_strlen($str);

//出力
printf("a_num=%d\nab_num=%d\nstr_length=%d\n", $a_num, $ab_num, $str_length);
?>
