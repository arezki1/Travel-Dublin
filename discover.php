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
	 <div class="navbar-static-top navbar-inverse">
	  <div class="container">
	   <div class="navbar-brand headerSocH">
	    <!--add name of user in session to navbar brand-->
	    <a href="#" style="color:white;font-weight:bold">Welcome <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>:
	 	 			</a>
	   </div>
	   <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse" style="color:white; border-color:white; margin-right:0px">
	    Menu
	   </button>
	   <div class="collapse navbar-collapse navHeaderCollapse">
	    <ul class="nav navbar-nav navbar-right">
	     <li class="listItem"><a href="logged.php" style="color:white;font-weight:bold">Home</a></li>
	     <li class="listItem"><a href="Chat/index.php" style="color:white;font-weight:bold">Chat</a></li>
	     <li class="listItem"><a href="forum.php" style="color:white;font-weight:bold">Forum</a></li>
	     <li class="listItem"><a href="maps.php" style="color:white;font-weight:bold">Maps</a></li>
	     <li class="listItem"><a href="discover.php" style="color:white;font-weight:bold">Discover</a></li>
	     <li class="listItem"><a href="logout.php" style="color:white;font-weight:bold">Logout</a></li>
	    </ul>
	   </div>
	  </div>
	 </div>
	 <!--nav end-->
	<body>
		<div class="container">
			<!--top row for our maps and plugin-->
			<div class="row">
			
						
						<!--<div class="powr-weather" id="41ef4f59_1455969059976">
						-->
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
					<div class="col-sm-3">
            <div class="current">
            <h1 style="margin-bottom: 0">Weather for {$location[0]['city']}, {$location[0]['region']}</h1>
            <br/>
            <p>{$current['date']}</p>
            <h2>Current Conditions</h2>
            <br/>
            <span style="font-size:72px; font-weight:bold;">{$current['temp']}&deg;C</span>
            <br/>
            <img src="http://l.yimg.com/a/i/us/we/52/{$current['code']}.gif" style="vertical-align: middle;"/>&nbsp;
            {$current['text']}
            </p>
            </div>
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
            
            <br/><br/>
            
            <form action='' method='post'>
            {$forecast[1]['day']} - {$forecast[1]['text']}. High: {$forecast[1]['high']} Low: {$forecast[1]['low']}
            <input type='submit' name='check_weather2' value='Check Suggestions...' /> 
            </form>
            
            <br/><br/>
            
            <form action='' method='post'>
            {$forecast[2]['day']} - {$forecast[2]['text']}. High: {$forecast[2]['high']} Low: {$forecast[2]['low']}
            <input type='submit' name='check_weather3' value='Check Suggestions...' /> 
            </form>
            
            <br/><br/>
            
            <form action='' method='post'> 
            {$forecast[3]['day']} - {$forecast[3]['text']}. High: {$forecast[3]['high']} Low: {$forecast[3]['low']}
            <input type='submit' name='check_weather4' value='Check Suggestions...' /> 
            </form>
            
            <br/><br/>
            
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


<!--<form method="POST" action="">
<label>Zip Code:</label> <input type="text" name="zipcode" size="8" value="" /><br /><input type="submit" name="submit" value="Lookup Weather" />
</form>-->
<?php echo $output; ?>

<?phpif(isset($_POST['check_weather'])) 
{ 
    echo "hey"; 
} 
?>
						
					
				
					<h2 style="text-align: justify">
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
                              $day1 = $forecast[0][code];
                              $day2 = $forecast[1][code];
                              $day3 = $forecast[2][code];
                              $day4 = $forecast[3][code];
                              $day5 = $forecast[4][code];
         if(isset($_POST['check_weather1'])) 
          { 
            switch ($day1){
             case ($day1 >= 10 && $day1 <=12):
            print 'Some improved recomendations based on the rainy weather...';
            break;
             case ($day1 >=31 && $day1 <=34):
              print 'Hopefully some sunshine...';
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
                        
           else if(isset($_POST['check_weather2']))
           {
            switch ($day2){
             case ($day2 >= 26 && $day2 <=30):
            print 'This is a great rainy day for cycling!';
            break;
             case ($day2 >=31 && $day2 <=34):
              print 'Hopefully some sunshine...';
              break;
            default:
             print 'No suggestions found!';
             break;
            }
           }
           
           else if(isset($_POST['check_weather3']))
           {
             switch ($day3){
             case ($day3 >= 26 && $day3 <=30):
            print 'Have you seen the Dublin Zoo yet? This rainy day would be the perfect day for it!';
            break;
             case ($day3 >=31 && $day3 <=34):
              print 'Rain, rain, go away... Ooh, some sunshine!';
              break;
            default:
             print 'No suggestions found!';
             break;
             }
           }
           
           else if(isset($_POST['check_weather4']))
           {
             switch ($day4){
             case ($day4 >= 26 && $day4 <=30):
            print 'Typical Irish weather... why not try the museum?';
            break;
             case ($day4 >=31 && $day4 <=34):
              print 'I got sunshine...';
              break;
            default:
             print 'No suggestions found!';
             break;
             }
           }
           
           else if(isset($_POST['check_weather5']))
           {
           switch ($day5){
             case ($day5 >= 26 && $day5 <=30):
            print 'Another rainy day. The perfect excuse to check out some of our pubs.';
            break;
             case ($day5 >=31 && $day5 <=34):
              print 'Almost sunny day, great for going out in the park!';
              break;
            default:
             print 'No suggestions found!';
             break;
             }
           }
                        }
                        }
?>
					</h2>
					

				</div>
		
			</div>
				<!--second row for our map and weather-->

				 
				</div>
			</div>
	</body>
	
	 </html>
