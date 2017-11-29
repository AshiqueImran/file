<?php

if(empty($_POST["un"])||empty($_POST["gender"])||empty($_POST["pass"])||empty($_POST["email"]))
{
	echo "<h1>Error!!fill the form properly</h1>";
}
else
{
	$text=$_POST["un"].",".$_POST["gender"].",".$_POST["pass"].",".$_POST["email"];
	$file = fopen('myfile.txt','w') or die ("error!!");

	echo $text;
	echo '<br><a href="login.php">Go to login page</a>';
	fwrite($file,$text);
	fclose($file);
}


?>