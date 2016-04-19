<br>


	<title>D I S C O V E R</title>
<div class="container"> 
<div class= "row">
         
						<?php

                          $result = file_get_contents('http://xml.weather.yahoo.com/forecastrss?p=EIXX0014&u=c');
                          $xml = simplexml_load_string($result);
                          $xml->registerXPathNamespace('yweather', 'http://xml.weather.yahoo.com/ns/rss/1.0');
                          $location = $xml->channel->xpath('yweather:location');
                        if(!empty($location)){
                        foreach($xml->channel->item as $item){
                             $current = $item->xpath('yweather:condition');
                             $forecast = $item->xpath('yweather:forecast');
                             $current = $current[0];
                             $output = <<<END
					
          <div class= "col-md-2" style=" background-color: rgba(0, 0, 255, 0.5); height: 530px;">
          
            <h1 style="margin-bottom: 0">Weather for {$location[0]['city']}, {$location[0]['region']}</h1>
            <br/>
            <p>{$current['date']}</p>
            <h2>Current Conditions</h2>
            <br/>
            <span style="font-size:72px; font-weight:bold;">{$current['temp']}&deg;C</span>
            <br/>
            <img src="comment/icons/fire-icon.png" style="vertical-align: middle;"/>&nbsp;
            {$current['text']}
            </p>
            </div>
            
            <!-- finish the first div and start the second div -->
            
            	<div class = "map-responsive col-md-6" id="map">
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
                                  zoom: 10,
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
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvu6MkworBo45dsTBGQThXz__5WqqTB3I&libraries=places&callback=initAutocomplete"
                                 async defer></script>
            								</div>
            									
        <!-- start the theird div -->
      
            <div class= "col-md-3"  style=" background-color: rgba(0, 0, 255, 0.5); height: 530px;">
            <h2>Forecast</h2>
            
            <table>
            <tbody>
            <tr>
            
            <td>
            <form action='' method='post'>
            {$forecast[0]['day']} - {$forecast[0]['text']}. High: {$forecast[0]['high']} Low: {$forecast[0]['low']}
            <br><br>
            <button>
           <li><a href="forum.php?id=6">Check suggestion</a></li>
           </button>
            </form>
            
            
            
            <form action='' method='post'>
            {$forecast[1]['day']} - {$forecast[1]['text']}. High: {$forecast[1]['high']} Low: {$forecast[1]['low']}
            <br><br>
            <button>
           <li><a href="forum.php?id=2">Check suggestion</a></li>
           </button>
            </form>
            
            
            
            <form action='' method='post'>
            {$forecast[2]['day']} - {$forecast[2]['text']}. High: {$forecast[2]['high']} Low: {$forecast[2]['low']}
            <br><br>
            <button>
           <li><a href="forum.php?id=4">Check suggestion</a></li>
           </button>
            </form>
            
            
            <form action='' method='post'> 
            {$forecast[3]['day']} - {$forecast[3]['text']}. High: {$forecast[3]['high']} Low: {$forecast[3]['low']}
            <br><br>
           <button>
           <li><a href="forum.php?id=3">Check suggestion</a></li>
           </button>
            </form>
            
            
            
            <form action='' method='post'>
            {$forecast[4]['day']} - {$forecast[4]['text']}. High: {$forecast[4]['high']} Low: {$forecast[4]['low']}
            <br><br>
           <button>
           <li><a href="forum.php?id=1">Check suggestion</a></li>
           </button>
            </form>
            </tbody>
            </table>
            
            
END;
        }
         }else{
            $output = '<h1>No results found, please try a different zip code.</h1>';
          }

         ?>
<?php echo $output; ?>



				 
				</div>
			</div>
		
