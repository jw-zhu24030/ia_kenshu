<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// echo "Hello world!";
echo "<p>こんにちは</p>"; // tagを用いてこんにちはを表示
echo "<p>He said, \"Hello!\"</p>";
echo "<p>He said,<br />\"Hello!\"</p>";
echo <<<_BODY_
    <h1>ヒアドキュメントとは?</h1>
    <p>ヒアドキュメントは任意の区切り文字列を使って
    複数行に渡る文字列を表示させるのに便利な仕組みです。</p>
    _BODY_;

$digit = 3;
$name = "太郎";
$answer = $digit + 10;
echo $digit . $name . $answer;

$name = "Zhu";
$age = 29;
echo "My name is $name. I am $age years old.\n";
// $meal = "steak";
// echo "Tanaka ate $meals"; //$meals を変数展開
// echo "Tanaka ate {$meal}s";  //$meal を変数展開

$number = array(80, 90, 100);
echo $number[0];

$price = array("apple" => 80, "banana" => 90, "orange" => 100);
echo $price["apple"];
echo $price[0];
$num = array("apple" =>30, "banana" => 50, "orange" => 60);
$sum_price = $price["orange"] * $num["orange"];
echo "オレンジの合計金額は、{$sum_price}です。";



?>
</body>
</html>