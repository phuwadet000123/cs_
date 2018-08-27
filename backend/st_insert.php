<?php 
 require '../connectdb/connectdb.php'; 
 


 $st_id = $_POST['st_id'];
 $st_name = $_POST['st_name'];   
 $st_lname = $_POST['st_lname'];
 $st_code = $_POST['st_code'];
 $st_address = $_POST['st_address'];
 $st_contact = $_POST['st_contact'];
 $class_id = $_POST['class_id'];
 $st_school = $_POST['st_school'];
 
  //upload image
  $ext = pathinfo(($_FILES['st_img']['name']), PATHINFO_EXTENSION); //นามสกุลของไฟล์
  $new_image_name = 'img_' . uniqid() . "." . $ext;
  $image_path = '../images_st/';
  $upload_path = $image_path . $new_image_name;
  //uploading
  $sucess = move_uploaded_file($_FILES['st_img']['tmp_name'], $upload_path);
  
  if ($sucess==FALSE) {
      echo "ไม่สามารถเพิ่มรูปภาพได้";
      exit();
  }
  
  $st_img = $new_image_name;
  //end upload image
  

 //คำสั่ง sql
        $sql = "INSERT INTO cs_student (st_id ,st_name ,st_lname ,st_code ,st_address ,st_contact ,class_id ,st_school ,st_img) 
                VALUES ('$st_id','$st_name','$st_lname','$st_code','$st_address ','$st_contact','$class_id','$st_school','$st_img')";
        $result = pg_query($db, $sql);
        
        //check 
        if($result){
            //echo "Complete";
            header("Location:st_manage.php");
        } else {
            echo pg_last_error($db);
        }
        
        pg_close($db);

