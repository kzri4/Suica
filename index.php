<?php

echo "Suicaにチャージします。金額に該当する番号を入力して下さい。" . PHP_EOL;

$selects = [1 => 1000, 2 => 3000, 3 => 5000];

foreach ($selects as $select_num => $select_money) {
    echo $select_num . ":" . $select_money . "円" . PHP_EOL;
}

echo "番号:";
$num = trim(fgets(STDIN));
$messge = "円チャージしました。" . PHP_EOL;

switch ($num) {
    case 1:
    case 2:
    case 3: 
        $money = $selects[$num];
        echo $money . $messge;
        break;
    default:
        echo "無効な番号です" . PHP_EOL . "処理を終了します。" . PHP_EOL . "買い物を終了します。" . PHP_EOL;
        exit;    
}

$shopping_flag = true;

do {
    echo "商品の価格を入力して下さい:";
    $price = trim(fgets(STDIN));

    if ($money - $price >= 0) {
        $money = $money - $price;
    } else {
        $shopping_flag = false;
    }
    echo "残高は{$money}円です。" . PHP_EOL;
} while ($shopping_flag == true);

echo "チャージ金額を上回るため購入できません。" . PHP_EOL . "買い物を終了します。" . PHP_EOL;