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
  </head>
  
  <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 50%;
        margin: auto;
    }
    </style>
  
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
    <h2>1.Temple Bar</h2>
       <div class="container"> 
  		 <img src="img/templebar.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
    <div class="container">
		<h3>Street in Dublin, Republic of Ireland</h3>
    <p>Temple Bar is an area on the south bank of the River Liffey in central Dublin, Ireland.</p>
	<p>The area is bounded by the Liffey to the north, Dame Street to the south,</p>
	<p>Westmoreland Street to the east and Fishamble Street to the west.</p>

			<p><a href="1.php">Click for more infomation</a></p>
	  </div>
	 </div>
	 
     <h2>2.Dublin Castle</h2>
        <div class="container"> 
   		 <img src="img/DublinCastle.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
     <div class="container">
		 <h3>Building complex in Dublin, Republic of Ireland</h3>
     <p>Dublin Castle off Dame Street, Dublin, Ireland,</p>
	 <p>was until 1922 the seat of the United Kingdom government's administration in Ireland,</p>
	 <p>and is now a major Irish government complex.</p>

			<a href="2.php">
			<button type="button" class="btn btn-warning">More Info</button></a>
 	  </div>
 	 </div>
	 
     <h2>3.Phoenix Park</h2>
        <div class="container"> 
   		 <img src="img/PhoenPark.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
     <div class="container">
		 <h3>Park</h3>
     <p>Phoenix Park is an urban park in Dublin, Ireland,</p>
	 <p>lying 2–4 km west of the city centre, north of the River Liffey.
	 <p>Its 11 km perimeter wall encloses 707 hectares, one of the largest walled city parks in Europe.</p>   
	
			<a href="2.php">
			<button type="button" class="btn btn-warning">More Info</button></a>
 	  </div>
 	 </div>
	 
     <h2>4.Christ Church Cathedral</h2>
        <div class="container"> 
   		 <img src="img/christ-church.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
     <div class="container">
		 <h3>Cathedral in the Republic of Ireland</h3>
     <p>Christ Church Cathedral is the cathedral of the United Dioceses of Dublin</p>
	 <p>and Glendalough and the cathedral of the Ecclesiastical province of the United Provinces of Dublin</p>
	 <p>and Cashel in the Church of Ireland.</p>   

			<a href="2.php">
			<button type="button" class="btn btn-warning">More Info</button></a>
 	  </div>
 	 </div>
	 
     <h2>5.Guinness Storehouse</h2>
        <div class="container"> 
   		 <img src="img/guinness-storehouse.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
     <div class="container">
		 <h3>Brewery</h3>
     <p>Brewery experience telling the tale of Ireland's famous beer,</p>
	 <p>with tastings and a rooftop bar</p>   
	<a href="2.php">
	<button type="button" class="btn btn-warning">More Info</button></a>
 	  </div>
 	 </div>

     <h2>6.National Museum of Ireland</h2>
        <div class="container"> 
   		 <img src="img/NationalMuseumofIreland.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
     <div class="container">
		 <h3>Museum in the Republic of Ireland</h3>
     <p>The National Museum of Ireland is the national museum in Ireland.</p>
	 <p>It has three branches in Dublin and one in County Mayo,</p>
	 <p>with a strong emphasis on Irish art, culture and natural history.</p>
	<a href="2.php">
	<button type="button" class="btn btn-warning">More Info</button></a>
 	  </div>
 	 </div>
	 
      <h2>7.Old Jameson Distillery</h2>
         <div class="container"> 
    		 <img src="img/Old-Jameson.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
      <div class="container">
 		 <h3>Historical Landmark</h3>
      <p>Expert guides tell the story of Jameson in a recreated distillery scene with tastings and dining.</p> 
 	<a href="2.php">
 	<button type="button" class="btn btn-warning">More Info</button></a>
  	  </div>
  	 </div>
	 
       <h2>8.Howth</h2>
          <div class="container"> 
     		 <img src="img/howth.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
       <div class="container">
  		 <h3>Village in the Republic of Ireland</h3>
       <p>Howth is a village and outer suburb of Dublin, Ireland.</p>
 	  <p>The district occupies the greater part of the peninsula of Howth Head, forming the northern boundary of Dublin Bay.</p>   
  	<a href="2.php">
  	<button type="button" class="btn btn-warning">More Info</button></a>
   	  </div>
   	 </div>
	 
       <h2>9.Malahide Castle</h2>
          <div class="container"> 
     		 <img src="img/malahide-castle.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
       <div class="container">
  		 <h3>Building in the Republic of Ireland</h3>
       <p>Malahide Castle, parts of which date to the 12th century, lies, with over 260 acres of remaining estate parkland</p>
	   <p>close to the village of Malahide, nine miles north of Dublin in Ireland.</p>   
  	<a href="2.php">
  	<button type="button" class="btn btn-warning">More Info</button></a>
   	  </div>
   	 </div>
	 
      <h2>10.Powerscourt Waterfall</h2>
         <div class="container"> 
    		 <img src="img/waterfallll.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
      <div class="container">
 		 <h3>Waterfall</h3>
      <p>Beautiful waterfall in Country Wicklow</p>  
 	<a href="2.php">
 	<button type="button" class="btn btn-warning">More Info</button></a>
  	  </div>
  	 </div>
	 
	 
	          
  </div>

  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
  </html>