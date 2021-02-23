<?php

echo "Suicaにチャージします。金額に該当する番号を入力して下さい。" . PHP_EOL;

$selects = ["1" => 1000 ,"2" => 3000 ,"3" => 5000];

foreach ($selects as $select_num => $select_money) {
    echo $select_num . ":" . $select_money . "円" . PHP_EOL;
}

echo "番号:";
$num = fgets(STDIN);
$messge = "円チャージしました。" . PHP_EOL;

switch ($num) {
    case 1:
        $money = $selects["1"];
        echo $money . $messge;
        break;

    case 2:
        $money = $selects["2"];
        echo $money . $messge;
        break;

    case 3: 
        $money = $selects["3"];
        echo $money . $messge;
        break;

    default:
        break;
}

if (isset($money)) {
    $shopping_flag = "true";
}

if ($shopping_flag !== "true") {
    echo "無効な番号です" . PHP_EOL . "処理を終了します。" . PHP_EOL . "買い物を終了します。" . PHP_EOL;
    exit;
} 

do {
    echo "商品の価格を入力して下さい:";
    $price = fgets(STDIN);

    if (isset($rem)) {
        $rem = $rem - $price;

    } else {
        $rem = ($money - $price);
    }

    if ($rem < 0) {
        $shopping_flag = "false";
        break;
    }

    echo "残高は{$rem}円です。" . PHP_EOL;

} while ($rem >= 0);

if ($shopping_flag == "false") {
    echo "チャージ金額を上回るため購入できません。" . PHP_EOL . "買い物を終了します。" . PHP_EOL;
    exit;
} 