
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



<DOCTYPE html>
<html>
  <head>
 
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        // Set trigger and container variables
        var trigger = $('#nav1 ul li a'),
            container = $('#content');
        
        // Fire on click
        trigger.on('click', function(){
          // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data('target');       
          
          // Load target page into container
          container.load(target);
          
          // Stop normal link behavior
          return false;
        });
      });
    </script>
  </head>
  <body>
    
    
    
    
      <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<div class="navbar-static-top navbar-inverse">
		<div class = "container" id = "nav">
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
    				<li class = "items"><a data-target="logged.php" href="#">Home</a></li>
    				<li class = "items"><a data-target="attraction.php" href="#">Attractions</a></li>
    				<li class = "items"><a data-target="Chat/chat.php" href="#">Chat</a></li>
    				<li class = "items"><a data-target="discover.php" href="#">Discover</a></li>
    				<li class = "items"><a data-target="logout.php" href="#">Logout</a></li>
    			
    			</ul>
    			</nav>
    		</div>
		</div>
	</div>
    </div>
    
    
    
    <div id="content">
      <?php include('logged.php'); ?>
    </div>
    
    
     </br></br></br></br>

   <footer class="bottom" style="position:relative;
bottom:0;
width:100%;background-color:#0F0606;color:white;font-weight: bold;">

<div class="container hidden-xs">


  <p class="navbar-text pull-left">NCI Team <a href="Http:/ncirl.ie">
      
      
  </br>  </br></a> Interdisciplinary Project</p></br>
  
<p class="navbar-text pull-center"> Group C  2016  All Right Reserved.</p>


  <a href="http://www.ncirl.ie" class="navbar-btn btn-danger btn "> NCI Students</a>

  </div>


</footer>

</br>
  </body>
</html>
