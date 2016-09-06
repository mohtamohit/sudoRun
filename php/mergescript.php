<?php
	$idd = $_GET['id'];
	echo $idd;
	echo $_GET['name'];
	$db = mysql_connect(localhost,'monty','111111') or die('fuck off');
	$query = 'use ddb';
	mysql_query($query,$db);

	$query = "insert into blogList select * from ModPosts where blog_id = '$idd'";
	 
	mysql_query($query,$db);
	$query = "delete from ModPosts where blog_id = '$idd'";
	mysql_query($query,$db);
	header("Location: requests.php");
?>
