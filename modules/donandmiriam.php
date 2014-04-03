<?php

echo '<br />';


$picid = $_GET["pic"];

if($picid < 1)$text='"Don and Miriam at fraternity dance 1949"';
if($picid=='')$text='"Don and Miriam at fraternity dance 1949"';
if($picid > 4)$text='"Don and Miriam at fraternity dance 1949"';
if($picid==1)$text='"Don and Miriam at fraternity dance 1949"';
if($picid==2)$text='"Don and Miriam 50 wedding anniversary 1999"';
if($picid==3)$text='"Miriam and Don in Florida 1951"';
if($picid==4)$text='"Miriam and Don 1994"';

if($picid < 1)$picid=1; 
if($picid=='')$picid=1;
if($picid > 4)$picid=1;



$next = $picid + 1;
$prev = $picid - 1;
//top nav
echo '<div align="center">';
echo $text;
echo '<br /><br />';
echo '<a href="/?page=donandmiriam&pic=';
echo $prev;
echo '">&#60;&#60;Prev</a> | This is Image #';

echo $picid;
echo ' | ';

echo '<a href="/?page=donandmiriam&pic=';
echo $next;
echo '">Next&#62;&#62;</a></div><br />';

//image
echo '<img src="/images/photo/donandmiriam/';
echo $picid;
echo '.png" width="800"/><br /><br /><br />';

echo '<div align="center">';
echo $text;
echo '<br /><br />';
echo '<a href="/?page=donandmiriam&pic=';
echo $prev;
echo '">&#60;&#60;Prev</a> | This is Image #';

echo $picid;
echo ' | ';

echo '<a href="/?page=donandmiriam&pic=';
echo $next;
echo '">Next&#62;&#62;</a></div><br />';

?>

