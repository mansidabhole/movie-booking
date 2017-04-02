<?php
function user_data($ID)
{
	$data=array();
	$func_num_args= func_num_args();
	$func_get_args= func_get_args();
	 if($func_num_args>1)
	 {
		 unset($func_get_args[0]);
		 
		 $fields = '`'.implode('`,`',$func_get_args).'`';
		 $data=mysql_fetch_assoc(mysql_query("SELECT $fields from `USER` WHERE `ID`=$ID "));
		 
		 return $data;
	 }
}
function logged_in()
{
	return (isset($_SESSION['ID']))? true:false;
}
function user_exists($uname){
	$uname=sanitize($uname);
	$query=mysql_query("SELECT COUNT(`ID`) FROM `USER` WHERE `username`='$uname'");
	return (mysql_result($query,0)==1)? true:false;
}
function ID_from_username($uname){
	$uname=sanitize($uname);
	return mysql_result(mysql_query("SELECT `ID` FROM `USER` WHERE `username`='$uname'"),0,'ID');
}
 function login($uname, $pword){
	$ID= ID_from_username($uname);
    $uname=sanitize($uname);
    $pword=sanitize($pword);

 return (mysql_result(mysql_query("SELECT COUNT(`ID`) FROM `USER` WHERE `username`='$uname' AND `password`='$pword'"),0)==1)? $ID:false;	
 }
?>