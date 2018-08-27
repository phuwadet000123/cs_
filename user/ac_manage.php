<?php
    require 'header_user.php';      
?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    </head>
    <body>
        <div class="w3-container">
           
            
            <h2>ข้อมูลกิจกรรม</h2> 
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
                    
                    <tr class="w3-black">
                        <!--<th><center>#</center></th>-->
                        <th><center>ชื่อกิจกรรม</center></th>
                        <th><center>รูปภาพ</center></th>
                        <th><center>วันเวลา</center></th>
                        <th><center>ดูข้อมูล</center></th>
                        <th><center>แก้ไข</center></th>
                        <th><center>ลบ</center></th>
                    </tr>
                </thead>
                
                <!-- show data -->
                <?php while($row = pg_fetch_array($queryPage)){ ?>
                <tbody>
                    <tr>
                        <!-- ลำดับ 
                        <td><center><?php echo $row['ac_id']; ?></center></td>-->
            
                        <!-- ประเภท -->
                        <td><center><?php echo $row['ac_name']; ?></center></td>

                        <!-- img -->
                        <td><center><img src="../images_ac/<?php echo $row['ac_img']; ?>" style="width:150px;height:100px;"></center></td>
            
            
                        <!-- ชื่อ -->
                        <td><center><?php echo $row['ac_date']; ?></center></td>

                       
                        
                        <!-- ดูข้อมูล -->
                        <td><center><a href="show_medicine.php?medicine_id=<?php echo $row['medicine_id']; ?>" class="btn btn-info btn-md">
                                <span class="fa fa-info w3-xxlarge"></span>
                        </a></center></td>
                        
                        <!-- edit -->
                        <td><center><a href="frm_medic_edit.php?medicine_id=<?php echo $row['medicine_id']; ?>" class="btn btn-warning btn-md">
                                <span class="fa fa-edit w3-xxlarge"></span>
                        </a></center></td>
                        
                        <!-- delete -->
                        <td><center><a href="ac_delete.php?ac_id=<?php echo $row['ac_id']; ?>" class="btn btn-danger btn-md">
                                <span class="fa fa-trash w3-xxlarge"></span>
                        </a></center></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <a href="ac_add.php" class="w3-button w3-black w3-round" >
                        <span class="glyphicon glyphicon-plus"> เพิ่มกิจกรรม</span>
                    </a>    
                                    
                </div>
                
               
            </div>
                   
        </div>
    </body>

    
</html>
