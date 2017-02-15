<?php
if(isset($_POST['get2'])){
	$p=$_POST['get'];
	$choice=1;
	$e='';
	}


if(isset($_POST['add'])){
	$p = $_POST['total'];
	$choice = $_POST['price'];
	$e = $_POST['nam'];
	if($choice==1) {$a=200;$e.='<tr><td>+1 pizza</td><td> +200/-</td></tr>';};
	if($choice==2) {$a=100;$e.='<tr><td>+1chowmin </td><td>+100/-</td></tr>';};
	if($choice==3) {$a=100;$e.='<tr><td>+1 ice cream</td><td>+100/-</td></tr>';};
	if($choice==4)  {$a=50;$e.='<tr><td>+1 burger</td><td>+50/-</td></tr>';};
	if($choice==5)  {$a=50;$e.='<tr><td>+1 fries</td><td>+50/-</td></tr>';}
	$p+=$a;
	}

?>
<!doctype html>

<html>
<head><title>your-cart</title>
<style>.left1 input[type=submit]{background-color:green; width:60%;margin-left:28%;height:40px; color:white; font-size:15px;}
input[type=text] {width:10px;}


</style>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="lightblue">

<img src="back2.png" style="padding-left:1%;width:98%; height:145px;"/>
<div class="head1" style="background-color:white; margin-left:10%;margin-right:10%;margin-top:-40px;"><br><br>
<div id="r1" class="left1" style="width:30%; background-color:lightgreen;min-height:700px;margin-top:-40px;">
	<br></br><h1 align="center"><u>YOUR CART</u></h1><br></br><img src="cart.png" align="center" style="margin-left:28%;"><br></br><h3 align="center"><table style="margin-left:5%; width:90%;"><?php echo $e;?></table></h3><h3 align="center"><br><?php echo "Rs. "; echo $p;?></h3></br><input align="center"type="submit" value="Buy" style="background-color:green; width:50%;margin-left:28%;height:60px; color:white; font-size:30px;"/>

</div>
<div class="left1" style="width:70%;min-height:660px;background-color:white; ">
	<h2 align="center">....WOW Items.....<br>....Select Your Choice...</h2><br></br><hr style="width:80%; margin-left:10%;"/><hr style="width:80%; margin-left:10%;"/><br>
	<table style="border:none;text-align:center;margin-left:10%;">
		
		<tr><td><img src="pizza.jpg"/></td>
		<td>pizza<br>200/-</td>
			<td><form action="wow_cart.php" method="post"><input style="opacity:0;" name="total" type="text" value="<?php echo $p; ?>" type="hidden"/>
						<input style="opacity:0;" name="nam" type="text" value="<?php echo $e; ?>" type="hidden"/>
						<input style="opacity:0;" name="price" type="text" value="1" type="hidden"/>
						<input value="Add to cart" type="submit" name="add"/></form></td></tr>
		
		<tr><td><img src="chowmin.jpg"/></td>
		<td>chowmin<br/>100/-</td><td>
		<form action="wow_cart.php" method="post">
			<input style="opacity:0;" name="price" type="text" value="2" type="hidden"/>
			<input style="opacity:0;" name="nam" type="text" value="<?php echo $e; ?>" type="hidden"/>
			<input style="opacity:0;" name="total" type="text" value="<?php echo $p; ?>" type="hidden"/>
			<input value="Add to cart" type="submit" name="add"/></form></td></tr>
		
		<tr><td><img src="ice.jpg"/></td><td>ice cream<br/>100/-</td>
		<td><form action="wow_cart.php" method="post">
					<input style="opacity:0;" name="nam" type="text" value="<?php echo $e; ?>" type="hidden"/>
					<input  style="opacity:0;" name="total" type="text" value="<?php echo $p; ?>" type="hidden"/>
					<input style="opacity:0;" name="price" type="text" value="3" type="hidden"/>
					<input value="Add to cart" type="submit" name="add"/></form></td></tr>
		
		<tr><td><img src="burger.jpg"/></td><td>burger<br/>50/-</td><td><form action="wow_cart.php" method="post"><input style="opacity:0;" name="nam" type="text" value="<?php echo $e; ?>" type="hidden"/><input style="opacity:0;" name="total" type="text" value="<?php echo $p; ?>" type="hidden"/><input style="opacity:0;" name="price" type="text" value="4" type="hidden"/><input value="Add to cart" type="submit" name="add"/></form></td></tr>
		
		<tr><td><img src="franch.png"/></td><td>franch fries<br/>50/-</td><td><form action="wow_cart.php" method="post"><input style="opacity:0;" name="total" type="text" value="<?php echo $p; ?>" type="hidden"/><input style="opacity:0;" name="price" type="text" value="5" type="hidden"/><input style="opacity:0;" name="nam" type="text" value="<?php echo $e; ?>" type="hidden"/><input value="Add to cart" type="submit" name="add"/></form></td></tr>
	
	
	</table>

</div>
</div>
</body>
</html>