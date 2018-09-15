    <?php
session_start();

require '../connectdb/connectdb.php';

if ($_SESSION['cs_id'] == "") {
    echo "กรุณาลงชื่อเข้าสู่ระบบ";
    exit();
}

if ($_SESSION['cs_status'] != "admin") {
    echo "This page for Admin only!";
    exit();
}

$sql = "SELECT * FROM cs_user WHERE cs_id = '" . $_SESSION['cs_id'] . "' ";
$query = pg_query($db, $sql);
$result = pg_fetch_array($query);
?>

<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  

  <style>
 h1 { color: #202020 ;
      font-family: "Raleway", sans-serif;}
</style>
  
  <head>
  <div>
  <h1 style = "text-align: center;" ><b>Computer Science(admin)</b></h1>
  </div>
  </head>

<body class="w3-light-grey ">
<div class="w3-light-grey navbar navbar-inverse navbar-static-top" >

 
  <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
   href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu">
   <i class="fa fa-bars"></i></a>
   
  <div class=" w3-black  w3-container">
    
   
      <div class="w3-dropdown-hover">
      <a href="st_manage.php" class="w3-padding-large w3-button w3-black" >Student Information <i class="fa fa-caret-down"></i></a>
      <div class="w3-dropdown-content w3-bar-block w3-border">
      <a href="st_class_1.php"  class="w3-bar-item w3-button"  onClick="myfunction()" >1st year</a>
      <a href="st_class_2.php"  class="w3-bar-item w3-button"  onClick="myfunction1()" >2nd year</a>
      <a href="st_class_3.php"  class="w3-bar-item w3-button"  onClick="myfunction()" >3rd year</a>
      <a href="st_class_4.php"  class="w3-bar-item w3-button"  onClick="myfunction1()" >4th year</a>
      </div>
      </div>
      <a href="ac_manage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Instructor Information</a>
      <a href="ac_manage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">activities Information</a>
      <a href="user_manage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">User Information</a>
      <a href="user_manage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Admin Information</a>
      <a href="logout.php" class="w3-right w3-bar-item w3-button w3-padding-large w3-hide-small w3-dark">Logout</a>
    
  </div>
  
  
  </div>
  </div>
</div>
</body>
</html>