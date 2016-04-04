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
?> <!--styling-->
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	    <link rel="stylesheet" href="css/style.css" type="text/css" />
	    <!--nav start-->
	    <!--weather plugin start-->
	    <script src="//www.powr.io/powr.js" external-type="html"></script>
    	<!--weather plugin end-->
	</head>
    <body>
    <!--begin navbar-->

	<!--nav end-->
	<br/>
	<!--main page area for home-->
	<div class = "row">
    	 <div class = "col-md-4">
         <img src="img/niceHotel.jpg" class="img-responsive" id="placeHolder"></img>
        </div>
        <div class = "col-md-4">
            <h1 style=" text-shadow: 2px 2px #FF0000;font-weight: bold;">Welcome to the Social Hotel Experience</h1>
            <p style="font:italic small-caps bold 18px/24px Garamond, Georgia, Times, Serif;text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu malesuada sem.
            Integer ultrices enim eget ex commodo, eget dictum nibh imperdiet. 
            Pellentesque lacus lorem, consectetur at laoreet cursus, semper eu enim. 
            Cras posuere tempus libero, vel euismod tellus convallis nec. Aenean sem dui, interdum at lacinia non, sodales et orci. 
            Cras vestibulum maximus tellus et cursus. Aliquam erat volutpat. 
            Vivamus pretium elit quis tristique pulvinar. 
            Donec fringilla sapien eu neque blandit condimentum. Duis est eros, consectetur quis risus sit amet, vulputate luctus nisi. 
            Sed commodo neque nec est vulputate cursus. Maecenas non porta sem, id aliquet enim. Donec blandit accumsan elementum. 
            Proin ligula diam, pharetra tincidunt enim non, efficitur consequat metus. 
            Ut aliquet, mi non posuere vestibulum, justo enim aliquet diam, ac bibendum quam magna vitae urna. 
            Morbi molestie metus facilisis purus eleifend tincidunt</p>
        </div>
    	<div class  = "col-md-4">
    		<img src="img/hotel-room.jpg" class="img-responsive" id="placeHolder"></img>
    	</div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	</body>
	    
