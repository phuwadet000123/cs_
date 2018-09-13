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
  <h1 style = "text-align: center;" ><b>Computer science(admin)</b></h1>
  </div>
  </head>

<body class="w3-light-grey ">
<div class="w3-light-grey navbar navbar-inverse navbar-static-top" >

 
  <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
   href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu">
   <i class="fa fa-bars"></i></a>
   
  <div class="w3-bar w3-black w3-card w3-container">
    
   
    
      <a href="st_manage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ข้อมูลนักศึกษา</a>
      <a href="ac_manage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ข้อมูลบุคลากร</a>
      <a href="ac_manage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ข้อมูลกิจกรรม</a>
      <a href="user_manage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ข้อมูลสมาชิกทั่วไป</a>
      <a href="user_manage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ข้อมูลผู้ดูแลระบบ</a>
      <a href="logout.php" class="w3-right w3-bar-item w3-button w3-padding-large w3-hide-small w3-dark">ออกจากระบบ</a>
    
  </div>
  
  
  </div>
  </div>
  <!--<script>
        function myfunction() {
          window.open("Student.php")
        }
         
         function myfunction1() {

          window.open("Student_1.php")
        }
        function myfunction2() {

        window.open("index.php")
}
        </script> -->
</div>
</body>
</html>