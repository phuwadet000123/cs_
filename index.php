<?php
    require 'header.php';      
    require 'connectdb/connectdb.php'
?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/lib/w3.css">
    </head>
    <style>
.mySlides {display:none;}
</style>
    <body>
    
    
    <div class="w3-content w3-section" style="max-width:500px">
    <img class="mySlides" src="1.jpg"      style="width:100%">
    <img class="mySlides" src="2.jpg"      style="width:100%">
    <img class="mySlides" src="3.jpg" style="width:100%">
</div>
        <div class="w3-container">
           
            
            <table class="w3-table-all w3-card-4 ">
                <thead>
                    
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

                        $sqlPage = "SELECT * FROM cs_activity
                                      
                                    ORDER BY ac_id ASC limit {$perpage} offset {$start}
                                   ";
                        $queryPage = pg_query($db, $sqlPage);
                    ?>         
                </thead>
                
                <!-- show data -->
                <?php while($row = pg_fetch_array($queryPage)){ ?>
                <tbody>
                    <tr>
                        <!-- ลำดับ 
                        <td><center><?php echo $row['ac_id']; ?></center></td>-->
            
                        <!-- ชื่อ -->
                        <div><center><?php echo $row['ac_name']; ?></center></div>

                        <!-- img -->
                        <div><center><img src="images_ac/<?php echo $row['ac_img']; ?>" style="width:500px;height:500px;"></center></div>
            
            
                        <!-- เวลา -->
                        <div><center><?php echo $row['ac_date']; ?></center></div>  
                    </tr>
                </tbody>
                <?php } ?>
            </table>
            <br>             
        </div>

        <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>
<?php 
require "Footer.php"?>
    </body>
</html>



