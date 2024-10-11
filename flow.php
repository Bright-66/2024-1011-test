<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式語言基礎-流程控制</title>
</head>
<body>
    <h1>流程-if-else</h1>
    <?php
    $score=74;
    if($score<75)
    
        echo "及格";
    else
        echo "不及格";

    ?>

<h1>switch...case</h1>
<?php

echo 'dsd  $score  aasss';
echo "dad  {$score}  aaass";
echo '<br>';

$level="A";
switch($level){
    case"A":
        echo "表現優良，請繼續保持";
        break;
        case "B":
            echo "值得肯定，還有進步空間";
            break;
            case "c":
                echo "需要更多的練習";
                break;
                default:
                echo "是否無心學業";
}

?>

<h1>三元運算子</h1>
<?php

$score=85;
/* if($score>=60){
echo "及格";
}else{
echo "不及格";
} */

echo ($score>=60)?"及格":"不及格";
?>

<h1>for loop</h1>
<?php
for($i=1 ; $i<10 ; $i=$i+2){
    echo $i*10;
    echo "<br>";
}
echo $i; /* 程式先執行i++, i=1,2...10,11 , 執行到11時, 則被"條件i<11限制", 不繼續執行之後的程式) */
echo "<br>";

for($i=0 ; $i<5 ; $i++){
    echo (2*$i+1)*10;
    echo "<br>";
}

echo $i; /* 程式先執行i++, i=1,2...10,11 , 執行到11時, 則被"條件i<11限制", 不繼續執行之後的程式) */
?>

<h1>while loop</h1>
<?php
$score=20;
$counter=0;
while($score<60){
    $score=$score+10;
    $counter++;
}

echo $score;
echo "<br>";
echo $counter;

?>


</body>
</html>