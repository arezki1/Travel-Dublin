<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
     
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
   
    
?> <!--styling-->



<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type= "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
  </br>
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
      
      
<div class="container"> <!--first container-->
                           
<div class= "row">
         
<div class= "col-md-6" >
      
      <?php
       echo "<h2>1-$title</h2>";
       ?>
        
<img src="img/<?= $image; ?>" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                        
                           	 
         <?php
       echo "$info";
       ?>
                
                
                    

<a href="forum.php?id=3">
    
<button type="button" class="btn btn-warning">More Info</button>
                    			</a>
            </div>
<div class= "col-md-6">
                    	 
                    	 
         <?php
       echo "<h2>2$title</h2>";
       ?>
        
                            
<img src="img/<?= $image; ?>" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                         
                    	                     	 
         <?php
       echo "$info";
       ?>
                    
<a href="forum.php?id=1">
                    			   
<button type="button" class="btn btn-warning">More Info</button></a>
                     	  </div>
                                         	  </div>
                          </div><!-- End first container-->
                     	 
                    	 
<div class="container"> <!--second container-->
                                               
<div class= "row">
                             
<div class= "col-md-6" >
	 
           
      <?php
       echo "<h2>3-$title</h2>";
       ?>
        
<img src="img/<?= $image; ?>"  class="img-rounded" alt="Cinque Terre" width="304" height="236">
     
		                     	 
         <?php
       echo "$info";
       ?>
	
<a href="forum.php?id=2">
<button type="button" class="btn btn-warning">More Info</button></a>
 	  
            </div>
            
 	 
<div class= "col-md-6" >
	 
    
      <?php
       echo "<h2>4-$title</h2>";
       ?>
        
        
<img src="img/<?= $image; ?>"  class="img-rounded" alt="Cinque Terre" width="304" height="236">
     
		                     	 
         <?php
       echo "$info";
       ?>
       
<a href="forum.php?id=4">
<button type="button" class="btn btn-warning">More Info</button></a>
 	  </div>
 	  </div>
    </div><!--End second container-->

<div class="container"> <!--Theird container-->
    
<div class= "row">
         
<div class= "col-md-6" >
    
    
   
      <?php
       echo "<h2>5-$title</h2>";
       ?>
        
                                     
                                     
                                        
<img src="img/<?= $image; ?>"  class="img-rounded" alt="Cinque Terre" width="304" height="236">
                                     
                                	                     	 
         <?php
       echo "$info";
       ?>
       
<a href="forum.php?id=5">
<button type="button" class="btn btn-warning">More Info</button></a>
            </div>
                         	  
                         	 
<div class= "col-md-6" >
    
    
     
      <?php
       echo "<h2>6-$title</h2>";
       ?>
        
                                     
                                     
                                     
                                        
<img src="img/<?= $image; ?>"  class="img-rounded" alt="Cinque Terre" width="304" height="236">
                                     
                                		                     	 
         <?php
       echo "$info";
       ?>
       
       
<a href="forum.php?id=6">
<button type="button" class="btn btn-warning">More Info</button></a>
                         	  
             </div>
 	 </div>
 	                 </div><!--End theird container-->
 	                 
 	          
    </div>
    
  
  
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
  </html>

