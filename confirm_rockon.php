<?php
echo 'blalal';
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

	<a href="#myModal" class="btn btn-success" data-toggle="modal">Proceed To Payment</a>
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->	
			<div class="modal-content">
				<div class= "modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" ><span class="glyphicon glyphicon-star"></span>Confirmation Box</h4>
				</div>
				<div class="modal-body" style="padding:40px 50px;">
				<form role="form">
                   <div class="form-group">
                    <label for="u"><span class="glyphicon glyphicon-film"></span> You have selected the tickets</label>
                      
                      </div>
                      <div class="form-group">
                    <label for="p"><span class="glyphicon glyphicon-question-sign"></span> Do you WANT to continue?</label>
                </div>
			 
			 
		         </form>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<a href="payment.php" class="btn btn-success">Proceed</a>
				</div>
			</div>
		</div>
	</div>

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
