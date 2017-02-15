<?php 
$con = mysqli_connect("localhost","root","","wow");
if(isset($_POST['shop'])){
	$let=0;
}


if(isset($_POST['login'])){
$let=0;
	$user=$_POST['user']; $pass=$_POST['pass']; 
if($user=="sonu55"&&$pass=="supercoder") $let=1;}

if(isset($_POST['update'])){
	$let=1;
	 $pa=$_POST['pa']; 
	$ca=$_POST['ca'];
	$ia=$_POST['ia'];
	$ba=$_POST['ba'];
	$fa=$_POST['fa'];
		
		$df = mysqli_query($con, "UPDATE food SET avail='$pa' WHERE  name='pizza'");		
		$df = mysqli_query($con, "UPDATE food SET avail='$ca' WHERE  name='chowmin'");	
		$df = mysqli_query($con, "UPDATE food SET avail='$ia' WHERE  name='ice cream'");	
		$df = mysqli_query($con, "UPDATE food SET avail='$ba' WHERE  name='burger'");	
		$df = mysqli_query($con, "UPDATE food SET avail='$fa' WHERE  name='franch fries'");	
	}
	$i=1;

	$df = mysqli_query($con, "SELECT name,price,avail FROM food");{
			
		while($ri = mysqli_fetch_array($df)){
		
			if($i==1) { $pizza=$ri['name']; $pp=$ri['price']; $pa=$ri['avail']; };
			if($i==2){$chowmin=$ri['name'];$cp=$ri['price'];$ca=$ri['avail'];};
			if($i==3){$ice_cream=$ri['name'];$ip=$ri['price'];$ia=$ri['avail'];};
			if($i==4){$burger=$ri['name'];$bp=$ri['price'];$ba=$ri['avail'];};
			if($i==5){$fries=$ri['name'];$fp=$ri['price'];$fa=$ri['avail'];};
			
			$i++;
	}}
			?>

<!doctype html>
<html>
<head><title>shop</title>
</head>
<body>
<div class="head1" style="min-height:100px; background-color:orange;margin-left:50px;"><h1>Shop Point</h1>
<div class="head2" style="min-height:400px; background-color:black; color:white; font-size:20px;text-align:center;"><br><br>
<?php 

if($let==0){
echo '<form action="shop.php" method="post" style="background-color:lightgreen;margin-left:20%; width:50%;" align="center"><br><br>

						<input type="text" name="user" placeholder="username"/><br><br>
						<input type="text"  name="pass" placeholder="password"/><br><br>
<input type="submit" value="Login" name="login"/></form>';};
if($let==1){
	echo '<br>
	<br>
	<br><hr><form action="shop.php" method="post" style="background-color:lightgreen;margin-left:20%; width:50%;" align="center">
	<table style="color:white;" align="center"><tr><td>'.$pizza.'</td><td><input type="text" value="'.$pa.'" name="pa"/></td></tr>
		<tr><td>'.$chowmin.'</td><td><input type="text" value="'.$ca.'" name="ca"/></td></tr>
		<tr><td>'.$ice_cream.'</td><td><input type="text" value="'.$ia.'" name="ia"/></td></tr>
		<tr><td>'.$burger.'</td><td><input type="text" value="'.$ba.'" name="ba"/></td></tr>
		<tr><td>'.$fries.'</td><td><input type="text" value="'.$fa.'" name="fa"/></td></tr>
		</table>
		<br><br>
		<input type="submit" value="update" name="update"/><br><hr><br><br><input align="center" type="submit" value="logout" name="shop"/><br><hr>
</form>';};
		?>