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
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!--nav start-->
	<div class="navbar-static-top navbar-inverse">
		<div class = "container" id = "nav">
			<div class = "navbar-brand headerSocH">
			    <!--add name of user in session to navbar brand-->
				<a href="#">Welcome <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>, 
				</a>
			</div>
			<button class = "navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse" style ="color:white; border-color:white; margin-right:0px">
				Menu
			</button>
			<div class = "collapse navbar-collapse navHeaderCollapse">
				<ul class = "nav navbar-nav navbar-right headerBndt">
					<li class = "listItem"><a href="logged.php">Home</a></li>
					<li class = "listItem"><a href="chat.php">Chat</a></li>
					<li class = "listItem"><a href="#">Forum</a></li>
					<li class = "listItem"><a href="memberlist.php">Memberlist</a></li>
					<li class = "listItem"><a href="discover.php">Discover</a></li>
					<li class = "listItem"><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--nav end-->
	<br/>
	    <div class = "row">
	    	 <div class = "col-md-8">
	         <img src="img/niceHotel.jpg" class="img-responsive" id="placeHolder"></img>
	        </div>
	        <div class = "col-md-3 offset 1">
	            <h1>Welcome to the Social Hotel Experience</h1>
	            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu malesuada sem.
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
	    </div>
