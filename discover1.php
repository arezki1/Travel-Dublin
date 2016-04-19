
<?php 

    // First we execute our common code to connection to the database and start the session 
    require("registration/common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If the user is not logged, we redirect them to the login page. 
header("Location: login.php"); 
       
        die("Redirecting to login.php"); 
    } 
   if (empty($_GET["id"])==false){
    
    $id=$_GET["id"];
}


 session_start();

 include("comment/db.php");


$sql="Select * from attractions order by  id desc";
$command=mysql_query($sql);
while($data=mysql_fetch_row($command)){
$address=$data[2];
$title=$data[0];
$description=$data[1];
$image=$data[4];
$info=$data[5];

}
   
    
?>
<br>

	 <head>
	 
	  <link rel="stylesheet" href="css/style.css" type="text/css" />
	  <!--nav start-->
	  <!--weather script start-->
	  <script src="//www.powr.io/powr.js" external-type="html"></script>
	  <!--weather script end-->
	 </head>
	
	 <!--nav end-->
	
<div class="container">
			<!--top row for our maps and plugin-->
			<div class="col-sm-3">
			
						
						<!--<div class="powr-weather" id="41ef4f59_1455969059976">
						-->
						<?php
                         //replace the file_get_contents line with the include the new file
                         //take out the line with registerXpathNamespace
                         //then do the same on the second code for the buttons
                          include("weather.php");
                          $xml = simplexml_load_string($result);
                          $location = $xml->channel->xpath('yweather:location');
                        if(!empty($location)){
                        foreach($xml->channel->item as $item){
                             $current = $item->xpath('yweather:condition');
                             $forecast = $item->xpath('yweather:forecast');
                             $current = $current[0];
                             $output = <<<END
					
            <div class="current">
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
            </div>
            
            									<div class="col-md-3">
            									<div class = "map-responsive col-md-6" id="map"></div>
                    <input id="pac-input" class="controls" type="text" placeholder="Search For your Location here....">

                         
                              <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"> -->
                        <script>
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
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvu6MkworBo45dsTBGQThXz__5WqqTB3I&libraries=places&callback=initAutocomplete"
                                 async defer></script>
            									<div class="row-sm-1"> </div>
            									<div class="row-sm-2"> </div>
            									<div class="row-sm-3"> </div>
            									<div class="row-sm-4"> </div>
            									<div class="row-sm-5"> </div>
            									</div>
            <div class="col-sm-4">
            <div class="forecast">
            <h2>Forecast</h2>
            
            <table>
            <tbody>
            <tr>
            <td>
            <form action='' method='post'>
            {$forecast[0]['day']} - {$forecast[0]['text']}. High: {$forecast[0]['high']} Low: {$forecast[0]['low']}
            <input type='submit' name='check_weather1' value='Check Suggestions...' /> 
            </form>
            
            <br/>
            
            <form action='' method='post'>
            {$forecast[1]['day']} - {$forecast[1]['text']}. High: {$forecast[1]['high']} Low: {$forecast[1]['low']}
            <input type='submit' name='check_weather2' value='Check Suggestions...' /> 
            </form>
            
            <br/>
            
            <form action='' method='post'>
            {$forecast[2]['day']} - {$forecast[2]['text']}. High: {$forecast[2]['high']} Low: {$forecast[2]['low']}
            <input type='submit' name='check_weather3' value='Check Suggestions...' /> 
            </form>
            
            <br/>
            
            <form action='' method='post'> 
            {$forecast[3]['day']} - {$forecast[3]['text']}. High: {$forecast[3]['high']} Low: {$forecast[3]['low']}
            <input type='submit' name='check_weather4' value='Check Suggestions...' /> 
            </form>
            
            <br/>
            
            <form action='' method='post'>
            {$forecast[4]['day']} - {$forecast[4]['text']}. High: {$forecast[4]['high']} Low: {$forecast[4]['low']}
            <input type='submit' name='check_weather5' value='Check Suggestions...' /> 
            </form>
            </tbody>
            </table>
            </div>
            </div>
            
END;
        }
         }else{
            $output = '<h1>No results found, please try a different zip code.</h1>';
          }

         ?>
         
         						<?php

                          include("weather.php");
                          $xml = simplexml_load_string($result);
                          $location = $xml->channel->xpath('yweather:location');
                        if(!empty($location)){
                        foreach($xml->channel->item as $item){
                             $current = $item->xpath('yweather:condition');
                             $forecast = $item->xpath('yweather:forecast');
                              $current = $current[0];
                              $day1 = $forecast[0][code];
                              $day2 = $forecast[1][code];
                              $day3 = $forecast[2][code];
                              $day4 = $forecast[3][code];
                              $day5 = $forecast[4][code];
         if(isset($_POST['check_weather1'])) 
          { 
            switch ($day1){
             case ($day1 ==1):
            header("Location: forum.php?id=1");
            break;
             case ($day1 ==2):
              header("Location: forum.php?id=2");
              break;
              case ($day1 ==3):
              header("Location: forum.php?id=3");
              break;
              case ($day1 ==4):
              header("Location: forum.php?id=4");
              break;
              case ($day1 ==5):
              header("Location: forum.php?id=5");
              break;
            default:
             print 'No suggestions found!';
             break;
            }
          }
            
/*                              if (($day1 >25)&&($day1 <31)){
                               print 'Some improved recomendations based on the weather...';
                              }
                              else if(($day1 >=31)&&($day1 <=34)){
                               print 'Weather is looking good...';
                              }*/
  
/*                 if ((string) ($forecast[0][text]) == ('Partly Cloud') || ('Mostly Cloudy') || ('Cloudy') || ('Scattered Showers')) {
                     print 'Some improved recomendations based on the weather';
  }
                 else if ((string) ($forecast[0][text]) == 'Sunny'){
                     print $forecast;
  }*/
                        
           if(isset($_POST['check_weather2']))
           {
            switch ($day2){
             case ($day2 ==1):
            header("Location: forum.php?id=1");
            break;
             case ($day2 ==2):
              header("Location: forum.php?id=2");
              break;
              case ($day2 ==3):
              header("Location: forum.php?id=3");
              break;
              case ($day2 ==4):
              header("Location: forum.php?id=4");
              break;
              case ($day2 ==5):
              header("Location: forum.php?id=5");
              break;
            default:
             print 'No suggestions found!';
             break;
            }
           }
           
          if(isset($_POST['check_weather3']))
           {
             switch ($day3){
             case ($day3 ==1):
            header("Location: forum.php?id=1");
            break;
             case ($day3 ==2):
              header("Location: forum.php?id=2");
              break;
              case ($day3 ==3):
              header("Location: forum.php?id=3");
              break;
              case ($day3 ==4):
              header("Location: forum.php?id=4");
              break;
              case ($day3 ==5):
              header("Location: forum.php?id=5");
              break;
            default:
             print 'No suggestions found!';
             break;
            }
           }
           
          if(isset($_POST['check_weather4']))
           {
             switch ($day4){
             case ($day4 ==1):
            header("Location: forum.php?id=1");
            break;
             case ($day4 ==2):
              header("Location: forum.php?id=2");
              break;
              case ($day4 ==3):
              header("Location: forum.php?id=3");
              break;
              case ($day4 ==4):
              header("Location: forum.php?id=4");
              break;
              case ($day4 ==5):
              header("Location: forum.php?id=5");
              break;
            default:
             print 'No suggestions found!';
             break;
            }
           }
           
           if(isset($_POST['check_weather5']))
           {
           switch ($day5){
             case ($day5 ==1):
            header("Location: forum.php?id=1");
            break;
             case ($day5 ==2):
              header("Location: forum.php?id=2");
              break;
              case ($day5 ==3):
              header("Location: forum.php?id=3");
              break;
              case ($day5 ==4):
              header("Location: forum.php?id=4");
              break;
              case ($day5 ==5):
              header("Location: forum.php?id=5");
              break;
            default:
             print 'No suggestions found!';
             break;
            }
           }
                        }
                        }
?>
<?php echo $output; ?>

<?phpif(isset($_POST['check_weather'])) 
{ 
    echo "hey"; 
} 
?>
						
					<?php
$url = 'forum.php';
$content = file_get_contents($url);
$first_step = explode( '<div class="col-md-3">' , $content );
$second_step = explode("</div>" , $first_step[1] );
echo $second_step[0];
?>


					<div class="col-md-12">
					 <h2>

</h2>
					</div>
</div>
					</div>

				</div>
		
			</div>
				<!--second row for our map and weather-->

				 
				</div>
			</div>
	</body>
	
	 </html>
