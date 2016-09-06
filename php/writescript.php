
<html>
<head>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<title>Subit your Blog post here</title>
<form method = "post">
            <input type = "text" name = "title" placeholder="Title" />
            <textarea name="content" style="width: 100%;">
                Type your content here.
            </textarea>

            <input type="submit" name="submit" value="Post"/>
</form>

<?php
		$curr =  $_GET['name'];
        if($_POST){
            $db = mysql_connect(localhost,'monty','111111') or die('fuck off');
            $query  = 'use ddb';
            mysql_query($query, $db);
            /*
            	check list based input for tags 
            	// your code goes here 
            */
            $curt = $_POST['title'];
            $curtt = $_POST['content'];
            $idd = $_GET['id'];
            $nam = $_GET['name'];
            echo $curtt;
            $query = "insert into ModPosts(blog_id, writer, blog_name, Competitive_Programming, Machine_Learning, Parallel_Computing, Artificial_Intelligence, Networking,blog_text) values('$idd', '$curr','$curt',1,1,1,0,0,'$curtt')";
            
            mysql_query($query,$db);
            echo 'success';
            header("Location: blog.php");
        }
?>

</head>
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