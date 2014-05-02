<?php
$array = array('a','b','c');

//配列の要素数
$length = count($array);

//arrayを逆順に
for ($i = 0; $i < $length/2; $i++) {
    $buf                 = $array[$i];
    $array[$i]           = $array[$length-1-$i];
    $array[$length-1-$i] = $buf;
}

//arrayを表示
for ($i = 0; $i < $length; $i++) {
    printf("%s\t",$array[$i]);
}
printf("\n");

//ランダムに一つ取り出して出力
$randNum = mt_rand(0 , $length-1);
printf("Random Element:%s\n", $array[$randNum]);

//ランダム順に出力

//ランダム順を作成
//ランダムな順番
$randNumArray = array();
//使った番号のチェックリスト
$numCheckArray = array();

//チェックリストをすべて未使用に
for ($i = 0; $i < $length; $i++) {
    array_push($numCheckArray , false);
}

for ($i = 0; $i < $length; $i++) {
    $randNum = 0;//宣言のためのダミーバリュー
    //未使用の番号を引くまでくじ引き、最終的に引いた番号を使用済みに
    do {
        $randNum = mt_rand(0, $length-1);
    } while ($numCheckArray[$randNum] == true);
    $numCheckArray[$randNum] = true;
    
    //引いた番号を順番にプッシュ
    array_push($randNumArray , $randNum);
}

//作成した順番で表示
for ($i = 0; $i < $length; $i++) {
    printf("%s\n",$array[$randNumArray[$i]]);
}
?>
