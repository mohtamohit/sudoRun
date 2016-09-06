<?php
	$db = mysql_connect(localhost,'monty','111111') or die('fuck off');
	$query = 'use ddb';
	mysql_query($query, $db);
	$cur = $_GET['id'];
	$query = "delete from blogList where blog_id='$cur'";
	mysql_query($query,$db);
	//echo $_GET['name'];
	
	header("Location: blog.php");
?>
