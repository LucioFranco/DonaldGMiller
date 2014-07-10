<?php 
$module = $_GET['page'];
if($module=='')$module='home';
if(($module!='home')&&($module!='tributestodon')&&($module!='science')&&($module!='localpilitics')&&($module!='thearts')&&($module!='family')&&($module!='ballistics')&&($module!='judaism')&&($module!='1')&&($module!='susan')&&($module!='lynne')&&($module!='nancy')&&($module!='joan')&&($module!='joe')&&($module!='joe')&&($module!='lab')&&($module!='tributes')&&($module!='politics')&&($module!='science')&&($module!='judaism')&&($module!='marshall')&&($module!='sciencehome')&&($module!='history')&&($module!='arts')&&($module!='independent')&&($module!='donssayings')&&($module!='familyimage')&&($module!='balistics')&&($module!='donandmiriam')&&($module!='donandparents')&&($module!='familyslide')&&($module!='politicsslide')&&($module!='slide')&&($module!='form')&&($module!='dagerman'))$module='404';
?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<!---<script src="js/jquery.min.js"></script>---->
<link rel="stylesheet" href="css/slide_show.css" media="screen">
<link rel="stylesheet" href="css/nivo-slider.css" media="screen">
<link rel="stylesheet" href="css/futurico-theme.css" media="screen">
<script src="js/main.js"></script>
<script src="js/jquery.min.js"></script>

<SCRIPT type="text/javascript">
var quotations = new Array()
quotations[0]= "&quot;You can&rsquo;t win them all&sbquo; or even hardly any&quot;"
quotations[1]= "&quot;Lose a few&sbquo; lose a few&quot;"
quotations[2]= "&quot;Nothing ventured&sbquo; nothing gained&quot;"
quotations[3]= "&quot;Do unto others as they would be done to&quot;"
quotations[4]= "&quot;Never give a kid an even break&sbquo; they&rsquo;ll outsmart you every time&quot;"
quotations[5]= "&quot;Winning is better than losing&quot;"
quotations[6]= "&quot;I&rsquo;ll make you a deal!&quot;"
quotations[7]= "&quot;No one here but us peons&quot;"
quotations[8]= "&quotCynicism and pessimism are the only true guides to reality&quot;"
quotations[9]= "&quot;Politics is the art of compromise&sbquo; but you never compromise if you don&rsquo;t have to&quot;"
quotations[10]= "&quot;Every question has two sides&sbquo; but not necessarily of equal weight&quot;"
function display()
{
a=Math.floor(Math.random()*quotations.length)
document.getElementById('quotation').innerHTML=quotations[a]
setTimeout("display()",5500)
}
</SCRIPT>
<style type="text/css">
#container {
		width:1000px;
		margin:auto;
		font-family:Arial, Helvetica, sans-serif;
		background-color: #98BF21;
}
#header {
		background-color:#6F6F00;
		height:142px;
		margin-bottom:0;
}
#head {
		font-size:60px;
		padding-top:30px;
		text-shadow: 0 1px 0 #ccc,  0 2px 0 #c9c9c9,  0 3px 0 #bbb,  0 4px 0 #b9b9b9,  0 5px 0 #aaa,  0 6px 1px rgba(0,0,0,.1),  0 0 5px rgba(0,0,0,.1),  0 1px 3px rgba(0,0,0,.3),  0 3px 5px rgba(0,0,0,.2),  0 5px 10px rgba(0,0,0,.25),  0 10px 10px rgba(0,0,0,.2),  0 20px 20px rgba(0,0,0,.15);
}
#contents {
		background-color:#EEEEEE;
		width:872px;
		/*width:1000px;*/
		float:right;
		min-height:244px;
}
#text {
		padding-left:30px;
		padding-right:30px;
}
#quote {
		padding-left:30px;
}
#quotebox {
		height:50px;
		width:872px;
		background-color:#FFA500;
}
.nav ul {
		list-style-type:none;
		margin:0;
		padding:0;
		float:left;
		width:128px;
		/*position:fixed;*/
}
.nav ul a:link, .nav ul a:visited {
		display:block;
		font-weight:bold;
		color:#FFFFFF;
		background-color:#98bf21;
		width:128px;
		text-align:center;
		padding-top:4px;
		padding-bottom:4px;
		text-decoration:none;
		border-top:2px solid black;
}
#navmenu a:hover, .nav a:active {
		background-color:#7A991A;
				
}
.nav li:hover > ul {
		display:block;
		left:100%;
		top:0;
		width:100%;
		position:absolute;
		z-index:1;	
}
.nav ul li ul {
		display:none;
}
.nav li {
		position:relative;
}
.bottom {
		border-bottom:2px solid black;
}
.pagination {
		padding: 2px;
}
.pagination ul {
		margin: 0;
		padding: 0;
		text-align: left;
		font-size: 16px;
}
.pagination li {
		list-style-type: none;
		display: inline;
		padding-bottom: 1px;
}
.pagination a, .pagination a:visited {
		padding: 0 5px;
		border: 1px solid #9aafe5;
		text-decoration: none;
		color: #2e6ab1;
}
.pagination a:hover, .pagination a:active {
		border: 1px solid #2b66a5;
		color: #000;
		background-color: #FFFF80;
}
.pagination a.prevnext {
		font-weight: bold;
}
.page_number {
		border: 1px solid #9aafe5;
		color: #2e6ab1;
		padding:5px;
		text-align: center;
		width: 20px;
}
#content {
		position:relative;
		height:400px;
}
#content .page {
		position:absolute;
		top:0px;
}

</style>
<title>Donald G. Miller-A Tribute!</title>
<!--<link rel="stylesheet" type="stylesheet" href="css/style.css" />-->
<style type="text/css">
</style>
</head>
<body>
<div id="container">
<div id="header"> <img id="livhills"src="images/livhills4.png" width="569" height="142" align="right" alt="livehills.jpeg">
		<div id="head"><b>Don Miller</b></div>
		<div class="texthead">Donald Gabriel Miller 1927-2012</div>
		<div class="texthead">A Tribute Website To a Great Man!</div>
</div>
<div id="navmenu"class="nav">
		<?php include('menu.php'); ?>
</div>
<!--<div align="left "style="width:120px;background-color:#98bf21"></div>-->
<div id="contents">
<div id="quotebox">
		<div id="quote">
				<div id="quotesbydon"> <b>Sayings by Don:</b> </div>
				<div id="quotation"> 
						<SCRIPT type="text/javascript">display()</SCRIPT> 
				</div>
		</div>
</div>
<div id="text">
<?php
include("modules/".$module.".php");
?>
	</div>
	</div>
	<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;width:872px;float:right;"> Copyright  2012 Lucio Franco</div>
</div>
</body>
</html>
