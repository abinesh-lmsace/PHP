<?php
	if(!empty($_GET['first_name']) && !empty($_GET['last_name'])){
		echo "<h3>First Name: " . $_GET['first_name'] . "<br /> " .  "Last Name: " . $_GET['last_name'] . "</h3>";
	}else{
		echo "Add name";
	}
	echo "<br>";
	echo "Get data from another file a href tag to this file URL";
	echo "<br>";
	if($_GET["firstname"] && $_GET["lastname"]){
		echo $_GET["firstname"] . $_GET["lastname"];
	}else{
		echo "Click on Welcome link in hello2.php to show the data";
	}
	echo "<br>";
	echo $_COOKIE["cookiename"];
	setcookie("cookiename","Value of cookie",-1,"/");
?>