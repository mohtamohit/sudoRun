<html>
<head>
<title> Edit Post </title>

<?php
	$db = mysql_connect(localhost,'monty','111111') or die('fuck off');
    $query  = 'use ddb';
    mysql_query($query,$db);
    $tid = $_GET['id'];
    $query = "SELECT * FROM blogList where blog_id = '$tid' ";
    $selectRes = mysql_query( $query ) ;  
    $row = mysql_fetch_assoc( $selectRes );
	$final=$row['blog_text'];
?>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<form method = "post">
            <textarea type="title" name="title" style="width: 100%;" value="<?php echo $final ?>">
            </textarea>     
            <input type="submit" name="submit" value="Post"/>    
</form>
<?php
		$curr =  $_GET['name'];
        if($_POST){
            $curtt = $_POST['title'];
            $query = "update blogList set blog_text = '$curtt' where blog_id = '$tid'"; 
            mysql_query($query,$db);
            header("Location: blog.php");
        }
?>  	
<body>
<style type="text/css">
input{
    padding: 10px;
    width: 100%;
    align: center;
    margin: 10px 0 20px 0 ;
}
body{
    margin: 0 auto;
    max-width: 800px;
}
</style>
</body>
</html>
