<?php
  session_start();
?>

<html>
	<head>
		<title> SignUp </title>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<style>
		/*dark background to support form theme*/
body{
  background:url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/dark_wall.png);
  width: 50%;
  margin: 0 auto;
}

/*sass variables used*/
$full:100%;
$auto:0 auto;
$align:center;

@mixin disable{
  outline:none;
  border:none;
}

@mixin easeme{
  -webkit-transition:1s ease;
  -moz-transition:1s ease;
  -o-transition:1s ease;
  -ms-transition:1s ease;
  transition:1s ease;
}

/*site container*/
.wrapper{
  width:420px;
  margin:$auto;
}

h1{
  text-align:$align;
  padding:30px 0px 0px 0px;
  font:25px Oswald;
  color:#FFF;
  text-transform:uppercase;
  text-shadow:#000 0px 1px 5px;
  margin:0px;
}

p{
  font:13px Open Sans;
  color:#6E6E6E;
  text-shadow:#000 0px 1px 5px;
  margin-bottom:30px;
}

.form{
  width:$full;
}

input[type="text"],input[type="password"]{
  width:98%;
  padding:15px 0px 15px 8px;
  border-radius:5px;
  box-shadow:inset 4px 6px 10px -4px rgba(0,0,0,0.3), 0 1px 1px -1px rgba(255,255,255,0.3);
	background:rgba(0,0,0,0.2);
  @include disable;
  border:1px solid rgba(0,0,0,1);
  margin-bottom:10px;
  color:#6E6E6E;
  text-shadow:#000 0px 1px 5px;
}

input[type="submit"]{
  width:100%;
  padding:15px;
  border-radius:5px;
  @include disable;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#28D2DE), to(#1A878F));
  background-image: -webkit-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -moz-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -o-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: linear-gradient(#28D2DE 0%, #1A878F 100%);
  font:14px Oswald;
  color:#FFF;
  text-transform:uppercase;
  text-shadow:#000 0px 1px 5px;
  border:1px solid #000;
  opacity:0.7;
	-webkit-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
  -moz-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
	box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7);
  border-top:1px solid rgba(255,255,255,0.8)!important;
  -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(50%, transparent), to(rgba(255,255,255,0.2)));
}

input:focus{
  box-shadow:inset 4px 6px 10px -4px rgba(0,0,0,0.7), 0 1px 1px -1px rgba(255,255,255,0.3);
  background:rgba(0,0,0,0.3);
  @include easeme;
}

input[type="submit"]:hover{
  opacity:1;
  cursor:pointer;
}

.name-help,.paswd{
  display:none;
  padding:0px;
  margin:0px 0px 15px 0px;
}

.optimize{
  position:fixed;
  right:3%;
  top:0px;
}
</style>
	</head>
	<body>
	<form method = "post">
	<input type = "text" name = "handle" placeholder="Handle" />
	<input type="text" class="name" placeholder="Name">
    <div>
      <p class="name-help">Please enter your first and last name.</p>
    </div>
    <input type = "password" name = "pwd" placeholder="Password" />
     <div>
      <p class="paswd">Please enter your password carefully.</p>
    </div>
    <input type="submit" class="submit" value="Register">
	</form>
	<?php
		//echo $_POST;
		if($_POST){
			$db = mysql_connect(localhost,'monty','111111') or die('fuck off');
			$query  = 'use ddb';
			mysql_query($query, $db);
			$thandle = $_POST['handle'];
			$tname = $_POST['name'];
			$tpassword = $_POST['pwd'];
			
			$query = "select * from userList where userList.handle='$thandle'";
			
			if(mysql_num_rows(mysql_query($query,$db))==0){
				echo "FEQW";
				$query = "insert into userList (name, handle, password) values ('$tname', '$thandle','$tpassword')";
				mysql_query($query,$db);
        $_SESSION["jhandle"]=$thandle;
                echo $_SESSION["jhandle"];
                header("Location: blog.php");
				// account created
			}	
			else{
				//make a prompt message
			}
			echo 'success';
		}
	?>
	</body>
	<script>
	$(".name").focus(function(){
  $(".name-help").slideDown(500);
}).blur(function(){
  $(".name-help").slideUp(500);
});

$(".email").focus(function(){
  $(".paswd").slideDown(500);
}).blur(function(){
  $(".paswd").slideUp(500);
});
</script>
</html>