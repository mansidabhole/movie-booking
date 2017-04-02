<?php
require 'selectcinemax_1.php';
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
$selected = mysql_select_db("rock_on",$con);
$requested_page = $_POST['theatre'];
switch($requested_page) {
  case "1":{
	  $requested_time = $_POST['timing'];
    switch($requested_time) {
  case "o1":{
// FOR cinemax_1
//row A
if(isset($_POST['a1']))
{	
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='a1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a2']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='a2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a3']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='a3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a4']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='a4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a5']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='a5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a6']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='a6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
mysql_close($con);
}

if(isset($_POST['a7']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='a7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}



if(isset($_POST['a8']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='a8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a9']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='a9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a10']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='a10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
//row B
if(isset($_POST['b1']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='b1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b2']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='b2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b3']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='b3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b4']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='b4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b5']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='b5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b6']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='b6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b7']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='b7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b8']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='b8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b9']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='b9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b10']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='b10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row C
if(isset($_POST['c1']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='c1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c2']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='c2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c3']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='c3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c4']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='c4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c5']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='c5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c6']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='c6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c7']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='c7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c8']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='c8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c9']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='c9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c10']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='c10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row D
if(isset($_POST['d1']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='d1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d2']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='d2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d3']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='d3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d4']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='d4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d5']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='d5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d6']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='d6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d7']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='d7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d8']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='d8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d9']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='d9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d10']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='d10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row E
if(isset($_POST['e1']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='e1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e2']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='e2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e3']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='e3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e4']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='e4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e5']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='e5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e6']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='e6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e7']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='e7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e8']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='e8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e9']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='e9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e10']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='e10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row F
if(isset($_POST['f1']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='f1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f2']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='f2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f3']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='f3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f4']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='f4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f5']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='f5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f6']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='f6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f7']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='f7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f8']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='f8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f9']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='f9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f10']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='f10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
//row G
if(isset($_POST['g1']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='g1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g2']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='g2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g3']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='g3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g4']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='g4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g5']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='g5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g6']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='g6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g7']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='g7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g8']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='g8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g9']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='g9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g10']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='g10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row H
if(isset($_POST['h1']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='h1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h2']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='h2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h3']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='h3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h4']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='h4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h5']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='h5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h6']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='h6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h7']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='h7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h8']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='h8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h9']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='h9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h10']))
{
$query1="UPDATE cinemax_1 SET `seatstatus`=1 WHERE `no`='h10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
break;
  }
 case "o2":{
//FOR CINEMAX_2
//row A
if(isset($_POST['a1']))
{	
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='a1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a2']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='a2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a3']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='a3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a4']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='a4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a5']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='a5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a6']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='a6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
mysql_close($con);
}

if(isset($_POST['a7']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='a7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}



if(isset($_POST['a8']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='a8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a9']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='a9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a10']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='a10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
//row B
if(isset($_POST['b1']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='b1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b2']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='b2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b3']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='b3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b4']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='b4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b5']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='b5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b6']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='b6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b7']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='b7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b8']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='b8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b9']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='b9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b10']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='b10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row C
if(isset($_POST['c1']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='c1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c2']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='c2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c3']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='c3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c4']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='c4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c5']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='c5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c6']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='c6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c7']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='c7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c8']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='c8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c9']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='c9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c10']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='c10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row D
if(isset($_POST['d1']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='d1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d2']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='d2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d3']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='d3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d4']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='d4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d5']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='d5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d6']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='d6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d7']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='d7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d8']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='d8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d9']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='d9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d10']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='d10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row E
if(isset($_POST['e1']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='e1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e2']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='e2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e3']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='e3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e4']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='e4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e5']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='e5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e6']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='e6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e7']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='e7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e8']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='e8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e9']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='e9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e10']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='e10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row F
if(isset($_POST['f1']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='f1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f2']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='f2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f3']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='f3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f4']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='f4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f5']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='f5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f6']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='f6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f7']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='f7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f8']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='f8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f9']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='f9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f10']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='f10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
//row G
if(isset($_POST['g1']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='g1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g2']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='g2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g3']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='g3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g4']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='g4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g5']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='g5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g6']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='g6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g7']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='g7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g8']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='g8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g9']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='g9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g10']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='g10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row H
if(isset($_POST['h1']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='h1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h2']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='h2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h3']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='h3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h4']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='h4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h5']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='h5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h6']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='h6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h7']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='h7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h8']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='h8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h9']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='h9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h10']))
{
$query1="UPDATE cinemax_2 SET `seatstatus`=1 WHERE `no`='h10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
break;
 }
