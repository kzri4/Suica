<?php

echo "Suicaにチャージします。金額に該当する番号を入力して下さい。" . PHP_EOL;

$selects = array("1:" => 1000 ,"2:" => 3000 ,"3:" => 5000);

foreach ($selects as $select_num => $select_money){
    echo $select_num . $select_money. "円" . PHP_EOL;
}

echo "番号:";
$num = fgets(STDIN);
$messge = "円チャージしました。" . PHP_EOL;

if ($num == 1){
    $money = $selects["1:"];
    echo $money . $messge;

}elseif ($num == 2){
    $money = $selects["2:"];
    echo $money . $messge;

}elseif ($num == 3){
    $money = $selects["3:"];
    echo $money . $messge;

}else{
    echo "無効な番号です。処理を終了します。";

}

echo "商品の価格を入力して下さい:";
$price = fgets(STDIN);

while ($price <= $money ){
    $rem = ($money - $price);
    echo "残高は{$rem}円です。" . PHP_EOL;

    if ($rem < 0){
        break;
    }

    echo "商品の価格を入力して下さい:";
    $price2 = fgets(STDIN);
    $price = $price + $price2;
}

echo <<< EOM
        チャージ金額を上回るため購入できません。
        買い物を終了します。
        EOM;
