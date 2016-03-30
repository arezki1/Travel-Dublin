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
  <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 50%;
        margin: auto;
    }
    </style>
  
  
  </br>
  <div class="container">
	  
  	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  	    <!-- Indicators -->
  	    <ol class="carousel-indicators">
  	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  	      <li data-target="#myCarousel" data-slide-to="1"></li>
  	      <li data-target="#myCarousel" data-slide-to="2"></li>
  	      <li data-target="#myCarousel" data-slide-to="3"></li>
  	    </ol>

  	    <!-- Wrapper for slides -->
  	    <div class="carousel-inner" role="listbox">
  	      <div class="item active">
  	        <img src="img/Hapenny-Bridge.jpg" alt="Flower" width="460" height="345">
  	        <div class="carousel-caption">
  	        </div>
  	      </div>

  	      <div class="item">
  	        <img src="img/custom-house.jpg" alt="Flower" width="460" height="345">
  	        <div class="carousel-caption">
  	        </div>
  	      </div>

  	      <div class="item">
  	        <img src="img/howthh.jpg" alt="Flower" width="460" height="345">
  	        <div class="carousel-caption">
  	        </div>
  	      </div>

  	      <div class="item">
  	        <img src="img/guinness-storehouse.jpg" alt="Flower" width="460" height="345">
  	        <div class="carousel-caption">
  	        </div>
  	      </div>
  	    </div>

  	    <!-- Left and right controls -->
  	    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  	      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  	      <span class="sr-only">Previous</span>
  	    </a>
  	    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
  	      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  	      <span class="sr-only">Next</span>
  	    </a>
  	  </div>

    <div class="starter-template">
      <h1>TOP 10 PLACES IN DUBLIN</h1>
      
      
       <div class="container"> 
                           
     <div class = "row">
         
     <div class = "col-md-6" >
      
    <h2>1.Temple Bar</h2>
                          
                      		 <img src="img/templebar.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                        
                    		<h3>Street in Dublin, Republic of Ireland</h3>
                        <p>Temple Bar is an area on the south bank of the River</br>
                        Liffey in central Dublin, Ireland.</br>
                    	The area is bounded by the Liffey to the north,</br>
                    	Dame Street	to the south, Westmoreland Street to 
                    	</br>the east and Fishamble Street to the west.</p>
                    

                    			<a href="11.php">
                    			<button type="button" class="btn btn-warning">More Info</button></a>
                    	  </div>
                    	  <div class = "col-md-6" >
                    	 
                    	 
                         <h2>2.Dublin Castle</h2>
                            
                       		 <img src="img/DublinCastle.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                         
                    		 <h3>Building complex in Dublin, Republic of Ireland</h3>
                         <p>Dublin Castle off Dame Street, Dublin, Ireland,</br>
                    	 was until 1922 the seat of the United Kingdom
                    	 </br>government's administration in Ireland,</br>
                    	 and is now a major Irish government complex.</p>
                    
                    			<a href="2.php">
                    			<button type="button" class="btn btn-warning">More Info</button></a>
                     	  </div>
                     	  </div>
                     	  </div>
 	 
	 
	   <div class="container"> 
                           
     <div class = "row">
         
     <div class = "col-md-6" >
	 
     <h2>3.Phoenix Park</h2>
        <div class="container"> 
   		 <img src="img/PhoenPark.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
     
		 <h3>Park</h3>
     <p>Phoenix Park is an urban park in Dublin, Ireland,</p>
	 <p>lying 2–4 km west of the city centre, north of the River Liffey.
	 </br>Its 11 km perimeter wall encloses 707 hectares, </br>
	 one of the largest walled city parks in Europe.</p>   
	
			<a href="2.php">
			<button type="button" class="btn btn-warning">More Info</button></a>
 	  
 	 </div>
 	 </div>
 	 
 	 <div class = "col-md-6" >
	 
     <h2>4.Christ Church Cathedral</h2>
        <div class="container"> 
   		 <img src="img/christ-church.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
     
		 <h3>Cathedral in the Republic of Ireland</h3>
     <p>Christ Church Cathedral is the cathedral of the</br>
     United Dioceses of Dublin and Glendalough and the </br>
     cathedral of the Ecclesiastical province of the United</br>
     Provinces of Dublin and Cashel in the Church of Ireland.</p>   

			<a href="2.php">
			<button type="button" class="btn btn-warning">More Info</button></a>
 	  </div>
 	  </div>
 	 </div>
 	 </div>
	 
	 
	 
	 
	 
	 
	 
	 
                	   <div class="container"> 
                           
                       <div class = "row">
         
                     <div class = "col-md-6" >
                     <h2>5.Guinness Storehouse</h2>
                        <div class="container"> 
                   		 <img src="img/guinness-storehouse.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                     
                		 <h3>Brewery</h3>
                     <p>Brewery experience telling the tale of Ireland's famous beer,</p>
                	 <p>with tastings and a rooftop bar</p>   
                	<a href="2.php">
                	<button type="button" class="btn btn-warning">More Info</button></a>
                 	  </div>
                 	  </div>
                 	 
                 <div class = "col-md-6" >
                     <h2>6.National Museum of Ireland</h2>
                        <div class="container"> 
                   		 <img src="img/NationalMuseumofIreland.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                     
                		 <h3>Museum in the Republic of Ireland</h3>
                     <p>The National Museum of Ireland is the national museum in Ireland.</p>
                	 <p>It has three branches in Dublin and one in County Mayo,</p>
                	 <p>with a strong emphasis on Irish art, culture and natural history.</p>
                	<a href="2.php">
                	<button type="button" class="btn btn-warning">More Info</button></a>
                 	  </div>
                 	 </div>
 	                 </div>
 	                 </div>
 	                 
 	                 
 	                 
 	                 
	
        
                	 
	 
	 
	          
  </div>
  
  </br></br>

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
  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
  </html>