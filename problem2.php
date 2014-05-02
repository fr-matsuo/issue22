<?php
$array = array('a','b','c');

//配列の要素数
$length = count($array);

//arrayの逆順
$reversedArray = array_reverse($array);

printf("Reversed\n");
for ($i = 0; $i < $length; $i++) {
    printf("%s\t",$reversedArray[$i]);
}
printf("\n");

//ランダムに一つ取り出して出力
$randKey = array_rand($array);

printf("Random Element:\n%s\n", $array[$randKey]);

//ランダム順に出力
$randArray = $array;
shuffle($randArray);

printf("Random Number:\n");
for ($i = 0; $i < $length; $i++) {
    printf("%s\n",$randArray[$i]);
}
?>
