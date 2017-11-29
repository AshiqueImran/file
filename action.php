<?php
session_start();
if(empty($_SESSION['loggedin']))
{
	$_SESSION['loggedin']=false;
}

$file = fopen('myfile.txt','r') or die ("error!!");

$line =fgets($file) ;

$arr= explode(",",$line);
//var_dump($arr);
if($_SESSION['loggedin']==false){
if($_POST["pass"]==$arr[2]&&$_POST["un"]==$arr[0]){
	
	$_SESSION['loggedin']=true;
	echo "logged in";
}
else{
	echo "wrong Username or Password";
	echo '<br/><a href="login.php">Go to login page</a>';
}
}


if($_SESSION['loggedin']==true)
{
?>
	<div >
		<div style="border: 1px solid black;">
		<h2>Colorpen</h2>
		<a href="cart.php?product=Colorpen">Add to Cart</a>
		</div>

		<div style="border: 1px solid black;">
		<h2>Jacket</h2>
		<a href="cart.php?product=Jacket">Add to Cart</a>
		</div>

		<div style="border: 1px solid black;">
		<h2>Sperker</h2>
		<a href="cart.php?product=Sperker">Add to Cart</a>
		</div>

		<div style="border: 1px solid black;">
		<h2>Notebook</h2>
		<a href="cart.php?product=Notebook">Add to Cart</a>
		</div>

		<div style="border: 1px solid black;">
		<h2>keyboard</h2>
		<a href="cart.php?product=keyboard">Add to Cart</a>
		</div>
	</div>
	<a href="logout.php">Logout</a>
<?php

}
?>