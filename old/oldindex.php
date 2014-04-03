<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
<SCRIPT type="text/javascript">
var quotations = new Array()
quotations[0]= "&quot;You can’t win them all, or even hardly any&quot;"
quotations[1]= "&quot;Lose a few, lose a few&quot;"
quotations[2]= "&quot;Nothing ventured, nothing gained&quot;"
quotations[3]= "&quot;Do unto others as they would be done to&quot;"
quotations[4]= "&quot;Never give a kid an even break, they’ll outsmart you every time&quot;"
quotations[5]= "&quot;Winning is better than losing&quot;"
function display()
{
a=Math.floor(Math.random()*quotations.length)
document.getElementById('quotation').innerHTML=quotations[a]
setTimeout("display()",5000)
}
</SCRIPT>

<title>Home</title>

<link rel="stylesheet" type="stylesheet" href="new1.css" />

</head>

<body>



<div id="container">



<div id="header">

<img id="livhills"src="images/livhills1.jpg" width="569" height="142" align="right" alt="livehills.jpeg"> 
<h1 align="justify">Donald Gabreil Miller</h1>
<p>A Tribute Website To a Great Man!</p>
</div>



<div id="nav">
<?php include('menu.php'); ?>
</div>
<div>

</div>
<div id="content">
<div id="quotesbydon">
<b>Quotes By Don:</b>
</div>
<div id="quotation">
<SCRIPT type="text/javascript">display()</SCRIPT>
</div>

<?php include('homepagearticle1.php'); ?>
</div>

<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
  
  Copyright © 2012 Lucio Franco</div>



</div>
</body>

</html>



