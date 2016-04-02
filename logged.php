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
	<div class="navbar-static-top navbar-inverse">
		<div class = "container">
			<div class = "navbar-brand headerSocH">
			    <!--add name of user in session to navbar brand-->
				<a href="#" style="color:white;font-weight:bold">Welcome <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>:
			</a>
		</div>
		<!--button for mini-menu-->
		<button class = "navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse" style ="color:white; border-color:white; margin-right:0px">
			Menu
		</button>
		<div class = "collapse navbar-collapse navHeaderCollapse" >
			<ul class = "nav navbar-nav navbar-right">
				<li class = "listItem"><a href="logged.php" style="color:white;font-weight:bold">Home</a></li>
				<li class = "listItem"><a href="Chat/index.php"style="color:white;font-weight:bold">Chat</a></li>
				<li class = "listItem"><a href="forum.php"style="color:white;font-weight:bold">Forum</a></li>
				<li class = "listItem"><a href="maps.php"style="color:white;font-weight:bold">Maps</a></li>
				<li class ="listItem"><a href="discover.php"style="color:white;font-weight:bold">Discover</a></li>
				<li class = "listItem"><a href="logout.php"style="color:white;font-weight:bold">Logout</a></li>
			</ul>
		</div>
		</div>
	</div>
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
	</br></br>
	<!--begin footer-->
	<footer class="bottom" style="position:relative;bottom:0;width:100%;background-color:#0F0606;color:white;font-weight: bold;">
		<div class="container hidden-xs">
			<p class="navbar-text pull-left">NCI Team <a href="Http:/ncirl.ie">
   				</br></br>
    			</a> Interdisciplinary Project</p></br>
				<p class="navbar-text pull-center"> Group C  2016  All Right Reserved.</p>
				<a href="http://www.ncirl.ie" class="navbar-btn btn-danger btn "> NCI Students</a>
		</div>

	</footer>
	</br>
	</body>
	    
