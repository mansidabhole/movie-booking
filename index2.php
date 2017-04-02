 <?php
 session_start();
 require 'login.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>BOOK TICKETS 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .jumbotron {
    background-color: #f4511e; /* Orange */
    color: #ffffff;
	padding-top: 70px;
    padding-bottom: 70px;
    }
  .bg-1 {
    background-color: #1abc9c; /* Green */
	color: #ffffff;
	padding-top: 70px;
    padding-bottom: 70px;
	}
  .navbar-nav li a:hover {
    color: #1abc9c !important;
	}
  .bg-2 {
    background-color: #2f2f2f;
    color: #ffffff;
	padding-top: 70px;
    padding-bottom: 70px;
	}	
  .bg-3 {
	padding-top: 70px;
    padding-bottom: 70px;
  }	
  .logo {
    color:#1abc9c;
    font-size:20px;	
	}
  .logo-1 {
    color:#1abc9c;
    }	
    a:link { color:black;}
    a:visited { color:yellow;}
    a:hover { color:green;}
    a:active{ color:pink;} 	
  </style>	
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!--NAVIGATION BAR-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
     <a href="#"><img src="its.jpg" width="100" height="60"></a>
      <a class="navbar-brand" href="#">It's Show Time</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#home">Home</a></li>
      <li><a href="#movies">MOVIES</a></li>
      <li><a href="#trailers">TRAILERS & VIDEOS </a></li>
	  <li><a href="about_us.html">ABOUT US</a></li>
      <li><a href="#contact">CONTACT</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<span class="caret"></span> Hello, <?php echo $user_data['name'] ?>!</a>
		<ul class="dropdown-menu">
          
		  <li><a href="logout.php">LOGOUT</a></li>
        </ul>	
	  </li>
      
	</ul>
  </div>
</nav>

<div class="jumbotron text-center" id="home">
  <h1>Want to see a movie</h1>
  <h3><p>Don't wait!!! Hurry!!! <br>Book Tickets Early</p></h3>
</div>



<!--COLLAPSIBLES-->
 <div class="row bg-1" id="movies">
  <div class="col-md-4">
    <p class="text-center"><strong><center><h4>MIRZYA</h4></center></strong></p><br>
    <a href="#demo1" data-toggle="collapse">
       <img src="mirzya.jpg"  class="img-circle person" alt="Mirzya" height="350" width="350">
    </a>
    <div id="demo1" class="collapse">
	  <b><h5>
      <p>Based on the popular Mirza-Sahibaan legend</p>
	  <p>Directed by Rakeysh Omprakash Mehra</p>
	  <p><a href="booknow_mirzya.html">BOOK NOW</a></p>
	  </b></h5>
	</div>
  </div>
  <div class="col-md-4">
    <p class="text-center"><strong><center><h4>ROCK ON 2</h4></center></strong></p><br>
    <a href="#demo2" data-toggle="collapse">
      <img src="rockon2.jpg"  class="img-circle person" alt="Rock On 2" height="350" width="350">
    </a>
    <div id="demo2" class="collapse">
	<h5>
      <b><p>Indian Hindi musical drama film</p>
      <p>Directed by Shujaat Saudagar</p>
	  <p><a href="selectrockon.php">BOOK NOW</a></p>
	  </b></h5>
    </div>
  </div>
  <div class="col-md-4">
    <p class="text-center"><strong><center><h4>M.S. Dhoni: The Untold Story</center></h4></strong></p><br>
    <a href="#demo3" data-toggle="collapse">
      <img src="msd.jpg"  class="img-circle person" alt="M.S. Dhoni: The Untold Story" height="350" width="350">
    </a>
    <div id="demo3" class="collapse">
      <b><h5><p> Based on the life of Indian cricketer</p>
      <p>Mahendra Singh Dhoni</p>
      <p>Directed by Neeraj Pandey</p>
	  <p><a href="booknow_msd.html">BOOK NOW</a></p></b></h5>
    </div>
  </div>
</div>

<!--CONTAINER 2-->
<div class="row bg-1">
  <div class="col-md-4">
    <p class="text-center"><strong><center><h4>THE ACCOUNTANT</center></h4></strong></p><br>
    <a href="#demo4" data-toggle="collapse">
       <img src="accountant.jpg"  class="img-circle person" alt="The Accountant" height="350" width="350">
    </a>
    <div id="demo4" class="collapse">
	  <b><h5>
      <p>As a math savant uncooks the books for a new client,</p>
	  <p>the Treasury Department closes in on his activities</p>
	  <p>and the body count starts to rise.</p>
	  <p><a href="booknow_accountant.html">BOOK NOW</a></p>
	  </b></h5>
	</div>
  </div>
  <div class="col-md-4">
    <p class="text-center"><strong><center><h4>MAX STEEL</center></h4></strong></p><br>
    <a href="#demo5" data-toggle="collapse">
      <img src="maxsteel.jpg"  class="img-circle person" alt="Max Steel" height="350" width="350">
    </a>
    <div id="demo5" class="collapse">
      <b><h5>
	  <p>The adventures of teenager Max and alien companion Steel,</p>
      <p>who must harness and combine their tremendous new powers</p>
	  <p>to evolve into the turbo-charged superhero Max Steel. </p>
	  <p><a href="booknow_maxsteel.html">BOOK NOW</a></p>
	  </b></h5>
    </div>
  </div>
  <div class="col-md-4">
    <p class="text-center"><strong><center><h4>DESIERTO</center></h4></strong></p><br>
    <a href="#demo6" data-toggle="collapse">
      <img src="desierto.jpg"  class="img-circle person" alt="Desierto" height="350" width="350">
    </a>
    <div id="demo6" class="collapse">
      <b><h5>
	  <p>A group of people trying to cross the border</p>
      <p>from Mexico into the United States encounter a man</p>
      <p>who has taken border patrol duties into his own racist hands.</p>
	 <p><a href="booknow_desierto.html">BOOK NOW</a></p>
	 </b></h5>
    </div>
  </div>
