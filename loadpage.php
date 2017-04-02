<?php
$requested_page = $_POST['theatre'];

switch($requested_page) {
  case "1":{
	  $requested_time = $_POST['timing'];
    switch($requested_time) {
  case "o1":{
    header("Location: booknow.php");
  break;
  }
  case "o2":
    header("Location: booknow2.php");
  break;
  }
  break;
  }
  case "2":{
	  echo 'blue';
	  $requested_time = $_POST['timing'];
    switch($requested_time) {
  case "o1":
    header("Location: register.php");
  break;
  case "o2":
    header("Location: general.php");
  break;
  }
  }
    
}
?>