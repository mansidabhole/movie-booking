<?php
session_start();
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}

//connection with database

$selected = mysql_select_db("login",$con);
$username=$_SESSION['username'];
$answer=$_SESSION['answer'];
$user_answer=$_POST['sec_ans'];
print_r($answer);
echo "\n";
echo $user_answer;
$string = implode(';', $answer);
echo "\n";
if(strcmp($user_answer,$string)==0)
{
	$query= mysql_query("SELECT `password` FROM `USER` WHERE `username`='$username'");
	$password= mysql_fetch_assoc($query);
	$_SESSION['password']=$password;
	header("location:get_password.php");
}
else
{
	echo 'Oops!Wrong answer';	
}
?>
