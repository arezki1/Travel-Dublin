<?php
// First we execute our common code to connection to the database and start the session 
require("common.php"); 
 
// At the top of the page we check to see whether the user is logged in or not 
if(empty($_SESSION['user'])) 
{ 
    // If they are not, we redirect them to the login page. 
    header("Location: login.php"); 
     
    // Remember that this die statement is absolutely critical.  Without it, 
    // people can view your members-only content without logging in. 
    die("Redirecting to login.php"); 
} 
 
// Everything below this point in the file is secured by the login system 
 
// We can display the user's username to them by reading it from the session array.  Remember that because 
// a username is user submitted content we must use htmlentities on it before displaying it to the user. 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>HotelSocial F O R U M</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		<style>
		body {
              padding-top: 50px;}
              .starter-template {
              padding: 40px 15px;
              text-align: center;}
	    </style>
  </head>
  

 <body>
 <div class="navbar-static-top navbar-inverse">
 	<div class = "container">
 		<div class = "navbar-brand headerSocH">
 		    <!--add name of user in session to navbar brand-->
 			<a href="#">Welcome <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>, 
 			</a>
 		</div>
 		<button class = "navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse" style ="color:white; border-color:white; margin-right:0px">
 			Menu
 		</button>
 		<div class = "collapse navbar-collapse navHeaderCollapse">
 			<ul class = "nav navbar-nav navbar-right">
 				<li class = "listItem"><a href="logged.php">Home</a></li>
 				<li class = "listItem"><a href="Chat/index.php">Chat</a></li>
 				<li class = "listItem"><a href="forum.php">Forum</a></li>
 				<li class = "listItem"><a href="memberlist.php">Memberlist</a></li>
 				<li class ="listItem"><a href="discover.php">Discover</a></li>

 			<li class = "listItem"><a href="logout.php">Logout</a></li>
 			</ul>
 		</div>
 	</div>
 </div>

    <div class="container">

      <div class="starter-template">
		        <h1>Dublin Castle</h1>
		       <div class="container">
		  	    <img class="img-responsive" src="img/DublinCastle.jpg" width="980" height="600">
		  	   </div>
		      </div>
				<p>Built between 1208 and 1220, this complex represents some of the oldest surviving architecture in the city. Highlights include the 13th-century record tower, the largest visible fragment of the original Norman castle and the State Apartments, once the residence of English viceroys and now the focal point for government ceremonial functions, including the inauguration of Ireland's presidents. The newest developments for visitors are the Undercroft, and excavates site on the grounds where an early Viking fortress stood, and the treasury, built between 1712 and 1715, believed to be the oldest surviving purpose-built office building in Ireland. It houses a new visitor centre in its vaulted basement.</p>
				<h3>Information</h3>
				<p>Address : Palace Street, off Dame Street, Dublin 2, Ireland</p>
				<p>Opening Time : Monday - Saturday 9:45 - 16:45, Sunday 12:00 - 16:45</p>
				<p>Phone : +353 (1) 677 7129 </p>
				<p>Website : www.dublincastle.ie</p>
		 
		<a href="forum.php">
		<button type="button" class="btn btn-warning">Back to Forum Page</button></a>
   	 </div>
	  

    </div><!-- /.container -->
	
	<div class="container"> <!--footer-->
		<hr>
	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright 2015 &copy; Turbo ltd </p>
			</div>
		</div>
	</footer>
	</div><!--Footer-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>