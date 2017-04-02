<?php
session_start();
$_SESSION['theatre']=$_POST['theatre'];
$_SESSION['time']=$_POST['timing'];
$requested_page = $_POST['theatre'];

switch($requested_page) {
  case "1":{
	  $requested_time = $_POST['timing'];
    switch($requested_time) {
  case "o1":{
    require 'load_1.php';
  break;
  }
  case "o2":
    require 'load_2.php';
  break;
  case "o3":{
    require 'load_3.php';
  break;
  }
  }
  break;
  }
  case "2":{
	  $requested_time = $_POST['timing'];
    switch($requested_time) {
  case "o1":
    require 'load_4.php';
  break;
  case "o2":
    require 'load_5.php';
  break;
   case "o3":
    require 'load_6.php';
  break;
  }
  }
    
}

?>


 </script>
  <title>BOOKING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .jumbotron {
    background-image:url("rock_on_2.jpg");
	background-repeat:no-repeat;
	background-position:left;
	color:#000000;
    padding-top: 70px;
    padding-bottom: 70px;
    }
  .bg-1 {
    background-color: #f4511e; /* Orange */
	color: #ffffff;
	padding-top: 70px;
    padding-bottom:70px;
	}
   .logo {
    color:#ff0000;
    font-size:20px;	
	}
	.bg-2 {
    background-color: #2f2f2f;
    color: #ffffff;
	padding-top: 70px;
    padding-bottom: 70px;
	}	
  /*.navbar-nav li a:hover {
    color: #1abc9c !important;
	}
  .bg-2 {
    background-color: #2f2f2f;
    color: #ffffff;
	padding-top: 70px;
    padding-bottom: 70px;
	}*/ 
   .bg-3 {
   color:#2f2f2f;
   }	
   div.main{
	float:left;
	width:100px;
	border:2px solid black;
	padding:5px;
	height:20px;
	 border-collapse: separate;
	border-spacing:10px 20px;
}
#subdiv
{
	float:left;
        width:5px;
	border:2px solid black;
	padding:5px;	
	height:2px;
}
div.main2{
	float:left;
	width:100px;
	border:2px solid black;
	padding:5px;
	height:20px;
	   border-collapse: separate;
	border-spacing:10px 20px;
}
#subdiv2
{	float:left;
        width:5px;
	border:2px solid black;
	padding:5px;	
	height:2px;
}
div.main3{
	float:left;
	width:100px;
	border:2px solid black;
	padding:5px;
	height:20px;
	   border-collapse: separate;
	border-spacing:10px 20px;
}
#subdiv3
{	float:left;
        width:5px;
	border:2px solid black;
	padding:5px;	
	height:2px;
}
div.main4{
	float:left;
	width:100px;
	border:2px solid black;
	padding:5px;
	height:20px;
	   border-collapse: separate;
	border-spacing:10px 20px;
}
#subdiv4
{	float:left;
        width:5px;
	border:2px solid black;
	padding:5px;	
	height:2px;
}
div:focus {
    background-color:yellow;
}
.modal-header, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  .modal-body {
       background-color : black;
  }
	
  </style>	
</head>
<body class="bg-1">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="#"><img src="its.jpg" width="100" height="60"></a>
      <a class="navbar-brand" href="#">It's Show Time</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index2.php">Home</a></li>
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

<div class="jumbotron text-center">
  <h1>Tickets</h1>
  <p>Book Here</p>
</div>


<br>
<br>
<br>
&nbsp&nbsp&nbsp &nbsp
&nbsp
&nbsp
&nbsp

<br>
<br>
<br>

