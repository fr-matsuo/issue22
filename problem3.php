<?php
$str="abcdefgaabbacd";

//aの数
$a_num      = substr_count($str, 'a');
//abの並びの数
$ab_num     = substr_count($str, 'ab');
//文字列の長さ
$str_length = mb_strlen($str);

//出力
printf("'a'\t:%d\n", $a_num);
printf("'ab'\t:%d\n", $ab_num);
printf("length\t:%d\n", $str_length);
?>
