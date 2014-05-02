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
for ($i = 0; $i < $length; $i++) {
    $key = $array_keys[$i];
    printf("array[%s]=%s\n", $key, $array[$key]);
}

//foreachを使って配列のキー要素をすべて出力
foreach ($array as $element) {
    $key = array_search($element,$array);
    printf("key:%s\telement:%s\n", $key, $array[$key]);
}

//キーが奇数の行のみ抽出
foreach ($array_keys as $key){ 
    if((int)$key %2 == 1){
        printf("奇数要素：%s\n", $array[$key]);
    }
}
?>