case "o3":{
// for cinemax_3
//row A
if(isset($_POST['a1']))
{	
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='a1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a2']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='a2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a3']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='a3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a4']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='a4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a5']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='a5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a6']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='a6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
mysql_close($con);
}

if(isset($_POST['a7']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='a7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}



if(isset($_POST['a8']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='a8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a9']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='a9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a10']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='a10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
//row B
if(isset($_POST['b1']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='b1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b2']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='b2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b3']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='b3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b4']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='b4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b5']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='b5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b6']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='b6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b7']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='b7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b8']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='b8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b9']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='b9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b10']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='b10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row C
if(isset($_POST['c1']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='c1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c2']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='c2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c3']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='c3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c4']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='c4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c5']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='c5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c6']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='c6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c7']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='c7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c8']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='c8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c9']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='c9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c10']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='c10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row D
if(isset($_POST['d1']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='d1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d2']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='d2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d3']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='d3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d4']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='d4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d5']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='d5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d6']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='d6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d7']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='d7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d8']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='d8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d9']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='d9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d10']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='d10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row E
if(isset($_POST['e1']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='e1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e2']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='e2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e3']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='e3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e4']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='e4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e5']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='e5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e6']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='e6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e7']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='e7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e8']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='e8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e9']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='e9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e10']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='e10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row F
if(isset($_POST['f1']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='f1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f2']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='f2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f3']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='f3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f4']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='f4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f5']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='f5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f6']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='f6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f7']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='f7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f8']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='f8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f9']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='f9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f10']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='f10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
//row G
if(isset($_POST['g1']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='g1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g2']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='g2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g3']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='g3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g4']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='g4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g5']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='g5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g6']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='g6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g7']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='g7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g8']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='g8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g9']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='g9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g10']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='g10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row H
if(isset($_POST['h1']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='h1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h2']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='h2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h3']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='h3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h4']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='h4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h5']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='h5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h6']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='h6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h7']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='h7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h8']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='h8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h9']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='h9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h10']))
{
$query1="UPDATE cinemax_3 SET `seatstatus`=1 WHERE `no`='h10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
	
break;
}
	}
	break;
  }
 
 case "2":{ $requested_time=$_POST['timing'];
 switch($requested_time){
	 case "o1":{
		 //for pvr_1
		 //row A
if(isset($_POST['a1']))
{	
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='a1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a2']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='a2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a3']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='a3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a4']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='a4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a5']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='a5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a6']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='a6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
mysql_close($con);
}

if(isset($_POST['a7']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='a7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}



if(isset($_POST['a8']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='a8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a9']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='a9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a10']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='a10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
//row B
if(isset($_POST['b1']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='b1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b2']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='b2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b3']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='b3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b4']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='b4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b5']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='b5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b6']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='b6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b7']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='b7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b8']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='b8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b9']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='b9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b10']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='b10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row C
if(isset($_POST['c1']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='c1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c2']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='c2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c3']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='c3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c4']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='c4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c5']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='c5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c6']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='c6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c7']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='c7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c8']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='c8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c9']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='c9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c10']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='c10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row D
if(isset($_POST['d1']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='d1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d2']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='d2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d3']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='d3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d4']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='d4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d5']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='d5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d6']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='d6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d7']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='d7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d8']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='d8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d9']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='d9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d10']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='d10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row E
if(isset($_POST['e1']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='e1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e2']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='e2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e3']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='e3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e4']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='e4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e5']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='e5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e6']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='e6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e7']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='e7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e8']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='e8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e9']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='e9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e10']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='e10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row F
if(isset($_POST['f1']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='f1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f2']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='f2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f3']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='f3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f4']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='f4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f5']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='f5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f6']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='f6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f7']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='f7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f8']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='f8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f9']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='f9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f10']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='f10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
//row G
if(isset($_POST['g1']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='g1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g2']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='g2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g3']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='g3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g4']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='g4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g5']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='g5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g6']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='g6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g7']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='g7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g8']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='g8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g9']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='g9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g10']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='g10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row H
if(isset($_POST['h1']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='h1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h2']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='h2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h3']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='h3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h4']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='h4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h5']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='h5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h6']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='h6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h7']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='h7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h8']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='h8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h9']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='h9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h10']))
{
$query1="UPDATE pvr_1 SET `seatstatus`=1 WHERE `no`='h10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
		 break;
	 }
  case "o2":{
	  //for pvr_2
	  //row A
if(isset($_POST['a1']))
{	
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='a1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a2']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='a2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a3']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='a3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a4']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='a4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a5']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='a5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a6']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='a6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
mysql_close($con);
}

