<?php
    require 'header_admin.php';      
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
           
            
            <h2>ข้อมูลนักศึกษาชั้นปีที่ 3</h2> 
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

                        $sqlPage = "SELECT * FROM cs_class
                                    INNER JOIN cs_student
                                    on cs_class.class_id = cs_student.class_id
                                    WHERE class_name = ('3')                                     
                                    ORDER BY st_id ASC limit {$perpage} offset {$start}
                                   ";
                        $queryPage = pg_query($db, $sqlPage);
                    ?>
                    
                    <tr class="w3-black">
                        <!--<th><center>#</center></th>-->
                        <th><center>รหัสนักศึกษา</center></th>
                        <th><center>ชั้นปี</center></th>
                        <th><center>ชื่อ</center></th>
                        <th><center>นามสกุล</center></th>
                        <th><center>รูป</center></th>
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
                        <td><center><?php echo $row['st_id']; ?></center></td>-->

                        <!-- ประเภท -->
                        <td><center><?php echo $row['st_code']; ?></center></td>

                        <!-- ประเภท -->
                        <td><center><?php echo $row['class_name']; ?></center></td>
            
                        <!-- ประเภท -->
                        <td><center><?php echo $row['st_name']; ?></center></td>

                        <!-- ประเภท -->
                        <td><center><?php echo $row['st_lname']; ?></center></td>

                        

                        <!-- img -->
                        <td><center><img src="../images_st/<?php echo $row['st_img']; ?>" style="width:100px;height:130px;"></center></td>

                       
                        
                        <!-- ดูข้อมูล -->
                        <td><center><a href="show_medicine.php?medicine_id=<?php echo $row['medicine_id']; ?>" class="btn btn-info btn-md">
                                <span class="fa fa-info w3-xxlarge"></span>
                        </a></center></td>
                        
                        <!-- edit -->
                        <td><center><a href="st_edit.php?st_id=<?php echo $row['st_id']; ?>" class="btn btn-warning btn-md">
                                <span class="fa fa-edit w3-xxlarge"></span>
                        </a></center></td>
                        
                        <!-- delete -->
                        <td><center><a href="st_delete.php?st_id=<?php echo $row['st_id']; ?>" class="btn btn-danger btn-md">
                                <span class="fa fa-trash w3-xxlarge"></span>
                        </a></center></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
            <br>
           
               
                    <a href="st_add.php" class="w3-button w3-black w3-round w3-right" >
                        <span class="glyphicon glyphicon-plus"> เพิ่มข้อมูลนักศึกษา</span>
                    </a>    
                                    
                
                
               
            </div>
                   
        </div>
    </body>

    
</html>
