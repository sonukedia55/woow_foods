<?php
$con = mysqli_connect("localhost","root","","wow");
if(isset($_POST['get2'])){
	$p=0;
	$choice=1;
	$e='';
	$df = mysqli_query($con, "SELECT name,price,avail FROM food");{
			$i=1;
		while($ri = mysqli_fetch_array($df)){
		
			if($i==1) { $pizza=$ri['name']; $pp=$ri['price']; $pa=$ri['avail']; };
			if($i==2){$chowmin=$ri['name'];$cp=$ri['price'];$ca=$ri['avail'];};
			if($i==3){$ice_cream=$ri['name'];$ip=$ri['price'];$ia=$ri['avail'];};
			if($i==4){$burger=$ri['name'];$bp=$ri['price'];$ba=$ri['avail'];};
			if($i==5){$fries=$ri['name'];$fp=$ri['price'];$fa=$ri['avail'];};
			
			$i++;
	}}
	}


if(isset($_POST['add'])){
	$df = mysqli_query($con, "SELECT name,price,avail FROM food");{
			$i=1;
		while($ri = mysqli_fetch_array($df)){
		
			if($i==1) { $pizza=$ri['name']; $pp=$ri['price']; $pa=$ri['avail']; };
			if($i==2){$chowmin=$ri['name'];$cp=$ri['price'];$ca=$ri['avail'];};
			if($i==3){$ice_cream=$ri['name'];$ip=$ri['price'];$ia=$ri['avail'];};
			if($i==4){$burger=$ri['name'];$bp=$ri['price'];$ba=$ri['avail'];};
			if($i==5){$fries=$ri['name'];$fp=$ri['price'];$fa=$ri['avail'];};
			
			$i++;
	}}
	$qp=0;$qb=0;$qc=0;$qi=0;$qf=0;
	if($pa==1)$qp=$_POST['quantityp'];
	if($ba==1)$qb=$_POST['quantityb'];
	if($fa==1)$qf=$_POST['quantityf'];
	if($ca==1)$qc=$_POST['quantityc'];
	if($ia==1)$qi=$_POST['quantityi'];
	$p = $_POST['total'];
	$choice = $_POST['price'];
	$e = $_POST['nam'];
	if($qp>0) {$a=$pp;$a*=$qp;$p+=$a;$e.='<tr><td>'.$qp.' pizza</td><td>'.$a.'</td></tr>';};
	if($qc>0) {$a=$cp;$a*=$qc;$p+=$a;$e.='<tr><td>'.$qc.' chowmin</td><td>'.$a.'</td></tr>';};
	if($qi>0) {$a=$ip;$a*=$qi;$p+=$a;$e.='<tr><td>'.$qi.' ice cream</td><td>'.$a.'</td></tr>';};
	if($qb>0)  {$a=$bp;$a*=$qb;$p+=$a;$e.='<tr><td>'.$qb.' burger</td><td>'.$a.'</td></tr>';};
	if($qf>0)  {$a=$fp;$a*=$qf;$p+=$a;$e.='<tr><td>'.$qf.' fries</td><td>'.$a.'</td></tr>';}
	
	}

?>
<!doctype html>

<html>
<head><title>your-cart</title>
<style>.left1 input[type=submit]{background-color:green; width:60%;margin-left:28%;height:40px; color:white; font-size:15px;}
input[type=submit]:hover{background-color:lightgreen;}
input[type=text] {width:20px;background-color:pink;}

</style>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="lightblue">

