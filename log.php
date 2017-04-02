<style type="text/css">
.jumbotron {
     background-color: #f4511e; /* Orange */
     color: #ffffff;
    }
	</style>

<?php
require 'users.php';
require 'general.php';
session_start();
//header("Content-type: text/css");
// connection with database server
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}

else	
{
echo "Server connection established";
}

//connection with database

$selected = mysql_select_db("login",$con);
//isset is used to manage the error of undefined 
if(isset($_POST["submit_btn"]))
{

$name=$_POST['n'];
$uname = $_POST['u']; 
if (user_exists($uname)==true)
 {
	echo 'Username already taken.';
	die();
 }
$pword = $_POST['p'];
$number = $_POST['c']; 
$email = mysql_real_escape_string($_POST['e']);
$gender = $_POST['g']; 
$yearOfBirth = mysql_real_escape_string($_POST['DOByear']);
$monthOfBirth = mysql_real_escape_string($_POST['DOBmonth']);
$dateOfBirth = mysql_real_escape_string($_POST['DOBday']);
$date = $yearOfBirth.'-'.$monthOfBirth.'-'.$dateOfBirth;
$secq = $_POST['q'];
$seca = $_POST['sa'];
$query1= "INSERT INTO user(name, username, password, contact, email, gender, dob, question, answer) VALUES('$name','$uname','$pword',$number,'$email','$gender','$date','$secq','$seca')";
$res=mysql_query($query1,$con);
if(!$res)
{
	die('could not enter data:'.mysql_error());
}
else
{
//	echo "<span class=\"jumbotron\"> successful </span>";
	//  echo '<a href="register.html"> <br> Go back to the main page</a>.';
	header("location:index.html");


}

mysql_close($con);

}
?>
