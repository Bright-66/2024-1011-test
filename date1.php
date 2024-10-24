<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>日期函式應用練習</h1>
<h3>給定兩個日期，計算中間間隔天數</h3>

<?php
// 日期時間問題,可先改設定為台北時間! 因電腦預設歐洲時區時間
date_default_timezone_set("Asia/Taipei");
echo date("Y/m/d H:i:s");
echo "<br>";

// 無設定秒數時,預設為零時零分零秒 00:00:00進行計算
$start="2024-10-01";
$end="2024-10-30";

// 需先轉成"秒"時間及字串
$startTime=strtotime($start);
echo "開始時間:".$startTime ."秒";
echo "<br>";
$endTime=strtotime($end);
echo "結束時間:".$endTime ."秒";
echo "<br>";

$gap=$endTime-$startTime;
echo "差:".$gap ."秒";
$days=$gap/(24*60*60);
echo "<br>";

echo "間隔:".$days ."天";

echo "<hr>";

// 開始時間給到"秒"的結果
$start="2024-10-01 23:59:59";
$end="2024-10-30";

// 需先轉成"秒"時間及字串
$startTime=strtotime($start);
echo "開始時間:".$startTime ."秒";
echo "<br>";
$endTime=strtotime($end);
echo "結束時間:".$endTime ."秒";
echo "<br>";

$gap=$endTime-$startTime;
echo "差:".$gap ."秒";
$days=$gap/(24*60*60);
echo "<br>";

echo "間隔:".$days ."天";
?>

<h3>計算距離自己下一次生日還有幾天</h3>

<?php
$start=date("Y-m-d");
$end="2025-10-07";
// 需先轉成"秒"時間及字串
$startTime=strtotime($start);
echo $startTime ."秒";
echo "<br>";
$endTime=strtotime($end);
echo $endTime ."秒";
echo "<br>";

$gap=$endTime-$startTime;
echo "差:".$gap ."秒";
$days=$gap/(24*60*60);
echo "<br>";

echo "距下一次生日:".$days ."天";

echo "<hr>";

?>

</body>
</html>