<img src="back2.png" style="padding-left:1%;width:98%; height:145px;"/>
<div class="head1" style="background-color:white; margin-left:10%;margin-right:10%;margin-top:-40px;"><br><br>
<div id="r1" class="left1" style="width:30%; background-color:lightgreen;min-height:700px;margin-top:-40px;"><br></br><a style="text-decoration:none;" href="smartbuy2.php"><h1  align="center" style="background-color:pink;">HOME</h1></a>
	<br></br><h1 align="center"><u>YOUR CART</u></h1><br></br><img src="cart.png" align="center" style="margin-left:28%;"><br></br><h3 align="center"><table style="margin-left:5%; width:90%;"><?php echo $e;?></table></h3><h3 align="center"><br><?php echo "Rs. "; echo $p;?></h3></br>
	
	<form action="cart.php" method="post">
	<input type="text" style="opacity:0;width:10px;" value="<?php echo $e;?>" name="forward"/>
	<input type="text" style="opacity:0; width:10px;" value="<?php echo $p;?>" name="money"/>
	<?php if($p>0){
	echo '<input align="center"type="submit" name="carty" value="Buy" style=" width:50%;margin-left:17%;height:60px; color:white; font-size:30px;"/></form>';}?><br><br><form action="woow.php" method="post"><input align="center"type="submit" name="get2" value="Reset" style="background-color:red; width:40%;margin-left:32%;height:40px; color:white; font-size:20px;"/></form>

</div>
<div class="left1" style="width:70%;min-height:660px;background-color:white; ">
	<h2 align="center">....WOW Items.....<br>....Select Your Choice...</h2><br></br><hr style="width:80%; margin-left:10%;"/><hr style="width:80%; margin-left:10%;"/><br>
	<table style="border:none;text-align:center;margin-left:10%;">
		<?php 
		if($pa==1){echo '<tr><td><img src="pizza.jpg"/></td>
		<td>pizza<br>'.$pp.'/-</td>
			<td><form action="woow.php" method="post">Quantity:<br><br>&nbsp;
			<input  name="quantityp" type="text" value="0" />
			<input style="opacity:0;" name="nam" type="text" value="'.$e.'" type="hidden"/>			
		<input style="opacity:0;" name="price" type="text" value="1" type="hidden"/></td></tr>';};
						
		
		if($ca==1){echo '<tr><td><img src="chowmin.jpg"/></td>
		<td>chowmin<br/>'.$cp.'/-</td><td>
		
			<input style="opacity:0;" name="price" type="text" value="2" type="hidden"/>
			<input  name="quantityc" type="text" value="0" />
			<input style="opacity:0;" name="nam" type="text" value="'.$e.'" type="hidden"/>
			<input style="opacity:0;" name="total" type="text" value="'.$p.'" type="hidden"/>
			</td></tr>';};
		
		if($ia==1){echo '<tr><td><img src="ice.jpg"/></td><td>ice cream<br/>'.$ip.'/-</td>
		<td>
					<input style="opacity:0;" name="nam" type="text" value="'.$e.'" type="hidden"/>
					<input  name="quantityi" type="text" value="0" />
					<input  style="opacity:0;" name="total" type="text" value="'.$p.'" type="hidden"/>
					<input style="opacity:0;" name="price" type="text" value="3" type="hidden"/>
					</td></tr>';};
		
		if($ba==1){echo '<tr><td><img src="burger.jpg"/></td><td>burger<br/>'.$bp.'/-</td>
		<td>
		<input style="opacity:0;" name="nam" type="text" value="'.$e.'" type="hidden"/>
		<input  name="quantityb" type="text" value="0" />
		<input style="opacity:0;" name="total" type="text" value="'.$p.'" type="hidden"/>
		<input style="opacity:0;" name="price" type="text" value="4" type="hidden"/>
		</td></tr>';};
		
		if($fa==1){echo '<tr><td><img src="franch.png"/></td><td>franch fries<br/>'.$fp.'/-</td>
		<td>
		<input style="opacity:0;" name="total" type="text" value="'.$p.'" type="hidden"/>
		<input  name="quantityf" type="text" value="0" />
		<input style="opacity:0;" name="price" type="text" value="5" type="hidden"/>
		<input style="opacity:0;" name="nam" type="text" value="'.$e.'" type="hidden"/>
		</td></tr>';};?>
	<br>
	<input type="submit" name="add" style="height:70px;width:50%;margin-right:10%;"value="Add to cart"/><br><br><hr><br></form>
	</table>

</div>
</div>
</body>
</html>