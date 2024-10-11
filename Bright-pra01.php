<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程練習</title>
</head>
<body>
   
<h2>分配成績等級<h2>
<h3>給定一個成績數字，根據成績所在的區間，給定等級</h3>
<ul>
<li>0 ~ 59 => E</li>
<li>60 ~ 69 => D</li>
<li>70 ~ 79 => C</li>
<li>80 ~ 89 => B</li>
<li>90 ~ 100 => A</li>

<?php
$score=100;
function getGrade($score) {
    if ($score < 0 || $score > 100) {
        return "成績必須在 0 到 100 之間";
    } elseif ($score < 60) {
        return "E";
    } elseif ($score < 70) {
        return "D";
    } elseif ($score < 80) {
        return "C";
    } elseif ($score < 90) {
        return "B";
    } else {
        return "A";
    } 
}

echo '<br>';
echo "score=".$score;
echo '<br>';
echo "你的等級為".getGrade($score);


?>
<H1>閏年判斷，給定一個西元年份，判斷是否為閏年</H1>

<div>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</div>
<ul>
    <li>公元年分除以4不可整除，為平年。</li>
    <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
    <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
</ul>

<?php

$year=2407;

if($year%4==0){
    if($year%100==0){
        if($year%400==0){
            echo "西元";
            echo $year;
            echo "是閏年";
        }else{
            echo "西元";
            echo $year;
            echo "是平年";
        } 
    }else{
    echo "西元";
    echo $year;
    echo "是閏年";
    }
}else{
    echo "西元";
    echo $year;
    echo "是平年";
}

echo "<hr>";
echo "<h3> && </h3>";

if($year%4==0){
    if($year%100==0 && $year %400 != 0){

        echo "西元";
        echo $year;
        echo "是平年";
}else 
            echo "西元";
            echo $year;
            echo "是閏年";

}else{
    echo "西元";
    echo $year;
    echo "是平年";
}

echo "<hr>";
echo "<h3> || </h3>";
if($year%4==0){
    if($year%100 != 0 || $year %400 == 0){

            echo "西元";
            echo $year;
            echo "是閏年";
        }else{
            echo "西元";
            echo $year;
            echo "是平年";
        } 
    }else{
    echo "西元";
    echo $year;
    echo "是平年";
}

echo "<hr>";
echo "<h3> 簡化後-1 </h3>";

if($year%4==0 && ($year%100!=0 || $year %400 ==0)){
            echo "西元";
            echo $year;
            echo "是閏年";

}else{
        echo "西元";
        echo $year;
        echo "是平年";
}  

echo "<hr>";
echo "<h3> 簡化後-2 </h3>";

if($year%4==0 && ($year%100 != 0 || $year %400 == 0)){

            echo "西元";
            echo $year;
            echo "是閏年";
        }else{
            echo "西元";
            echo $year;
            echo "是平年";
        } 


echo "<hr>";
echo "<h3> for exam </h3>";

$n=50;
echo "n=".$n."<br>";
for($i=1;$i<=$n;$i=$i+2){
    echo $i *10;
    echo ",";

}

echo "<br>";

$n=50;
echo "n=".$n."<br>";
$count=0;

for($i=4;$i<=$n;$i++){
    $t=true;
     for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $t=false;
  
        }
        $count++;
     }
    }
if($t==true){
    echo "$i 是質數<br>";

}
echo "<br>";

echo $count;
?>

<h2>九九乘法表</h2>

<?php
echo "<table border=10>";
for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=9;$j++){
        echo "<td>";
    echo "$j X $i = ".($j*$i);
    echo "</td>";
}
echo "<tr>";
}
echo "</table>";

echo "<br>";
?>
<!-- table>tr*9>td*9 -->



<style>
.nine{
    border-collapse:collapse;
    margin:20px;
 
}
.nine td{
    border:1px solid #aaa;
    width:30px;
    height:30px;
    text-align: center;

}
.nine tr:nth-child(1),
.nine td:nth-child(1){
    background:blue;
    color:white;
}

</style>
<?php
echo "<table class='nine'>";
for($i=0;$i<=9;$i++){
    echo "<tr>";
    for($j=0;$j<=9;$j++){
            echo "<td>";
            if($i==0 && $j==0){
                echo " ";
            }else if($i==0){            
              echo $j;
    }else if($j==0){
        echo $i;
    }else{
            echo ($j*$i);  
        }     
       echo "</td>";
    }
echo "</tr>";
}
echo "</table>";

?>
</body>
</html>