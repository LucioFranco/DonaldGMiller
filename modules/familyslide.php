<?php

echo '<br />';


$picid = $_GET["pic"];

if($picid < 1)$text='"Don, Nancy, Miriam and Lynne Miller 1966 - Nancy 8th grade graduation"';
if($picid=='')$text='"Don, Nancy, Miriam and Lynne Miller 1966 - Nancy 8th grade graduation"';
if($picid > 12)$text='"Don, Nancy, Miriam and Lynne Miller 1966 - Nancy 8th grade graduation"';
if($picid==1)$text='"Don, Nancy, Miriam and Lynne Miller 1966 - Nancy 8th grade graduation"';
if($picid==2)$text='"Don Miller sailing at Lake Merritt 1971"';
if($picid==3)$text='"Don Miller Yosemite 1980"';
if($picid==4)$text='"Lynne and Ciro Franco, Miriam and Don Miller, Nancy Miller and Ralph Lindeman 1990"';
if($picid==5)$text='"Don and Elena at her second birthday Malawi 1994"';
if($picid==6)$text='"Don and Lucio -- 1 week old 1996"';
if($picid==7)$text='"Don with Lucio and Elena Malawi 1996"';
if($picid==8)$text='"Elena and Don 1998"';
if($picid==9)$text='"Don and Lucio at Del Valle 2002"';
if($picid==10)$text='"Don on a camel outside of Tibuktu Mali 2005"';
if($picid==11)$text='"Guide, Don, Lucio and Lynne rafting on the Jordan River, Israel 2008"';
if($picid==12)$text='"Don in Israel 2008"';

if($picid < 1)$picid=1; 
if($picid=='')$picid=1;
if($picid > 12)$picid=1;



$next = $picid + 1;
$prev = $picid - 1;
echo '<div align="center">';echo $text;echo '<br /><br />';echo '<a href="/?page=familyslide&pic=';echo $prev;echo '">&#60;&#60;Prev</a> | This is Image #';echo $picid;echo ' | ';echo '<a href="/?page=familyslide&pic=';echo $next;echo '">Next&#62;&#62;</a></div><br />';


echo '<img src="/images/photo/family/';
echo $picid;
echo '.png" width="800"/><br /><br /><br />';

echo '<div align="center">';
echo $text;
echo '<br /><br />';
echo '<a href="/?page=familyslide&pic=';
echo $prev;
echo '">&#60;&#60;Prev</a> | This is Image #';

echo $picid;
echo ' | ';

echo '<a href="/?page=familyslide&pic=';
echo $next;
echo '">Next&#62;&#62;</a></div><br />';

?>