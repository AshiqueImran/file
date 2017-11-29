<?php
	session_start();
	//var_dump($_SESSION['cart']);
	echo "<h3>Your product list: </h3>";
	foreach ($_SESSION['cart'] as $key => $value) {
		echo $value ."<br>";
	}

	echo '<br> <a href="action.php">go back to shopping</a>';

?>