// https://developers.google.com/maps/documentation/javascript/tutorial#Map_DOM_Elements
    var map;//reference to gmap object
    var service;
 
    function searchResultsHandle(results, status){
        
        // if (status == google.maps.places.PlaceServiceStatus.OK){
        //     for(var i = 0; i <results.length; i++){
        //         var place = results[i];
        //         createMarker(results[i]);
        //     }
        //}
        console.log(results);
        
            var icon = {
            
            scaledSize: new google.maps.Size(25, 25), // scaled size
            };
        
        for (var i = 0; i < results.length; i++ ) {
            
            var marker = new google.maps.Marker({
            position: results[i].geometry.location,
            map: map,
            icon: results[i].icon
            
        });
        
        }
    }
/***************************Search Parameters for Buttons**************************************/
    function clear(){
            
            location.reload();
            
        }




    function performSearchMuseum(){
        
        var request  = {//find selected within the bounds of the map
            bounds: map.getBounds(),
            name: "Museum"
        }
        
        service.nearbySearch(request, searchResultsHandle);
        
    }
    function performSearchPub(){
        
        var request  = {//find selected within the bounds of the map
            bounds: map.getBounds(),
            name: "Bar"
        }
        
        service.nearbySearch(request, searchResultsHandle);
        
    }
    function performSearchPark(){
        
        var request  = {//find selected within the bounds of the map
            bounds: map.getBounds(),
            name: "Park"
        }
        
        service.nearbySearch(request, searchResultsHandle);
        
    }
/***************************Search Parameters for Buttons**************************************/    
    
    function initialise(location){
        
        console.log(location);
        var currentLoc = new google.maps.LatLng(location.coords.latitude, location.coords.longitude);//current location
        
        var mapOptions = {
            center: currentLoc,
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            
             map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
             
            //add marker
            
            var marker = new google.maps.Marker({
            position: currentLoc,
            map: map,
            
            
            });
            service = new google.maps.places.PlacesService(map);//places object with reference to map
            //wait until the map bounds are initialised before performing the search
            google.maps.event.addListenerOnce(map, 'bounds_changed');
            
            //refresh page on button click
            
            $('#refresh').click(clear, performSearchMuseum);
            $('#pub').click(clear, performSearchPub);
            $('#parks').click(clear, performSearchPark);
            $('#clear').click(clear, clear);
            
            //create circle radius of 2km to show walking distance to selected amenity
            var circleOptions = {
                strokeColour: "#0000FF",
                strokeOpacity: "0.8",
                strokeWeight: 1.5,
                fillColour: "#0000FF",
                fillOpacity: 0.35,
                map:map,
                center: currentLoc,
                radius: 2000
                
            };
            
            var circle = new google.maps.Circle(circleOptions);
            
            //traffic
            var trafficLayer = new google.maps.TrafficLayer();
            $('#toggle_Traffic').click(function(){
                
                if (trafficLayer.getMap()){
                    trafficLayer.setMap(null);
                }
                else{
                    trafficLayer.setMap(map);
                }
            });
    
            
            //weather info
            var weatherLayer = new google.maps.weather.WeatherLayer({
            temperatureUnits: google.maps.weather.TemperatureUnit.CELSIUS
            });
            
            
            $('#weather').click(function(){
                
                if(weatherLayer.getMap()){
                    weatherLayer.setMap(null);
                }
                else{
                    weatherLayer.setMap(map);
                    
                }
                
            });
        }
    
    
        //get location
        $(document).ready(function () {
           navigator.geolocation.getCurrentPosition(initialise);
            
        });
        
        