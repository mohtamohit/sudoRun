<?php
	$db = mysql_connect(localhost,'monty','111111') or die('fuck off');
    $query  = 'use ddb';
    mysql_query($query,$db);
    $tid = $_GET['id'];
    $query = "SELECT * FROM blogList where blog_id = '$tid' ";
    $selectRes = mysql_query( $query ) ;  
    $row = mysql_fetch_assoc( $selectRes );
	$final=$row['blog_text'];
	$fname = $row['blog_name'];
    echo "<h1> '$fname' </h1> <br> '$final' \n"; 
?>
