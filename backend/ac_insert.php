 <?php 
 require '../connectdb/connectdb.php'; 
 


 $ac_id = $_POST['ac_id'];
 $ac_name    = $_POST['ac_name'];   
 $ac_data = $_POST['ac_data'];
 $ac_place = $_POST['ac_place'];
 $ac_date = $_POST['ac_date'];
 $ac_contact = $_POST['ac_contact'];
 $ac_founder = $_POST['ac_founder'];
 
  //upload image
  $ext = pathinfo(($_FILES['ac_img']['name']), PATHINFO_EXTENSION); //นามสกุลของไฟล์
  $new_image_name = 'img_' . uniqid() . "." . $ext;
  $image_path = '../images_ac/';
  $upload_path = $image_path . $new_image_name;
  //uploading
  $sucess = move_uploaded_file($_FILES['ac_img']['tmp_name'], $upload_path);
  
  if ($sucess==FALSE) {
      echo "ไม่สามารถเพิ่มรูปภาพได้";
      exit();
  }
  
  $ac_img = $new_image_name;
  //end upload image
  

 //คำสั่ง sql
        $sql = "INSERT INTO cs_activity (ac_id ,ac_name ,ac_data ,ac_place ,ac_img ,ac_date ,ac_contact ,ac_founder) 
                VALUES ('$ac_id','$ac_name','$ac_data','$ac_place','$ac_img ','$ac_date','$ac_contact','$ac_founder')";
        $result = pg_query($db, $sql);
        
        //check 
        if($result){
            //echo "Complete";
            header("Location:ac_manage.php");
        } else {
            echo pg_last_error($db);
        }
        
        pg_close($db);

