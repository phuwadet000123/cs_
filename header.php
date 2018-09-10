<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <head>
  
  <div>
  <h1 style = "text-align: center;" ><b>Computer science</b></h1>
  </div>
  </head>

<body class="w3-light-grey">
<div class="w3-light-grey" >
<style>
 h1 { color: #202020 ;
      font-family: "Raleway", sans-serif;}
</style>
 
  <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
   href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu">
   <i class="fa fa-bars"></i></a>
   
  <div class="w3-bar w3-black w3-card">
    
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right " href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="" class="w3-bar-item w3-button w3-padding-large  " onClick="myfunction2()">HOME<i class="w3-margin-left fa fa-home"></i></a>
    
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">หลักสูตร <i class="fa fa-caret-down"></i></button>  
        
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
         <a href="degree_1.php"  class="w3-bar-item w3-button" >ป.ตรี</a>
         <a href="" class="w3-bar-item w3-button" onClick="myfunction1()" >ป.โท</a>
         <a href=""  class="w3-bar-item w3-button" onClick="myfunction()" >ป.เอก</a>
         
      </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">ข้อมูลนักศึกษา <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
         <a href="degree_1.php"  class="w3-bar-item w3-button"  onClick="myfunction()" >ชั้นปีที่ 1</a>
         <a href=""  class="w3-bar-item w3-button"  onClick="myfunction1()" >ชั้นปีที่ 2</a>
         <a href=""  class="w3-bar-item w3-button"  onClick="myfunction()" >ชั้นปีที่ 3</a>
         <a href=""  class="w3-bar-item w3-button"  onClick="myfunction1()" >ชั้นปีที่ 4</a>
      </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">ข้อมูลอาจารย์ <i class="fa fa-caret-down"></i></button>
      </div>
      <a href="ac_manage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">กิจกรรม</a>
    
    
    <!--  modal login -->
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-dark-grey w3-padding-large">เข้าสู่ระบบ</button>
    <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
    <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <h2 class="w3-container w3-text-black">ลงชื่อเข้าใช้</h2>
      </div>
      
      <form class="w3-container" action="check_login.php" method = 'POST'>
        <div class="w3-section">
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="cs_username" required>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="cs_password" required>
          <button class="w3-button w3-block w3-black w3-section w3-padding" type="submit">เข้าสู่ระบบ </button>
          </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-grey">Cancel</button>
      </div>
      <!-- end modal -->
    </div>
  </div>
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