if(isset($_POST['a7']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='a7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}



if(isset($_POST['a8']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='a8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a9']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='a9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a10']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='a10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
//row B
if(isset($_POST['b1']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='b1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b2']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='b2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b3']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='b3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b4']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='b4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b5']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='b5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b6']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='b6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b7']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='b7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b8']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='b8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b9']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='b9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b10']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='b10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row C
if(isset($_POST['c1']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='c1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c2']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='c2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c3']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='c3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c4']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='c4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c5']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='c5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c6']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='c6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c7']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='c7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c8']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='c8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c9']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='c9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c10']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='c10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row D
if(isset($_POST['d1']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='d1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d2']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='d2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d3']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='d3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d4']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='d4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d5']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='d5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d6']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='d6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d7']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='d7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d8']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='d8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d9']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='d9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d10']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='d10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row E
if(isset($_POST['e1']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='e1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e2']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='e2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e3']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='e3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e4']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='e4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e5']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='e5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e6']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='e6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e7']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='e7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e8']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='e8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e9']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='e9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e10']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='e10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row F
if(isset($_POST['f1']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='f1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f2']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='f2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f3']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='f3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f4']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='f4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f5']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='f5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f6']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='f6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f7']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='f7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f8']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='f8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f9']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='f9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f10']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='f10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
//row G
if(isset($_POST['g1']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='g1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g2']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='g2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g3']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='g3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g4']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='g4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g5']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='g5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g6']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='g6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g7']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='g7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g8']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='g8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g9']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='g9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g10']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='g10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row H
if(isset($_POST['h1']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='h1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h2']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='h2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h3']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='h3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h4']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='h4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h5']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='h5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h6']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='h6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h7']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='h7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h8']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='h8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h9']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='h9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h10']))
{
$query1="UPDATE pvr_2 SET `seatstatus`=1 WHERE `no`='h10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
	  
	  break;
  }
  case "o3":{
	  //for pvr_3
	  //row A
if(isset($_POST['a1']))
{	
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='a1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a2']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='a2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a3']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='a3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a4']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='a4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a5']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='a5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a6']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='a6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
mysql_close($con);
}

if(isset($_POST['a7']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='a7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}



if(isset($_POST['a8']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='a8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a9']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='a9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['a10']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='a10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
//row B
if(isset($_POST['b1']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='b1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b2']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='b2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b3']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='b3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b4']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='b4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b5']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='b5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b6']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='b6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b7']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='b7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b8']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='b8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b9']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='b9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['b10']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='b10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row C
if(isset($_POST['c1']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='c1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c2']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='c2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c3']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='c3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c4']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='c4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c5']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='c5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c6']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='c6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c7']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='c7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c8']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='c8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c9']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='c9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['c10']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='c10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row D
if(isset($_POST['d1']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='d1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d2']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='d2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d3']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='d3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d4']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='d4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d5']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='d5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d6']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='d6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d7']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='d7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d8']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='d8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d9']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='d9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['d10']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='d10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row E
if(isset($_POST['e1']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='e1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e2']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='e2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e3']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='e3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e4']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='e4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e5']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='e5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e6']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='e6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e7']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='e7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e8']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='e8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e9']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='e9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['e10']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='e10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row F
if(isset($_POST['f1']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='f1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f2']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='f2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f3']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='f3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f4']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='f4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f5']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='f5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f6']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='f6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f7']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='f7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f8']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='f8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f9']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='f9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['f10']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='f10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
//row G
if(isset($_POST['g1']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='g1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g2']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='g2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g3']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='g3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g4']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='g4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g5']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='g5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g6']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='g6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g7']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='g7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g8']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='g8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g9']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='g9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['g10']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='g10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

//row H
if(isset($_POST['h1']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='h1'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h2']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='h2'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h3']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='h3'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h4']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='h4'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h5']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='h5'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h6']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='h6'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h7']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='h7'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h8']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='h8'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h9']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='h9'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}

if(isset($_POST['h10']))
{
$query1="UPDATE pvr_3 SET `seatstatus`=1 WHERE `no`='h10'";	
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
	header("location:booknow.php");
}
}
	  
	  break;
  }
 }
	 
 }
}
mysql_close($con);
?>