<?php

    require '../connectdb/connectdb.php';

    //upload image      
if (is_uploaded_file($_FILES['st_img']['tmp_name'])) {
    //รับค่าตัวแปรจากฟอร์ม 
    $st_id = $_POST['st_id'];
    $st_name = $_POST['st_name'];   
    $st_lname = $_POST['st_lname'];
    $st_code = $_POST['st_code'];
    $st_address = $_POST['st_address'];
    $st_contact = $_POST['st_contact'];
    $class_id = $_POST['class_id'];
    $st_school = $_POST['st_school'];

    //delete old image
    $sql_image = "SELECT st_img FROM cs_student WHERE st_id='$st_id'";
    $res_image = pg_query($db, $sql_image);
    $row_image = pg_fetch_row($res_image);
    $image_old = $row_image[0];

    unlink("../images_st/" . $image_old);

    //update image
    $image_ext = pathinfo(basename($_FILES['st_img']['name']), PATHINFO_EXTENSION);
    $new_image_name = 'img_' . uniqid() . "." . $image_ext;
    $image_path = "../images_st/";
    $img_upload_path = $image_path . $new_image_name;
    $success = move_uploaded_file($_FILES['st_img']['tmp_name'], $img_upload_path);
    $st_img = $new_image_name;
    //end upload image  
      
    //คำสั่ง sql เพื่อ update ข้อมูล
    $sql = "UPDATE cs_student
    SET st_name='$st_name' ,
    st_lname ='$st_lname',
    st_code ='$st_code',
    st_address ='$st_address',
    st_contact ='$st_contact',
    class_id = '$class_id',
    st_school = '$st_school',
    st_img='$st_img'
    WHERE st_id='$st_id' ";
    $result = pg_query($sql);


    if ($result) {
        //echo "Upload Complete";
        header("location: st_manage.php");
    } else {
        echo "Error = " . pg_last_error($db);
    }

    pg_close($db);


} else
{

    //รับค่าตัวแปรจากฟอร์ม
    $st_id = $_POST['st_id'];
    $st_name = $_POST['st_name'];   
    $st_lname = $_POST['st_lname'];
    $st_code = $_POST['st_code'];
    $st_address = $_POST['st_address'];
    $st_contact = $_POST['st_contact'];
    $class_id = $_POST['class_id'];
    $st_school = $_POST['st_school'];



    //คำสั่ง sql เพื่อ update ข้อมูล
    $sql = "UPDATE cs_student
    SET st_name='$st_name' ,
    st_lname ='$st_lname',
    st_code ='$st_code',
    st_address ='$st_address',
    st_contact ='$st_contact',
    class_id = '$class_id',
    st_school = '$st_school'
    WHERE st_id='$ac_id' ";
    $result = pg_query($sql);

    if ($result) {
        //echo "Upload Complete";
        header("location: st_manage.php");
    } else {
        echo "Error = " . pg_last_error($db);
    }

    pg_close($db);

        
}       
        