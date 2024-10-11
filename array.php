<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>陣列</h1>
    <div>[ 'a' . 'b' , 'good' , 'sad' , 'john' ,123,999]</div>
    <?php
$a=['a' , 'b' , 'good' , 'sad' , 'john' ,123,999, 'good' , 'sad' , 'john' ,123,999, 'good' , 'sad' , 'john' ];

for($i=0;$i<count($a);$i++){
echo $a[$i];
echo "<br>";
} 

/* echo $a[0];
echo "<br>";
echo $a[1];
echo "<br>";
echo $a[2];
echo "<br>"; */

$b=['姓名'=>"Dell",'英'=>60,'數學'=>80,'國文'=>50,'社'=>100,'自'=>100];
// 獲取陣列的key
/* 
$keys=array_keys($b);

// 使用for迴圈便利建
 for ($i = 0; $i< count($keys); $i++){
 $keys=$keys[$i];  //當前的key
 $value = $b[$key]; //使用鍵獲取對應的值
 echo $key . ': '. $value . '<br>';
 } */

 foreach ($b as $value) {
      echo  $value . '<br>';

 }

/*
1.先把key值都拿出來
2.用key做成一個只有key的陣列
3.用迴圈來跑key陣列
4.再把key陣列內容印出來
*/


?>
</body>
</html>