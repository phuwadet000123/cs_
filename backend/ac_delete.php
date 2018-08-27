<?php
        require '../connectdb/connectdb.php';
        
        //รับค่า h_id
        $ac_id = $_GET['ac_id'];

        //sqlDelete Image
        $sql_image = "SELECT ac_img FROM cs_activity WHERE ac_id='$ac_id'";
        $res_image = pg_query($db, $sql_image);
        $data_image = pg_fetch_row($res_image);
        $file_name = $data_image[0];
        
        unlink("../images_ac/" . $file_name); 
        
        //คำสั่ง sql เพื่อลบ
        $sql_delete = "DELETE FROM cs_activity WHERE ac_id='$ac_id'";
        $result_delete = pg_query($db, $sql_delete);
        
        if($result_delete){
            header("location: ac_manage.php");
        } else {
            echo pg_last_error($db);
        }
        
        pg_close($db);