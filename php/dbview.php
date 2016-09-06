<?php
session_start();
$curr =  $_SESSION["jhandle"];
$query = 'use ddb';
$db = mysql_connect(localhost,'monty','111111') or die('fuck off');
mysql_query($query, $db);
$selectSQL = "SELECT * FROM blogList";// where writer = '$curr'";
if( !( $selectRes = mysql_query( $selectSQL ) ) ){
	echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
}else{

?>
<body>
<style>
body{
  max-width: 700px;
  margin: 0 auto;
  width: 100%;
}
table{
  margin: 0 auto;
  width: 90%;
  border-radius: 10px solid white;
  font-family: sans-serif;
  padding: 10px;
}
th, tr, td{
  padding: 10px;
  margin: 5px 5px 5px 5px;
}
span{
  padding: 20px;
  margin: 0 auto;
  width: 70%;
  text-align: center;
  font-size: 24px;
}

</style>

<table border="2">
  <thead>
    <tr>
      <th>ID</th>
      <th>WriteUp Name</th>
      <th></th>
            <th></th>
                  <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="10">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){
        	$pid = $row['blog_id'];
        	$nam = $_SESSION['jhandle'];
        	echo $nam;
          echo "<tr><td>{$row['blog_id']}</td><td>{$row['blog_name']}</td>
          <td><a href=viewscript.php?id=$pid&name=$nam>View</a></td></tr>\n";
                  
		}
      }
    ?>
  </tbody>
</table>
</body>
    <?php
  }

?>


