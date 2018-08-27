<?php

    require '../connectdb/connectdb.php';

    //upload image      
if (is_uploaded_file($_FILES['ac_img']['tmp_name'])) {
    //รับค่าตัวแปรจากฟอร์ม 
    $ac_id = $_POST['ac_id'];
    $ac_name    = $_POST['ac_name'];   
    $ac_data = $_POST['ac_data'];
    $ac_place = $_POST['ac_place'];
    $ac_date = $_POST['ac_date'];
    $ac_contact = $_POST['ac_contact'];
    $ac_founder = $_POST['ac_founder'];

    //delete old image
    $sql_image = "SELECT ac_img FROM cs_activity WHERE ac_id='$ac_id'";
    $res_image = pg_query($db, $sql_image);
    $row_image = pg_fetch_row($res_image);
    $image_old = $row_image[0];

    unlink("../images_ac/" . $image_old);

    //update image
    $image_ext = pathinfo(basename($_FILES['ac_img']['name']), PATHINFO_EXTENSION);
    $new_image_name = 'img_' . uniqid() . "." . $image_ext;
    $image_path = "../images_ac/";
    $img_upload_path = $image_path . $new_image_name;
    $success = move_uploaded_file($_FILES['ac_img']['tmp_name'], $img_upload_path);
    $ac_img = $new_image_name;
    //end upload image  
      
    //คำสั่ง sql เพื่อ update ข้อมูล
    $sql = "UPDATE cs_activity
    SET ac_name='$ac_name' ,
    ac_data='$ac_data',
    ac_place='$ac_place',
    ac_date='$ac_date',
    ac_contact ='$ac_contact',
    ac_founder = '$ac_founder',
    ac_img='$ac_img'
    WHERE ac_id='$ac_id' ";
    $result = pg_query($sql);


    if ($result) {
        //echo "Upload Complete";
        header("location: ac_manage.php");
    } else {
        echo "Error = " . pg_last_error($db);
    }

    pg_close($db);


} else
{

    //รับค่าตัวแปรจากฟอร์ม
    $ac_id = $_POST['ac_id'];
    $ac_name    = $_POST['ac_name'];   
    $ac_data = $_POST['ac_data'];
    $ac_place = $_POST['ac_place'];
    $ac_date = $_POST['ac_date'];
    $ac_contact = $_POST['ac_contact'];
    $ac_founder = $_POST['ac_founder'];


    //คำสั่ง sql เพื่อ update ข้อมูล
    $sql = "UPDATE cs_activity
    SET ac_name='$ac_name' ,
    ac_data='$ac_data',
    ac_place='$ac_place',
    ac_date='$ac_date',
    ac_contact ='$ac_contact',
    ac_founder = '$ac_founder'
    WHERE ac_id='$ac_id' ";
    $result = pg_query($sql);

    if ($result) {
        //echo "Upload Complete";
        header("location: ac_manage.php");
    } else {
        echo "Error = " . pg_last_error($db);
    }

    pg_close($db);

        
}       
        