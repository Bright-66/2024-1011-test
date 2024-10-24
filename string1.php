<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>字串取代</h1>
    <h3>將”aaddw1123”改成”*********”</h3>

<?php
$str='aaddw1123';
echo $str ."<br>";
// $str_replace('aa',"**",$str);
echo $str ."<br>";
$str=str_replace('d',"**",$str);
echo $str ."<br>";

$str=str_replace(['a','d','w','1','2','3'],"*",$str);
echo $str ."<br>";

$str=str_repeat("*",mb_strlen($str));
echo $str ."<br>";

?>

<h1>字串分割</h1>
<h3>將this,is,a,book</h3>

<?php
$str="this,is,a,book";
$str=explode(",",$str);
echo "<pre>";
print_r($str);
echo "</pre>";

?>

<h1>字串組合</h1>
<h3>將this,is,a,book 依</h3>

<?php
$str=join(" ",$str);
echo $str ."<br>";

?>

<h1>子字串取用</h1>
<h3>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</h3>

<?php
$str="The reason why a great man is great is that he resolves to be a great man";
// $str=substr($str,0,10) . "...";
//  echo $str;

$str=mb_substr($str,0,10). "...";
 echo $str ."<br>";

$str="一個偉人的偉大之所以存在，是因為他下定決心要成為一個為人。";
$str=mb_substr($str,0,10). "...";
 echo $str ."<br>"

// $str=substr($str,0,10) . "...";
//  echo $str;

?>

<h1>尋找字串與HTML、css整合應用</h1>
<h3>
<ul>
<li>給定一個句子，將指定的關鍵字放大</li>
<li>"學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
<li>請將上句中的 “程式設計” 放大字型或變色.</li>
</ul>
</h3>

<?php

$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$key="PHP";
$large="<span style='font-size:28px;color:blue'>".$key."</span>";

$str=str_replace($key,$large,$str);
 echo $str ."<br>";


?>

</body>
</html>