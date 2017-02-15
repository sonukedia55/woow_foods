<?php
if(isset($_POST['feedback'])){
	$f=$_POST['feed'];
	$date=date('y-m-d');
	$con = mysqli_connect("localhost","root","","wow");
$df = mysqli_query($con, "INSERT into feedback values('','$date','$f')");	}	
	?>
<!doctype html>

<html>
<head><title>smartbuy</title>
 <link rel="stylesheet" type="text/css" href="style.css">
<style>input[type=submit]{background-color:green; width:15%;margin-left:28%;height:40px; color:white; font-size:15px;}
input[type=submit]:hover{background-color:lightgreen;}
.left1 ul li{font-size:20px;}</style>
</head>
<body bgcolor="lightblue">

<img src="back2.png" style="padding-left:1%;width:98%; height:145px;"/>
<div class="head1" style="background-color:white; min-height:700px;margin-left:10%;margin-right:10%;margin-top:-40px;font-size:15px;"><br><br>
<div id="m2" class="left1" style="width:80%">
<ul >
			<li style="background-color:steelblue;"><a>Home</a>			<ul>
													</ul></li>
			<li><a>About</a>	<ul><li style="width:200px; background-color:steelblue;">Here, you can order your fast food. pay at delivery, now in Ropar.</li></ul></li>
													
			<li><a>Contact</a>		<ul><li style="width:300px;background-color:steelblue;">Email: sonukedia00@gmail.com<br>Mobile no. 9815235665</li>
													
													</ul></li>
			<li><a>Developer</a>			<ul><li ><form method="post" action="shop.php"><input type="submit"  style="margin:-10px -25px;background-color:lightblue;border:none; height:50px; width:100px;" name="shop" value="Shop"/></form></li>
													<li><form method="post" action="admin.php"><input type="submit"  style="margin:-10px -25px;background-color:lightblue;border:none; height:50px; width:100px;" name="logout" value="Admin"/></form></li>
													
													</ul></li>
			<li><a>Feedback</a>			<ul><li style="width:280px; padding:10px 10px;background-color:steelblue;"><form action="smartbuy2.php" method="post"><textarea style="height:100px; width:150px; padding:5px; margin:0px;"placeholder="enter here"type="submit" name="feed"/></textarea><br><input style="margin:0px; width:60px;" type="submit" name="feedback" value="send"/></form><br>Help us to Improve our wow food. Please Feedback about your experience and suggestions.</li>
													
													</ul></li>
			
		</ul>
		</div><div class="left1" style="width:18%;"><img src="check.png" style="margin-top:10px;"/></div><br></br>

<img src="title2.png" align="center"style="margin-top:10px;padding-left:20px;width:95%; height:250px;"/><br><br>
<hr style="width:80%; margin-left:10%;"/><hr style="width:80%; margin-left:10%;"/><h4 align="center">....Our Coverage, Select city....</h4><br>
<div class="head2" style="width:100%;background-color:aliceblue; "><img src="f1.jpg" style="width:30%;padding:2%;"/><img style="width:30%; padding:1%;"  src="f2.jpg"/><img style="width:30%; padding:1%;" src="f3.jpg"/><h4 align="center">
<form action="woow.php" method="post"><input name="get" style="width:10px;opacity:0;"type="text" value="<?php echo $sum=0;?>" type="hidden"/><input value="Go to Ropar cart"  type="submit" name="get2" style="margin-right:28%"/></form></h4><br>
</div>
</div><div class="clear:both"></div>
<div class="left1" style="background-color:black;width:100%; min-height:100px;color:white;"><br></br><h3 align="center">copyright@sonukedia</h6></div>
</body>