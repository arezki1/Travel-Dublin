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
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	  <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <div class="navbar-static-top navbar-inverse">
		<div class = "container">
			<div class = "navbar-brand headerSocH">
			    <!--add name of user in session to navbar brand-->
				<a href="#" style="color:white;font-weight:bold">Welcome <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>:</a>
		  </div>
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
  <body>
    <div class = "container">
	        <div class = "row">
	            <div class = "map-responsive col-md-6" id="map"></div>
                    <input id="pac-input" class="controls" type="text" placeholder="Search For your Location here....">

                            <script>
                              // This example adds a search box to a map, using the Google Place Autocomplete
                              // feature. People can enter geographical searches. The search box will return a
                              // pick list containing a mix of places and predicted search terms.
                        
                              // This example requires the Places library. Include the libraries=places
                              // parameter when you first load the API. For example:
                              // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
                        
                              function initAutocomplete() {
                                var map = new google.maps.Map(document.getElementById('map'), {
                                  center: {lng: -6.2549504, lat: 53.3339284},
                                  zoom: 5,
                                  mapTypeId: google.maps.MapTypeId.ROADMAP
                                });
                       
                                // Create the search box and link it to the UI element.
                                var input = document.getElementById('pac-input');
                                var searchBox = new google.maps.places.SearchBox(input);
                                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                        
                                // Bias the SearchBox results towards current map's viewport.
                                map.addListener('bounds_changed', function() {
                                  searchBox.setBounds(map.getBounds());
                                });
                        
                                var markers = [];
                                // Listen for the event fired when the user selects a prediction and retrieve
                                // more details for that place.
                                searchBox.addListener('places_changed', function() {
                                  var places = searchBox.getPlaces();
                        
                                  if (places.length == 0) {
                                    return;
                                  }
                        
                                  // Clear out the old markers.
                                  markers.forEach(function(marker) {
                                    marker.setMap(null);
                                  });
                                  markers = [];
                        
                                  // For each place, get the icon, name and location.
                                  var bounds = new google.maps.LatLngBounds();
                                  places.forEach(function(place) {
                                    var icon = {
                                      url: place.icon,
                                      size: new google.maps.Size(71, 71),
                                      origin: new google.maps.Point(0, 0),
                                      anchor: new google.maps.Point(17, 34),
                                      scaledSize: new google.maps.Size(25, 25)
                                    };
                        
                                    // Create a marker for each place.
                                    markers.push(new google.maps.Marker({
                                      map: map,
                                      icon: icon,
                                      title: place.name,
                                      position: place.geometry.location
                                    }));
                        
                                    if (place.geometry.viewport) {
                                      // Only geocodes have viewport.
                                      bounds.union(place.geometry.viewport);
                                    } else {
                                      bounds.extend(place.geometry.location);
                                    }
                                  });
                                  map.fitBounds(bounds);
                                });
                              }
                            </script>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDruy_WvfmHX4E8K2bH5_eRQbBnFmKldj8&libraries=places&callback=initAutocomplete"
                                 async defer></script>
                </div>
	            
	            
	        </div>
  </body>
</html>