<?php
        require 'header_admin.php';
        
        //คำสั่ง sql
        $sql = "SELECT * FROM cs_user ORDER BY cs_id ASC";
        $result = pg_query($db, $sql)
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
            

           
            <h2>User Infomation </h2> 
            <table class="w3-table-all w3-card-4">
                <thead>
                    <tr class="w3-black">
                        <!--<th><center>#</center></th>-->
                        <th><center>Name</center></th>
                        <th><center>Status</center></th>
                        <th><center>Info</center></th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>
                    </tr>
                </thead>
                
                <!-- show data -->
                <?php while($row = pg_fetch_array($result)){ 
                        if ($row['cs_status']=='user') {
                ?>
                <tbody>
                    <tr>
                        <!-- ลำดับ 
                        <td><center><?php echo $row['cs_id']; ?></center></td>-->
            
                        <!-- ชื่อ -->
                        <td><center><?php echo $row['cs_name'] . " " . $row['cs_surname']; ?></center></td>
            
                        <!-- สถานะ -->
                        <td><center><?php echo $row['cs_status']; ?></center></td>
            
                        <!-- ดูข้อมูล -->
                        <td><center><a href="show_user_data.php?user_id=<?php echo base64_encode($row['user_id']); ?>" class="btn btn-info btn-md">
                                <span class="fa fa-info w3-xxlarge"></span>
                        </a></center></td>
                        
                        <!-- edit -->
                        <td><center><a href="frm_user_edit.php?user_id=<?php echo base64_encode($row['user_id']); ?>" class="btn btn-warning btn-md">
                                <span class="fa fa-edit w3-xxlarge"></span>
                        </a></center></td>
                        
                        <!-- delete -->
                        <td><center><a href="user_delete.php?user_id=<?php echo base64_encode($row['user_id']); ?>" class="btn btn-danger btn-md">
                                <span class="fa fa-trash w3-xxlarge"></span>
                        </a></center></td>
                    </tr>
                </tbody>
                <?php }} ?>
            </table>
            <br>
            <a href="user_add.php" class="w3-button w3-black w3-round w3-right" >
                        <span class="glyphicon glyphicon-plus"> Add Infomation</span>
            </a> 
            </div>
        </div>
    </body>
</html>
