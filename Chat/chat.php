    <?php
    
    session_start();
    
    
    
    ?>
            <!--styling-->
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
            <!--styling-->
   
    
    <!DOCTYPE html>
    
    <html>
    <head>
    <title>C H A T</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    	<script>
    	
                     function submitChat(){
    if(form1.uname.value== '' || form1.msg.value == '' ){
                       alert('ALL FIELDS ARE MANDATORY!!!!');
                       return;
                      }
                      
    form1.uname.readOnly= true;
    form1.uname.style.border= 'none';
                      $("imageload").show();
    var uname= form1.uname.value;
    var msg= form1.msg.value;
    var xmlhttp= new XMLHttpRequest();
     
    xmlhttp.onreadystatechange= function(){
    if(xmlhttp.readyState== 4 && xmlhttp.status == 200){
    document.getElementById("chatlogs").innerHTML= xmlhttp.responseText;
     
       $("imageload").hide();
               }
     
     }
    xmlhttp.open('GET','Chat/insert.php?'+'&uname='+uname+'&msg='+msg, true);
     xmlhttp.send();
     
     
    }
    $(document).ready(function(e){
    $.ajaxSetup({cache:false});
     setInterval(function(){$('#chatlogs').load('Chat/logs.php');}, 1000);
    });
    </script>
    
    <link rel="stylesheet" type="text/css" href="Chat/style.css"/>
    </head>
    
    <body>
    </br></br>
        
    <div class="container"> 
                               
    <div class= "row">
             
    <p style="text-align: center;font-weight:bold;color:#000044;font-size:20px">
             Hello and welcome to the chat room, in here you can</br>
             chat with other people and share your ideas and experiences.<br>
             All you need is enter your name(or just a nickname) and start your <br>
             Amazing Experience.
           
             
        </div>
        
        </div>
        
        
        
        </br></br>
        
        
        
        
    <div class="container"> 
                               
    <div class= "row">
             
        <div class= "col-md-4" >
              
        <img src="Chat/chat1.jpg" class="img-rounded" alt="Cinque Terre"width="304" height="236">
                                     
       </div>
                             	 
    <div class= "col-md-8" >
     	     
    <div id="form-chat">
                           
    <form name= "form1">
                        
                        
    <p><b>Choose a Chatname:</b></p>
                                            
                                            
    <input type="text" name="uname" style="width:200px;" /><br/><br/>
                                            
                                            
    <p> <b>Your Message:</b></p> 
                                            
                                            
    <textarea name= "msg" styles = "width:200px; height: 70px"></textarea><br/>
                        
                        </form>
                                   
                                  
                        <br/>
                        
                        
    <button onclick= "submitChat()"class= "button">Send</button><br/><br/>
                        
    <div id="imageload" style="display:none;"> 
    <img src="Chat/loading.gif"/>
                        </div>
                        
    <div id="chatlogs"> 
    <h1>Loading .... </h1><img src="Chat/loading.gif"/>
                        </div>
    
       </div>
    	 </div>
    	 </div>
          </div>
        
       
    
    
       
    
    </body>
    
    
    </html>
