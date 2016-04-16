<?php require("registration/common.php"); 
             
            // At the top of the page we check to see whether the user is logged in or not 
            if(empty($_SESSION['user'])) 
            { 
                // If they are not, we redirect them to the login page. 
                header("Location: registration/login.php"); 
                 
                // Remember that this die statement is absolutely critical.  Without it, 
                // people can view your members-only content without logging in. 
                die("Redirecting to registration/login.php"); 
            } 
            
            ?>
            
 



<DOCTYPE html>
<html>
  <head>
 
  </head>
  <body>
    
    
    
    
      <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	
	
	<div class="navbar-static-top navbar-inverse">

		  <div class="container" id="nav">
                <div class="navbar-brand headerSocH">
                    <!--add name of user in session to navbar brand-->
                   	<a href="#" style="color:white;font-weight:bold">Welcome <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>:
			        </a>
		       </div>
		<button class = "navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse" style ="color:white; border-color:white; margin-right:0px">
			Menu
		</button>
    	
    		<div class = "collapse navbar-collapse navHeaderCollapse" >
    		    <nav id="nav1">
    			<ul class = "nav navbar-nav navbar-right">
    				<li class = "items"><a href="?page=home">Home</a></li>
    				<li class = "items"><a href="?page=attraction">Attractions</a></li>
    				<li class = "items"><a href="?page=chat">Chat</a></li>
    				<li class = "items"><a href="?page=discover">Discover</a></li>
    				<li class = "items"><a href="?page=logout">Logout</a></li>
    			
    			</ul>
    			</nav>
		   </div>
	</div>
    </div>
    
    