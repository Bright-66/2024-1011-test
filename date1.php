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

<h3>利用date()函式的格式化參數，完成以下的日期格式呈現</h3>
<ul>
<li></li>
<li></li>
<li></li>
<li></li>
<li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>

<?php
 
$weekString=[
        'Monday'=>['min'=>'一','short'=>'周一','fulltext'=>'星期一'],
        'Tuesday'=>['min'=>'二','short'=>'周二','fulltext'=>'星期二'],
        'Wednesday'=>['min'=>'三','short'=>'周三','fulltext'=>'星期三'],
        'Thursday'=>['min'=>'四','short'=>'周四','fulltext'=>'星期四'],
        'Friday'=>['min'=>'五','short'=>'周五','fulltext'=>'星期五'],
        'Saturday'=>['min'=>'六','short'=>'周六','fulltext'=>'星期六'],
        'Sunday'=>['min'=>'七','short'=>'周日','fulltext'=>'星期日']
        ];
echo date("Y年m月d日");
echo "<br>";
echo date("m月d日 l");
echo "<br>";
echo date("m月d日").$weekString[date("l")]['min'];
echo "<br>";
echo date("m月d日").$weekString[date("l")]['short'];
echo "<br>";
echo date("m月d日").$weekString[date("l")]['fulltext'];
echo "<br>";


echo date("Y年m月d日");
echo "<br>";
echo date("Y年m月d日 l");
echo "<br>";
echo "今天是西元". date("Y年 m月 d日");

if(date("N")>5){
echo "假日";
}else{
echo "上班日";
}

echo "<br>";

echo "<hr>";

?>
<h3></h3>
<ul>
<li></li>
</ul>

<?php
for($i=0;$i<5;$i++){
$timestamp=strtotime("+$i weeks".date("Y-m-d"));
echo date("Y-m-d",$timestamp);
echo "&nbsp;";
echo $weekString[date("l")]['fulltext'];
echo "<br>";
}

?>

<h3>線上月曆製作</h3>
<ul>
<li>以表格方式呈現整個月份的日期</li>
<li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
<li>嘗試以block box或flex box的方式製作月曆</li>
</ul>
<style>
table{
border-collapse:collapse;

}
td{
    padding:5pcs 10px;
    text-align: center;
    border:1px solid #999;
}
.holiday{
background:pink;
color:#999;
}

.grey-text{
color:#999;
}
.today{
    background:blue;
    color:white;
    font-size:bold;
}

</style>
<h3><?php echo date("m月");?></h3>
<table>
<tr>
<td></td>
<td>日</td>
<td>一</td>
<td>二</td>
<td>三</td>
<td>四</td>
<td>五</td>
<td>六</td>
</tr>

<?php
$firstDay=date("Y-m-1");
// 找出該月第一周的第1天在星期幾<=>對應(j)的位置 
// 用date('w')找, 預設為現在的日期月份("Y-m")
$firstDayTime=strtotime($firstDay);
$firstDayWeek=date("w", strtotime(date("Y-m-1")));
echo $firstDayWeek;
// echo date("m/t",$d);

for($i=0;$i<6;$i++){
echo "<tr>";
echo "<td>";

echo $i+1;
echo "</td>";

for($j=0;$j<7;$j++){;
// echo "<td class='holiday'>";

$cell=$i*7+$j - $firstDayWeek;
$theDayTime=strtotime("$cell days".$firstDay);
// 所需css判斷
$theMonth=(date("m",$theDayTime)==date("m"))?'':'grey-text';
        $isToday=(date("Y-m-d",$theDayTime)==date("Y-m-d"))?'today':'';
        $w=date("w",$theDayTime);
        $isHoliday=($w==0 || $w==6)?'holiday':'';

        echo "<td class='$isHoliday $theMonth $isToday'>";
        echo date("d",$theDayTime);
        echo "</td>";
        
    }
    echo "</tr>";
}


?>

<h3>線上月曆製作</h3>
<ul>
<li>以表格方式呈現整個月份的日期</li>
<li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
<li>嘗試以block box或flex box的方式製作月曆</li>
</ul>
<style>
table{
border-collapse:collapse;

}
td{
    padding:5pcs 10px;
    text-align: center;
    border:1px solid #999;
}
</style>
<h3><?php echo date("m月");?></h3>
<table>
<tr>
<td></td>
<td>日</td>
<td>一</td>
<td>二</td>
<td>三</td>
<td>四</td>
<td>五</td>
<td>六</td>
</tr>

<?php
$d=strtotime("2014-02");
// 找出該月第一周的第1天在星期幾<=>對應(j)的位置 
// 用date('w')找, 預設為現在的日期月份("Y-m")
$firstDayWeek=date("w", strtotime(date("Y-m-1")));
echo $firstDayWeek;
//  echo date("m/t",$d);

for($i=0;$i<6;$i++){
echo "<tr>";
echo "<td>";
// 為了顯示"週數"從1開始 故i加1 !
echo $i+1;
echo "</td>";

for($j=0;$j<7;$j++){;
echo "<td>";
// 表格內的日期數字與對應的 i 與 j的關係式
$dayNum=$i*7+$j+1 - $firstDayWeek;
// date('t')為取該月份的天數=該月份的最大值(天數)
//  $firstDayWeek該月第一周的第1天在星期幾的數字 
if($dayNum <= date('t') && $dayNum > 0){
    echo $dayNum;
}
echo "</td>";
}
echo "</tr>";
}


?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>