<br>
<br>
<br>
<form name="rock" method="post" action="book_rockon.php">
<div class="container-fluid">
	<h3>ROW A</h3>
	<div class="row">
		<div class="col-md-1">
			<input type="checkbox" name="a1" value="1" <?php echo $disablea1; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="a2" value="2" <?php echo $disablea2; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="a3" value="3" <?php echo $disablea3; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="a4" value="4" <?php echo $disablea4; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="a5" value="5" <?php echo $disablea5; ?>/>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="a6" value="6" <?php echo $disablea6; ?>>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="a7" value="7" <?php echo $disablea7; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="a8" value="8" <?php echo $disablea8; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="a9" value="9" <?php echo $disablea9; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="a10" value="10" <?php echo $disablea10; ?>>
		</div>
		
	</div>
		
	<h3>ROW B</h3>
	<div class="row">
		<div class="col-md-1">
			<input type="checkbox" name="b1" value="1" <?php echo $disableb1; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="b2" value="2" <?php echo $disableb2; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="b3" value="3" <?php echo $disableb3; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="b4" value="4" <?php echo $disableb4; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="b5" value="5" <?php echo $disableb5; ?>/>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="b6" value="6" <?php echo $disableb6; ?>>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="b7" value="7" <?php echo $disableb7; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="b8" value="8" <?php echo $disableb8; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="b9" value="9" <?php echo $disableb9; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="b10" value="10" <?php echo $disableb10; ?>>
		</div>
		
	</div>
	
	<h3>ROW C</h3>
	<div class="row">
		<div class="col-md-1">
			<input type="checkbox" name="c1" value="1" <?php echo $disablec1; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="c2" value="2" <?php echo $disablec2; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="c3" value="3" <?php echo $disablec3; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="c4" value="4" <?php echo $disablec4; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="c5" value="5" <?php echo $disablec5; ?>/>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="c6" value="6" <?php echo $disablec6; ?>>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="c7" value="7" <?php echo $disablec7; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="c8" value="8" <?php echo $disablec8; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="c9" value="9" <?php echo $disablec9; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="c10" value="10" <?php echo $disablec10; ?>>
		</div>
		
	</div>
	<h3>ROW D</h3>
	<div class="row">
		<div class="col-md-1">
			<input type="checkbox" name="d1" value="1" <?php echo $disabled1; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="d2" value="2" <?php echo $disabled2; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="d3" value="3" <?php echo $disabled3; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="d4" value="4" <?php echo $disabled4; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="d5" value="5" <?php echo $disabled5; ?>/>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="d6" value="6" <?php echo $disabled6; ?>>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="d7" value="7" <?php echo $disabled7; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="d8" value="8" <?php echo $disabled8; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="d9" value="9" <?php echo $disabled9; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="d10" value="10" <?php echo $disabled10; ?>>
		</div>
		
	</div>
	<h3>ROW E</h3>
	<div class="row">
		<div class="col-md-1">
			<input type="checkbox" name="e1" value="1" <?php echo $disablee1; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="e2" value="2" <?php echo $disablee2; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="e3" value="3" <?php echo $disablee3; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="e4" value="4" <?php echo $disablee4; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="e5" value="5" <?php echo $disablee5; ?>/>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="e6" value="6" <?php echo $disablee6; ?>>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="e7" value="7" <?php echo $disablee7; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="e8" value="8" <?php echo $disablee8; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="e9" value="9" <?php echo $disablee9; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="e10" value="10" <?php echo $disablee10; ?>>
		</div>
		
	</div>
	<h3>ROW F</h3>
     <div class="row">
		<div class="col-md-1">
			<input type="checkbox" name="f1" value="1" <?php echo $disablef1; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="f2" value="2" <?php echo $disablef2; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="f3" value="3" <?php echo $disablef3; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="f4" value="4" <?php echo $disablef4; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="f5" value="5" <?php echo $disablef5; ?>/>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="f6" value="6" <?php echo $disablef6; ?>>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="f7" value="7" <?php echo $disablef7; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="f8" value="8" <?php echo $disablef8; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="f9" value="9" <?php echo $disablef9; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="f10" value="10" <?php echo $disablef10; ?>>
		</div>
		
	</div>
	<h3>ROW G</h3>
	<div class="row">
		<div class="col-md-1">
			<input type="checkbox" name="g1" value="1" <?php echo $disableg1; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="g2" value="2" <?php echo $disableg2; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="g3" value="3" <?php echo $disableg3; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="g4" value="4" <?php echo $disableg4; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="g5" value="5" <?php echo $disableg5; ?>/>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="g6" value="6" <?php echo $disableg6; ?>>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="g7" value="7" <?php echo $disableg7; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="g8" value="8" <?php echo $disableg8; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="g9" value="9" <?php echo $disableg9; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="g10" value="10" <?php echo $disableg10; ?>>
		</div>
		
	</div>
	<h3>ROW H</h3>
	<div class="row">
		<div class="col-md-1">
			<input type="checkbox" name="h1" value="1" <?php echo $disableh1; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="h2" value="2" <?php echo $disableh2; ?>/><br>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="h3" value="3" <?php echo $disableh3; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="h4" value="4" <?php echo $disableh4; ?>/><br>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="h5" value="5" <?php echo $disableh5; ?>/>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="h6" value="6" <?php echo $disableh6; ?>>
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="h7" value="7" <?php echo $disableh7; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="h8" value="8" <?php echo $disableh8; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="h9" value="9" <?php echo $disableh9; ?>>
			
		</div>
		<div class="col-md-1">
			<input type="checkbox" name="h10" value="10" <?php echo $disableh10; ?>>
		</div>
		
	</div>
	
	<br>
	<!-- Trigger the modal with a button --> 	
	<br>
	
	 <input type="submit" name="book_submit" value="Submit"></center>
	 </form>
	

<!--to add :payment and acknowledgement-->
<!--FOOTER-->
<br>
<br>
<footer class="container-fluid bg-2 text-center" id="contact">
  <div>
  <b>
  <h4><p>&copy IT'S SHOW TIME</p>
  <p>Email Id:itsshowtime@gmail.com</p>
  <p>Mob No:97028 85311</p></h4>
  <p><h1><a href="https://www.facebook.com/"<i class="fa fa-facebook logo-1"></a></i>
  &nbsp <a href="https://www.linkedin.com/"<i class="fa fa-linkedin logo-1"></a></i>
  &nbsp <a href="https://twitter.com/"<i class="fa fa-twitter logo-1"></a></i></h1>
  </p>
  </b>
</div>  
</footer>

</body>
</html>
