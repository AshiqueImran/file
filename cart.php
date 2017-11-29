<?php
	session_start();
	if(empty($_SESSION['cart'])){
	$_SESSION['cart']=array();
	}

	array_push($_SESSION['cart'], $_GET['product']);
?>
<p>	
	Added to your cart. :) <br/>
	<a href="viewcart.php">view cart</a>
</p>