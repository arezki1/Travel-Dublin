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
						<li class = "listItem"><a href="discover.php">Discover</a></li>
						<li class = "listItem"><a href="logout.php">Logout</a></li>
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
                         if(isset($_POST['zipcode']) && is_numeric($_POST['zipcode'])){
                               $zipcode = $_POST['zipcode'];
                            }else{
                             $zipcode = 'EIXX0014';
                            }
                          $result = file_get_contents('http://weather.yahooapis.com/forecastrss?p=' . $zipcode . '&u=c');
                          $xml = simplexml_load_string($result);
                          //echo htmlspecialchars($result, ENT_QUOTES, 'UTF-8');
                          $xml->registerXPathNamespace('yweather', 'http://xml.weather.yahoo.com/ns/rss/1.0');
                          $location = $xml->channel->xpath('yweather:location');
                            if(!empty($location)){
                              foreach($xml->channel->item as $item){
                             $current = $item->xpath('yweather:condition');
                             $forecast = $item->xpath('yweather:forecast');
                             $current = $current[0];
                             $output = <<<END
					<div class="col-md-5">
            
            <h1 style="margin-bottom: 0">Weather for {$location[0]['city']}, {$location[0]['region']}</h1>
            <small>{$current['date']}</small>
            <h2>Current Conditions</h2>
            <span style="font-size:72px; font-weight:bold;">{$current['temp']}&deg;C</span>
            <br/>
            <img src="http://l.yimg.com/a/i/us/we/52/{$current['code']}.gif" style="vertical-align: middle;"/>&nbsp;
            {$current['text']}
            </p>
            <h2>Forecast</h2>
            
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
         if(isset($_POST['check_weather1'])) 
          { 
             echo "Some recomendations based on the weather"; 
           } 
           else if(isset($_POST['check_weather2']))
           {
           	echo "This is a great day for cycling!";
           }
           else if(isset($_POST['check_weather3']))
           {
           	echo "Have you seen the Dublin Zoo yet? This would be the perfect day for it!";
           }
           else if(isset($_POST['check_weather3']))
           {
           	echo "Typical Irish weather... why not try the museum?";
           }
           else if(isset($_POST['check_weather4']))
           {
           	echo "Another rainy day. The perfect excuse to check out some of our pubs.";
           }
           else if(isset($_POST['check_weather5']))
           {
           	echo "Almost sunny day, great for going out in the park!";
           }
?>
					</h2>
					
				</div>
		
			</div>
				<!--second row for our map and weather-->
				
			</div>
	</body>
	
	 </html>
