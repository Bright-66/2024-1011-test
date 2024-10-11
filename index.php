<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式語言基礎/github 操作練習</title>
</head>
<body>

<?php

$a=10;
$b=50;
$t=$a;
$a=$b;
$b=$t;

echo $a; 
echo "<br>";
echo $b; 

echo "<br>";

$a=10;
$b=50;

$a=$a*5;
$b=$b/5;

echo $a; 
echo "<br>";
echo $b; 

echo "<br>";

define('PI',3.1415);

$price=100;
echo $price;
echo "<br>";

$name='Bright Wang';
echo $name;

$total=100*5+32/10*3*PI;
echo "<br>";
echo $total;
echo "<br>";
$num=rand(-99,99).",".rand(-99,99).",".rand(1,99).",".rand(1,99).",".rand(1,99).",".rand(1,99);
echo $num;
echo "<br>";
$num=100000;
echo $num;

echo "<br>";
echo "PI是".PI;


echo "PI是".PI;

?>

</body>
</html>