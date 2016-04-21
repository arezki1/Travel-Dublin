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
 
    
?> 
<title>A T T R A C T I O N S</title>
  </br>
<div class="container">
      
<<<<<<< HEAD
      
<div id="myCarousel" class="carousel slide coolFont bradius box center-block" data-ride="carousel">
=======
      <!--carousel of images-->
<div id="myCarousel" class="center-block carousel slide coolFont bradius box" data-ride="carousel">
>>>>>>> 98d4015b6cadf8eb16368fd8ed2864726d2db6ad
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
        
<<<<<<< HEAD
        
=======
        <!--start attraction divs - each div holds details for one attraction in Dublin-->
>>>>>>> 98d4015b6cadf8eb16368fd8ed2864726d2db6ad
        
      <h1 class="coolFont text_shadow" style="text-align:center">TOP 10 PLACES IN DUBLIN</h1>
      
      
<div class="container coolFont bradius box"> <!--first container-->
                           
<div class= "row">
         
<div class= "col-md-6" >
    <h2 class="centerText">1.Temple Bar</h2>

  		 <a href="forum.php?id=3"><img src="img/templebar.jpg" class="img-responsive img-rounded center-block" alt="Cinque Terre" width="304" height="236" ></a>

		<h3>Street in Dublin, Republic of Ireland</h3>
    <p>Temple Bar is an area on the south bank of the <br>
    River Liffey in central Dublin, Ireland. The area is <br>
    bounded by the Liffey to the north, Dame Street to the south,<br>
	Westmoreland Street to the east and Fishamble Street to the west.</p>


<a href="forum.php?id=3">
    
<button type="button" class="btn btn-warning">More Info</button>
                    			</a>
            </div>
<div class= "col-md-6">
                    	 <h2 class="centerText">2.Dublin Castle</h2>
         <a href="forum.php?id=1"><img src="img/DublinCastle.jpg" class="img-responsive img-rounded center-block" alt="Cinque Terre" width="304" height="236"></a>
    
		 <h3>Building complex in Dublin, Republic of Ireland</h3>
     <p>Dublin Castle off Dame Street, Dublin, Ireland,<br>
	 was until 1922 the seat of the United Kingdom government's <br>
	 administration in Ireland, and is now a major Irish government complex.</p>
                    
<a href="forum.php?id=1">
                    			   
<button type="button" class="btn btn-warning">More Info</button></a>
                     	  </div>
                                         	  </div>
                          </div><!-- End first container-->
                     	 <br/>
                    	 
<div class="container coolFont bradius box"> <!--second container-->
                                               
<div class= "row">
                             
<div class= "col-md-6" >
	 
           
     <h2 class="centerText">3.Phoenix Park</h2>

   		 <a href="forum.php?id=2"><img src="img/PhoenPark.jpg" class="img-responsive img-rounded center-block" alt="Cinque Terre" width="304" height="236"></a>

		 <h3>Park</h3>
     <p>Phoenix Park is an urban park in Dublin, Ireland,<br>
	 lying 2–4 km west of the city centre, north of the River Liffey.<br>
	 Its 11 km perimeter wall encloses 707 hectares, one of the largest walled city parks in Europe.</p>  
	
<a href="forum.php?id=2">
<button type="button" class="btn btn-warning">More Info</button></a>
 	  
            </div>
            
 	 
<div class= "col-md-6" >
	 
     <h2 class="centerText">4.Christ Church Cathedral</h2>

   		<a href="forum.php?id=4"><img src="img/christ-church.jpg" class="img-responsive img-rounded center-block" alt="Cinque Terre" width="304" height="236"></a>

		 <h3>Cathedral in the Republic of Ireland</h3>
     <p>Christ Church Cathedral is the cathedral of the <br>
     United Dioceses of Dublin and Glendalough and the cathedral <br>
     of the Ecclesiastical province of the United Provinces of Dublin<br>
	 and Cashel in the Church of Ireland.</p>   
       
<a href="forum.php?id=4">
<button type="button" class="btn btn-warning">More Info</button></a>
 	  </div>
 	  </div>
    </div><!--End second container-->
    <br/>
<div class="container coolFont bradius box"> <!--Theird container-->
    
<div class= "row">
         
<div class= "col-md-6" >
    
    <h2 class="centerText">5.Guinness Storehouse</h2>

   		 <a href="forum.php?id=5"><img src="img/guinness-storehouse.jpg" class="img-responsive img-rounded center-block" alt="Cinque Terre" width="304" height="236"></a>

		 <h3>Brewery</h3>
     <p>Brewery experience telling the tale of Ireland's famous beer,<br>
	 with tastings and a rooftop bar</p>   
       
<a href="forum.php?id=5">
<button type="button" class="btn btn-warning">More Info</button></a>
            </div>
                         	  
                         	 
<div class= "col-md-6" >
    
    
     
    
     <h2 class="centerText">6.National Museum of Ireland</h2>
 
   		<a href="forum.php?id=6"><img src="img/NationalMuseumofIreland.jpg" class="img-responsive img-rounded center-block" alt="Cinque Terre" width="304" height="236"></a>

		 <h3>Museum in the Republic of Ireland</h3>
     <p>The National Museum of Ireland is the national museum in Ireland.<br>
	 It has three branches in Dublin and one in County Mayo,<br>
	 with a strong emphasis on Irish art, culture and natural history.</p>
       
<a href="forum.php?id=6">
<button type="button" class="btn btn-warning">More Info</button></a>
                         	  
             </div>
 	 </div>
 	                 </div><!--End theird container-->
 	                 
 	          
    </div>
    
 

