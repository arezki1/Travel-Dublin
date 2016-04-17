<br>

	 
	 
	  <link rel="stylesheet" href="css/style.css" type="text/css" />

	  
	 
	

	
<div class="container"> 
<div class= "row">
         

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
					
          <div class= "col-md-2" style=" background-color: rgba(0, 0, 255, 0.5); height: 530px; float:left;">
          
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
            
            								
            									
        <!-- start the theird div -->
        
        
            <div class= "col-md-3"  style=" background-color: rgba(0, 0, 255, 0.5); height: 530px; float:right;">
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
            
            
END;
        }
         }else{
            $output = '<h1>No results found, please try a different zip code.</h1>';
          }

         ?>
<?php echo $output; ?>



				 
				</div>
			</div>
		
