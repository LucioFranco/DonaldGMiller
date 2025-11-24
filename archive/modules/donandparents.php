<?php

echo '<br />';


$picid = $_GET["pic"];

if($picid < 1)$text='"Nathan Harry Miller (father) at work 1927"';
if($picid=='')$text='"Nathan Harry Miller (father) at work 1927"';
if($picid > 8)$text='"Nathan Harry Miller (father) at work 1927"';
if($picid==1)$text='"Nathan Harry Miller (father) at work 1927"';
if($picid==2)$text='"Don Miller 3 years old 1930"';
if($picid==3)$text='"Nathan Harry and Don Miller 1931"';
if($picid==4)$text='"Don Miller 9 years old 1936"';
if($picid==5)$text='"Don Miller 9 years old and Sockeye 1936"';
if($picid==6)$text='"Nathan Harry and Edith Miller 1937 "';
if($picid==7)$text='"Stan, Nathan Harry, Edith and Don Miller 1943"';
if($picid==8)$text='"Don Miller in the Army 1945"';

if($picid < 1)$picid=1; 
if($picid=='')$picid=1;
if($picid > 8)$picid=1;



$next = $picid + 1;
$prev = $picid - 1;
echo '<div align="center">';echo $text;echo '<br /><br />';echo '<a href="/?page=donandparents&pic=';echo $prev;echo '">&#60;&#60;Prev</a> | This is Image #';echo $picid;echo ' | ';echo '<a href="/?page=donandparents&pic=';echo $next;echo '">Next&#62;&#62;</a></div><br />';


echo '<img src="/images/photo/donandparents/';
echo $picid;
echo '.png" width="800"/><br /><br /><br />';

echo '<div align="center">';
echo $text;
echo '<br /><br />';
echo '<a href="/?page=donandparents&pic=';
echo $prev;
echo '">&#60;&#60;Prev</a> | This is Image #';

echo $picid;
echo ' | ';

echo '<a href="/?page=donandparents&pic=';
echo $next;
echo '">Next&#62;&#62;</a></div><br />';

?>