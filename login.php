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

require 'users.php';
require 'general.php';
 
 //user data
 if(logged_in()==true)
 {
	$SESSION_ID= $_SESSION['ID'];  
	$user_data= user_data($SESSION_ID,'ID','name','username','password','email','contact');
 }

if(empty($_POST)==false)
 {
$uname = $_POST['u']; 
$pword = $_POST['p'];

if(empty($uname) ||  empty($pword))
{
$errors[]='You need to enter a username and password';	
}
else if(user_exists($uname)==false)
{
$errors[]='We can\'t find that username. Have you registered?';	
}
else
{
	$login= login($uname,$pword);
	if($login==false){
	$errors[]='That username/password combination is incorrect'	;
	}
	else{ 
	 $_SESSION['ID']=$login;
	 header("location: index2.php");
	 exit();
	}
}
 print_r($errors);
 }
?>