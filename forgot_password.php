<?php
session_start();
$errors=array();
// connection with database server
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}


//connection with database

$selected = mysql_select_db("login",$con);
$username=$_POST['user_name'];
$query= mysql_query("SELECT `question` FROM `USER` WHERE `username`='$username'");
$query1= mysql_query("SELECT `answer` FROM `USER` WHERE `username`='$username'");
$data = mysql_fetch_assoc($query);
$sec_a=mysql_fetch_assoc($query1);
$question = '`'.implode('`,`',$data).'`';
$_SESSION['answer']=$sec_a;
$_SESSION['username']=$username;
?>
<html>
  <head>
	<title>Forgot Password</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel=stylesheet type=text/css href=basic.css/>
  </head>
  <body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="#"><img src="its.jpg" width="100" height="60"></a>
      <a class="navbar-brand" href="#">It's Show Time</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Home</a></li>
      <!--<li><a href="#"></a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#myModal" data-toggle="modal" id="myBtn"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    --></ul>
  </div>
</nav>
<br>
<br>
<br>
<br>
<form method="post" action="check_password.php">
		<tr>
			<td>Your Security question is: <?php print_r($question) ?>
			<br>
		<tr>
			<td>Enter Security Answer 
			<td><textarea rows="1" cols="20" name="sec_ans"></textarea>
		<tr>
			<td><input type="submit" value="Get Password">
	</form>
</body>
</html>