</div>

<!--TRAILERS & VIDEOS-->
<div id="trailers">
	<div class="bg-3">
	<center><h1><span class="glyphicon glyphicon-facetime-video"></span> Trailers</h1></center>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="embed-responsive embed-responsive-16by9">
					<video controls poster="msd.jpg">
						<source src="msd.mp4" type="video/mp4">
					</video> 
				</div>
				<div class="__card-content">
				<div class="video-name" title="M.S. Dhoni: The Untold Story"><h2>M.S.Dhoni: The Untold Story</h2></div>
					<div class="likes-votes _minh-42">
						<div class="left-action _md-8">
							<span class="text"><h4>Hindi</h4></span>
						</div>
								<div class="right-action _votes" align="right">
									<span class="__text _top">
										<h4><span class="glyphicon glyphicon-thumbs-up logo"></span>
										<span class="__count">84%</span></h4>
									</span>
									<span class="__text _bottom">
										<span class="__vote-count"><h4>92120 votes</h4></span>
									</span>
								</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="embed-responsive embed-responsive-16by9">
					<video controls poster="mirzya.jpg">
						<source src="mirzya.mp4" type="video/mp4">
					</video> 
				</div>
				<div class="__card-content">
				<div class="video-name" title="Mirzya"><h2>Mirzya</h2></div>
					<div class="likes-votes _minh-42">
						<div class="left-action _md-8">
							<span class="text"><h4>Hindi</h4></span>
						</div>
								<div class="right-action _votes" align="right">
									<span class="__text _top">
										<h4><span class="glyphicon glyphicon-thumbs-up logo"></span>
										<span class="__count">49%</span></h4>
									</span>
									<span class="__text _bottom">
										<span class="__vote-count"><h4>4282 votes</h4></span>
									</span>
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--CONTAINER 2--> 
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="embed-responsive embed-responsive-16by9">
					<video controls poster="rockon2.jpg">
						<source src="rockon2.mp4" type="video/mp4">
					</video> 
				</div>
				<div class="__card-content">
				<div class="video-name" title="Rock On 2"><h2>Rock On 2</h2></div>
					<div class="likes-votes _minh-42">
						<div class="left-action _md-8">
							<span class="text"><h4>Hindi</h4></span>
						</div>
								<div class="right-action _votes" align="right">
									<span class="__text _top">
										<h4><span class="glyphicon glyphicon-thumbs-up logo"></span>
										<span class="__count">98%</span></h4>
									</span>
									<span class="__text _bottom">
										<span class="__vote-count"><h4>4153 votes</h4></span>
									</span>
								</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="embed-responsive embed-responsive-16by9">
					<video controls poster="accountant.jpg">
						<source src="accountant.mp4" type="video/mp4">
					</video> 
				</div>
				<div class="__card-content">
				<div class="video-name" title="The Accountant"><h2>The Accountant</h2></div>
					<div class="likes-votes _minh-42">
						<div class="left-action _md-8">
							<span class="text"><h4>Hindi</h4></span>
						</div>
								<div class="right-action _votes" align="right">
									<span class="__text _top">
										<h4><span class="glyphicon glyphicon-thumbs-up logo"></span>
										<span class="__count">99%</span></h4>
									</span>
									<span class="__text _bottom">
										<span class="__vote-count"><h4>1995 votes</h4></span>
									</span>
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!--CONTAINER 3--> 
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="embed-responsive embed-responsive-16by9">
					<video controls poster="maxsteel.jpg">
						<source src="maxsteel.mp4" type="video/mp4">
					</video> 
				</div>
				<div class="__card-content">
				<div class="video-name" title="Max Steel"><h2>Max Steel</h2></div>
					<div class="likes-votes _minh-42">
						<div class="left-action _md-8">
							<span class="text"><h4>Hindi</h4></span>
						</div>
								<div class="right-action _votes" align="right">
									<span class="__text _top">
										<h4><span class="glyphicon glyphicon-thumbs-up logo"></span>
										<span class="__count">95%</span></h4>
									</span>
									<span class="__text _bottom">
										<span class="__vote-count"><h4>1222 votes</h4></span>
									</span>
								</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="embed-responsive embed-responsive-16by9">
					<video controls poster="desierto.jpg">
						<source src="desierto.mp4" type="video/mp4">
					</video> 
				</div>
				<div class="__card-content">
				<div class="video-name" title="Desierto"><h2>Desierto</h2></div>
					<div class="likes-votes _minh-42">
						<div class="left-action _md-8">
							<span class="text"><h4>Hindi</h4></span>
						</div>
								<div class="right-action _votes" align="right">
									<span class="__text _top">
										<h4><span class="glyphicon glyphicon-thumbs-up logo"></span>
										<span class="__count">94%</span></h4>
									</span>
									<span class="__text _bottom">
										<span class="__vote-count"><h4>862 votes</h4></span>
									</span>
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
<div>
<!--FOOTER-->
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