<?php
    require 'header.php';      
    require 'connectdb/connectdb.php';
?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
    <div class="w3-main w3-content" style="max-width:1000px; margin-top:20px">
        <div class="w3-container">
           
        
            <h2>ข้อมูลนักศึกษาชั้นปีที่ 1</h2> 
           <hr>
                
                    
                    <!-- แบ่งหน้า -->
                    <?php 
                        //กำหนดจำนวนหน้า
                        $perpage = 20;
                        
                        //เช็คว่าเป็นค่าว่างหรือไม่
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $page = 1;
                        }

                        $start = ($page - 1) * $perpage;

                        $sqlPage = "SELECT * FROM cs_class
                                    INNER JOIN cs_student
                                    on cs_class.class_id = cs_student.class_id
                                    WHERE class_name = ('1')                                     
                                    ORDER BY st_id ASC limit {$perpage} offset {$start}
                                   ";
                        $queryPage = pg_query($db, $sqlPage);
                    ?>
                    
                
                
                <!-- show data -->
                <?php while($row = pg_fetch_array($queryPage)){ ?>
                
            <div class="w3-quarter">
            <img src="images_st/<?php echo $row['st_img']; ?>" style="width:220px;height:290px; margin-top:20px" 
                 onclick="onClick(this)"  
                 alt="<br> ชื่อ-นามสกุล : <?php echo $row['st_name']. " " . $row['st_lname']; ?> 
                 <hr>รหัสนักศึกษา : <?php echo $row['st_code']; ?> 
                 <hr>ติดต่อ : <?php echo $row['st_contact']; ?> 
                 <hr>ที่อยู่ : <?php echo $row['st_address']; ?>
                 <hr>จบจาก : <?php echo $row['st_school']; ?> 
                 <hr>ชั้นปี : <?php echo $row['class_id']; ?>" class="img-thumbnail">
      
            </div>

                <?php } ?>
            </div>
         
   
            </div>

             <!-- Modal for full size images on click-->
            <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image" style="width:200px;height:270px;">
      <p id="caption"></p>
    </div>
  </div>
                   
        </div>
        <script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>
    </body>

    
</html>
