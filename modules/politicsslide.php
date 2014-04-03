<?php

echo '<br />';


$picid = $_GET["pic"];

if($picid < 1)$text='"Don Miller, Roger Silva, Gib Marguth, Mike Uthe, Clyde Taylor -- Livermore City Council 1968"';
if($picid=='')$text='"Don Miller, Roger Silva, Gib Marguth, Mike Uthe, Clyde Taylor -- Livermore City Council 1968"';
if($picid > 3)$text='"Don Miller, Roger Silva, Gib Marguth, Mike Uthe, Clyde Taylor -- Livermore City Council 1968"';
if($picid==1)$text='"Don Miller, Roger Silva, Gib Marguth, Mike Uthe, Clyde Taylor -- Livermore City Council 1968"';
if($picid==2)$text='"Don Miller at a City Council Meeting 1972"';
if($picid==3)$text='"Don Miller as Mr. Congeniality 1976 - Special Issue of the Independent Newspaper "';

if($picid < 1)$picid=1; 
if($picid=='')$picid=1;
if($picid > 3)$picid=1;



$next = $picid + 1;
$prev = $picid - 1;
echo '<div align="center">';echo $text;echo '<br /><br />';echo '<a href="/?page=politicsslide&pic=';echo $prev;echo '">&#60;&#60;Prev</a> | This is Image #';echo $picid;echo ' | ';echo '<a href="/?page=politicsslide&pic=';echo $next;echo '">Next&#62;&#62;</a></div><br />';


echo '<img src="/images/photo/politics/';
echo $picid;
echo '.png" width="800"/><br /><br /><br />';

echo '<div align="center">';
echo $text;
echo '<br /><br />';
echo '<a href="/?page=politicsslide&pic=';
echo $prev;
echo '">&#60;&#60;Prev</a> | This is Image #';

echo $picid;
echo ' | ';

echo '<a href="/?page=politicsslide&pic=';
echo $next;
echo '">Next&#62;&#62;</a></div><br />';

?>