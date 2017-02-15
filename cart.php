<?php
if(isset($_POST['carty'])){
	$e = $_POST['forward'];
	$p = $_POST['money'];
	} ?>
<!doctype html>
<html>
<head><title>your-cart</title>
<style>.left1 input[type=submit]{background-color:green; width:60%;margin-left:28%;height:40px; color:white; font-size:15px;}
input[type=submit]:hover{background-color:lightgreen;}
input[type=text] {width:250px;background-color:lightblue; padding:10px;}


</style>
 <link rel="stylesheet" type="text/css" href="style.css"></head>
<body bgcolor="lightgreen">

<img src="back2.png"  href="smartbuy.php"  style="padding-left:1%; width:98%; height:145px;"/>
 <div class="left1" style="background-color:white;width:80%;margin-top:-20px;margin-left:10%;margin-right:10%;margin-top:-40px;min-height:400px;"><br><br><a style="text-decoration:none;"href="smartbuy2.php"><h1  align="center" style="background-color:pink;">HOME</h1></a><br><br>
 <div class="head1" style="width:100%;">
 <div class="left1" style="width:20%; float:left;margin-left:30%; margin-bottom:5%;"><br>Name:<br><br><br>Mobile No.:<br><br><br>Address:</div>
	<div class="left1" style="width:50%; float:left;">
	<form ><input type="text" name="name" placeholder="Name"/><br><br>
				<input type="text" name="mbl" placeholder="Mobile No."/><br><br>
				<input type="text" name="addr" placeholder="Address"/><br><br></div></div>
				<div class="clear:both"></div><br>
				<table style="margin-left:20%; width:60%;"><?php echo $e;?></table>
			</form><br>
			<h3 align="center">Rs.<?php echo $p;?></h3><br><br><hr><br>
			
			<input align="center"type="submit" name="carty" value="Submit" style="background-color:green; width:40%;margin-left:28%;height:60px; color:white; font-size:30px;"/>
			<br><br>
			<h4 align="center">""You will soon reciver a call after submition"</h4>
			