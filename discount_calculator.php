<?php
//＜課題１＞
//商品情報の定義
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

//＜課題２＞
//偶数・奇数判定
$number = 7;

if ($number % 2 == 0) {
    echo "{$number}は偶数です";
} else {
    echo "{$number}は奇数です";
}

//＜課題３＞
//割引適用条件
$age =25;
$is_member = true;
$is_student = false;

//条件１：１８歳以上かつ会員
if ($age >= 18 && $is_member) {
    echo "割引が適用されます<br>";
}

//条件２：　６５歳以上または学生
if ($age >= 65 || $is_student){
    echo "シニア・学生割引が適用されます<br>";
}

//＜課題４＞
//ゲームのスコア計算

$score = 100;  // 初期スコア
echo "初期スコア: {$score}点<br>";

$score += 50; // ボーナスステージクリア
echo "ボーナス後: {$score}点<br>";

$score -= 30; // ダメージ
echo "ダメージ後: {$score}点<br>";

$score *= 2; // 2倍アイテム
echo "最終スコア: {$score}点<br>";

