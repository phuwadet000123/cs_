<!DOCTYPE html>
<html>
 
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <div>
  <h1 style = "text-align: center;" ><b>Computer Science</b></h1>
  </div>
  </head>

<body class="w3-light-grey">
<div class="w3-light-grey" >
<style>
 h1 { color: #202020 ;
      font-family: "Raleway", sans-serif;}
</style>
 
  <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
   href="javascript:void(0)"  title="Toggle Navigation Menu">
   <i class="fa fa-bars"></i></a>
   
  <div class="w3-bar w3-black w3-card w3-container">
    
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right " href="javascript:void(0)"  title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large  " onClick="myfunction2()">Home<i class="w3-margin-left fa fa-home"></i></a>
    
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Course <i class="fa fa-caret-down"></i></button>  
        
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
         <a href="degree_1.php"  class="w3-bar-item w3-button" >Bachelor</a>
         <a href="" class="w3-bar-item w3-button"  >Master</a>
         <a href=""  class="w3-bar-item w3-button"  >Doctorate</a>
         
      </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Student Information <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
         <a href="st_class_1.php"  class="w3-bar-item w3-button"   >1st year</a>
         <a href="st_class_2.php"  class="w3-bar-item w3-button"   >2nd year</a>
         <a href="st_class_3.php"  class="w3-bar-item w3-button"   >3rd year</a>
         <a href="st_class_4.php"  class="w3-bar-item w3-button"   >4th year</a>
      </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Instructor Information <i class="fa fa-caret-down"></i></button>
      </div>
      <a href="ac_manage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">activities</a>
    
    
    <!--  modal login -->
    <button type="button"data-toggle="modal" data-target="#myModal" class="w3-padding-large w3-button w3-right">Login</button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="max-width:400px">

    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="w3-text-black modal-title ">Login Form </h4>
         </div>
    
     
         <div class="modal-body"> 
      <form  action="check_login.php" method = 'POST'>
      
          <input class="w3-input w3-border w3-margin-bottom w3-round-xlarge w3-text-black" type="text" placeholder="Enter Username" name="cs_username" required>
          <input class="w3-input w3-border w3-round-xlarge w3-text-black" type="password" placeholder="Enter Password" name="cs_password" required>
          <button class="w3-button w3-block w3-black w3-section w3-padding w3-round-xlarge" type="submit">Login</button>
      </form> 
      </div>
      
    </div>
    </div>
  </div>
      <!-- end modal -->
    </div>
  </div>
  </div>
  
  
  </div>
  </div>
  
</div>
</body>
</html>

