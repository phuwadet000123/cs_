<?php
        require '../connectdb/connectdb.php';
        
        //รับค่า h_id
        $st_id = $_GET['st_id'];

        //sqlDelete Image
        $sql_image = "SELECT st_img FROM cs_student WHERE st_id='$st_id'";
        $res_image = pg_query($db, $sql_image);
        $data_image = pg_fetch_row($res_image);
        $file_name = $data_image[0];
        
        unlink("../images_st/" . $file_name); 
        
        //คำสั่ง sql เพื่อลบ
        $sql_delete = "DELETE FROM cs_student WHERE st_id='$st_id'";
        $result_delete = pg_query($db, $sql_delete);
        
        if($result_delete){
            header("location: st_manage.php");
        } else {
            echo pg_last_error($db);
        }
        
        pg_close($db);