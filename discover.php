      
      <!--https://www.youtube.com/watch?v=keO6egndYrE-->
      <!--map tutorial by Dave Wallace on YouTube-->
      <!-- http://www.w3schools.com/jsref/met_loc_reload.asp -->
      <!-- https://developers.google.com/maps/documentation/javascript/tutorial -->
      <!-- https://developers.google.com/maps/documentation/javascript/tutorial#libraries -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <!--google map api link-->
     
      <link rel="stylesheet" href="css/style.css" type="text/css" />
      <script type="text/javascript" src="../js/map.js"></script>
      <br><br>   
     
<div class="container bradius" style="font-weight:bold">
           
           
            <div class="col-md-3 bradius shadow" style=" background-color: 	rgb(220,220,220); height: 100%;">
             
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
                     
           
            <h1 style="margin-bottom: 0">Weather for {$location[0]['city']}, {$location[0]['region']}</h1>
            <br/><br>
            <p>{$current['date']}</p>
            <br>
            <h2>Current Conditions</h2>
            <br/>
            <span style="font-size:72px; font-weight:bold;">{$current['temp']}&deg;C</span>
            <br><br><br>
            <img src="img/weather.jpg" style="vertical-align: middle;"/>&nbsp;
            {$current['text']}
            </p>
          <br><br>
            </div>
            
             <!-- start of third div from here -->   
            
             
             <div class="col-md-5 bradius shadow" style="background-color:#ccccff;height: 100%; ;
  /* IE */
  -moz-opacity: 0.9;
  /* Mozilla */
  opacity: 0.9;">
  
  
              <div id = "map-canvas"></div>
        
            
            <button type="submit" class="btn-danger btn-responsive" id="refresh">Museums</button>
            <button type="submit" class="btn-danger btn-responsive" id="pub">Pubs</button>
            <button type="submit" class="btn-danger btn-responsive" id="parks">Parks</button>

            <!--Weather data will not load, possible future development-->
            <!--<button type="submit" class="btn-danger" id = "weather">Weather</button>-->

            <button type="submit" class="btn-danger btn-responsive" id="toggle_Traffic">Traffic</button>
            <button type="submit" class="btn-danger pull-right btn-responsive" id="clear">Clear Map</button>
  
                
                
                
                
             </div>
             
             
             
                           
            <!-- start of third div from here -->   
            
            
            <div class="col-md-4 bradius shadow" style=" background-color: 	rgb(220,220,220); height: 100%; float:right clear:both;"/>
            <h2>Forecast</h2>
             
            <table style="text-align: center;display: inline-block">
            <tbody>
            <tr>
            <td>
            <form action='' method='post'>
            {$forecast[0]['day']} - {$forecast[0]['text']}. High: {$forecast[0]['high']} Low: {$forecast[0]['low']}
            <br><br>
            <input type='submit' name='check_weather1' class="btn btn-warning" value='Our Suggestions' /> 
            </form>
             
            <br/>
             
            <form action='' method='post'>
            {$forecast[1]['day']} - {$forecast[1]['text']}. High: {$forecast[1]['high']} Low: {$forecast[1]['low']}
            <br><br>
            <input type='submit' name='check_weather2' class="btn btn-warning"value='Our Suggestions' /> 
            </form>
             
            <br/>
             
            <form action='' method='post'>
            {$forecast[2]['day']} - {$forecast[2]['text']}. High: {$forecast[2]['high']} Low: {$forecast[2]['low']}
            <br><br>
            <input type='submit' name='check_weather3' class="btn btn-warning"value='Our Suggestions' /> 
            </form>
             
            <br/>
             
            <form action='' method='post'> 
            {$forecast[3]['day']} - {$forecast[3]['text']}. High: {$forecast[3]['high']} Low: {$forecast[3]['low']}
            <br><br>
            <input type='submit' name='check_weather4' class="btn btn-warning"value='Our Suggestions' /> 
            </form>
             
            <br/>
             
            <form action='' method='post'>
            {$forecast[4]['day']} - {$forecast[4]['text']}. High: {$forecast[4]['high']} Low: {$forecast[4]['low']}
            <br><br>
            <input type='submit' name='check_weather5' class="btn btn-warning"value='Our Suggestions' /> 
            </form>
            </tbody>
            </table>
           <br><br>
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
                         
                   
 
 
</div>
                    </div>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?libraries=places,weather&sensor=false">
</script>
              