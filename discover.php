 <?php require("common.php"); 
             
            // At the top of the page we check to see whether the user is logged in or not 
            if(empty($_SESSION['user'])) 
            { 
                // If they are not, we redirect them to the login page. 
                header("Location: login.php"); 
                 
                // Remember that this die statement is absolutely critical.  Without it, 
                // people can view your members-only content without logging in. 
                die("Redirecting to login.php"); 
            } 
            
 ?>
 <!DOCTYPE html>
 <html>
     <!--styling-->

       
        <head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <!--nav start-->
    <!--weather script start-->
    <script src="//www.powr.io/powr.js" external-type="html"></script>
    <!--weather script end-->
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
					<li class = "listItem"><a href="Chat/index.php"">Chat</a></li>
					<li class = "listItem"><a href="#">Forum</a></li>
					<li class = "listItem"><a href="memberlist.php">Memberlist</a></li>
					<li class = "listItem"><a href="discover.php">Discover</a></li>
					<li class = "listItem"><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
    	<!--nav end-->
    	<body>
    	    <div class = "container">
    	        <!--top row for our maps and plugin-->
    	        <div class = "row">
    	            <div class = col-md-4>
    	                <iframe>
    	                    <p>In this frame, we will put the google maps functionality</p>
    	                </iframe>
    	            </div>
    	            <div class = col-md-4>
    	                <h1>Placeholder</h1>
    	            </div>
    	            <div class = col-md-4>
    	                <div><h1>in this div, we will place the weather plugin</h1></div>
    	            </div>
    	        </div>
    	        <!--second row for our list of activities-->
    	        <div class ="row">
    	            <p>In here, we will put our list of activities being generated by our cool scripts</p>
    	            <ul>
    	                <li>Cycling</li>
    	                <li>Park</li>
    	                <li>Zoo</li>
    	                <li>Museum</li>
    	                <li>Pub</li>
    	            </ul>
    	            
    	        </div>
    	    </div>
    	</body>

 </html>