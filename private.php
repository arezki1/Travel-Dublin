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
	<div class="navbar-static-top navbar-inverse">
		<div class = "container" id = "nav">
			<div class = "navbar-brand headerSocH">
			    <!--add name of user in session to navbar brand-->
				<a href="#" style="color:white;font-weight:bold">Welcome <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>:
			</a>
		</div>
		<button class = "navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse" style ="color:white; border-color:white; margin-right:0px">
			Menu
		</button>
		<div class = "collapse navbar-collapse navHeaderCollapse" >
			<ul class = "nav navbar-nav navbar-right">
				<li class = "listItem"><a href="logged.php" style="color:white;font-weight:bold">Home</a></li>
				<li class = "listItem"><a href="Chat/index.php"style="color:white;font-weight:bold">Chat</a></li>
				<li class = "listItem"><a href="forum.php"style="color:white;font-weight:bold">Forum</a></li>
				<li class = "listItem"><a href="memberlist.php"style="color:white;font-weight:bold">Memberlist</a></li>
				<li class ="listItem"><a href="discover.php"style="color:white;font-weight:bold">Discover</a></li>

			<li class = "listItem"><a href="logout.php"style="color:white;font-weight:bold">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class = "container">
	    <div class = "row">
	        <div class = "col-md-6">
	            <iframe
                  width="600"
                  height="450"
                  frameborder="0" style="border:0"
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDAdSXhJSLNXzhUP9x9hqRu2P8Srw9lntw
                    &q=Space+Needle,Seattle+WA" allowfullscreen>
                </iframe>
	        </div>
	        <div class = "col-md-6">
	            
	        </div>
	        
	    </div>
	</div>
