<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       
<?php

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

    if($t==true){
        echo "$i 是質數<br>";
    }
}

echo "<br>";
echo $count;
echo "<br>";

$n=50;
echo "n=".$n."<br>";
$count=0;
for($i=3;$i<=sqrt($n);$i++){
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

?>
</body>
</html>