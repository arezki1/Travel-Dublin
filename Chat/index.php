<?php

session_start();



?>
        <!--styling-->
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        <script type="text/javascript" src="../js/bootstrap.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <!--styling-->
        <div class="navbar-static-top navbar-inverse">
            <div class="container" id="nav">
                <div class="navbar-brand headerSocH">
                    <!--add name of user in session to navbar brand-->
                    <a href="#" style="color:white;font-weight:bold">Welcome <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>:
                				</a>
                </div>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse" style="color:white; border-color:white; margin-right:0px">
                    Menu
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right headerBndt">
                        <li class="listItem"><a href="../logged.php" style="color:white;font-weight:bold">Home</a></li>
                        <li class="listItem"><a href="index.php" style="color:white;font-weight:bold">Chat</a></li>
                        <li class="listItem"><a href="../forum.php" style="color:white;font-weight:bold">Forum</a></li>
                        <li class="listItem"><a href="../maps.php" style="color:white;font-weight:bold">Maps</a></li>
                        <li class="listItem"><a href="../discover.php" style="color:white;font-weight:bold">Discover</a></li>
                        <li class="listItem"><a href="../logout.php" style="color:white;font-weight:bold">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

<!DOCTYPE html>

<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script>
	
                 function submitChat(){
                  if(form1.uname.value == '' || form1.msg.value == '' ){
                   alert('ALL FIELDS ARE MANDATORY!!!!');
                   return;
                  }
                  
                  form1.uname.readOnly = true;
                  form1.uname.style.border = 'none';
                  $("imageload").show();
                  var uname = form1.uname.value;
                  var msg = form1.msg.value;
                  var xmlhttp = new XMLHttpRequest();
 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
  document.getElementById("chatlogs").innerHTML = xmlhttp.responseText;
 
   $("imageload").hide();
           }
 
 }
 xmlhttp.open('GET','insert.php?'+'&uname='+uname+'&msg='+msg, true);
 xmlhttp.send();
 
 
}
$(document).ready(function(e){
 $.ajaxSetup({cache:false});
 setInterval(function(){$('#chatlogs').load('logs.php');}, 1000);
});
</script>

<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
</br></br>
    
     <div class="container"> 
                           
     <div class = "row">
         
         <p style="text-align: center;font-weight:bold;color:#000044;font-size:20px">
         Lorem Ipsum is simply dummy text of the printing and typesetting industry.</br>
         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</br>
         , when an unknown printer took a galley of type and scrambled it to make a type </br>
         specimen book. It has survived not only five centuries, but also the leap into electronic</br>
         </p>
         
    </div>
    
    </div>
    
    
    
    </br></br>
    
    
    
    
     <div class="container"> 
                           
     <div class = "row">
         
                             <div class = "col-sm-4" >
                        	 
                           
                                
                           		 <img src="chat1.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
                             
                         	 
                         	 </div>
                         	 
 	 <div class = "col-sm-8" >
 	     
 	      <div id="form-chat">
                       
                    <form name = "form1">
                    
                    
                                        <p><b>Choose a Chatname:</b></p>
                                        
                                        
                                        <input type="text" name="uname" style="width:200px;" /><br/><br/>
                                        
                                        
                                        <p> <b>Your Message:</b></p> 
                                        
                                        
                                        <textarea name= "msg" styles = "width:200px; height: 70px"></textarea><br/>
                    
                    </form>
                               
                              
                    <br/>
                    
                    
                    <button onclick= "submitChat()"class= "button">Send</button><br/><br/>
                    
                    <div id="imageload" style="display:none;"> 
                    <img src="loading.gif"/>
                    </div>
                    
                    <div id="chatlogs"> 
                    <h1>Loading .... </h1><img src="loading.gif"/>
                    </div>

   </div>
	 </div>
	 </div>
      </div>
    
    </br></br></br></br>

   <footer class="bottom" style="position:relative;
bottom:0;
width:100%;background-color:#0F0606;color:white;font-weight: bold;">

<div class="container hidden-xs">


  <p class="navbar-text pull-left">NCI Team <a href="Http:/ncirl.ie">
      
      
  </br>  </br></a> Interdisciplinary Project</p></br>
  
<p class="navbar-text pull-center"> Group C  2016  All Right Reserved.</p>


  <a href="http://www.ncirl.ie" class="navbar-btn btn-danger btn "> NCI Students</a>

  </div>


</footer>

</br>
   

</body>


</html>