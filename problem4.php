<?php
$array = array(
    1 => 'first',
    2 => 'second',
    3 => 'third'
);

//配列のキーリスト
$array_keys = array_keys($array);
//キーの数
$length     = count($array_keys);

//配列の要素をすべて出力
printf("All Elements\n");
for ($i = 0; $i < $length; $i++) {
    $key = $array_keys[$i];
    printf("array[%s]=%s\n", $key, $array[$key]);
}

//foreachを使って配列のキー要素をすべて出力
printf("All Keys\n");
foreach ($array as $key => $element) {
    printf("key:%s\telement:%s\n", $key, $array[$key]);
}

//キーが奇数の行のみ抽出
printf("Odd Elements\n");
foreach ($array as $key => $element) { 
    if ((int)$key %2 == 1) {
        printf("%s\n", $element);
    }
}
?>
