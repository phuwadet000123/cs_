<?php 
        require 'header_admin.php';

        
        //cs_activity
        $sql_data = "SELECT MAX(ac_id) FROM cs_activity";
        $res_data = pg_query($db, $sql_data);
        $row_data = pg_fetch_row($res_data);
        $row_data1 = $row_data[0];
        $row_data2 = $row_data1 + 1;
?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    

<div class="w3-card-4 w3-container">
  <div class="w3-container w3-dark-grey" >
    <h2>เพิ่มข้อมูล</h2>
  </div>
  <form class="w3-container" action="ac_insert.php" method="POST" enctype="multipart/form-data">

    <input name="ac_id" type="hidden" class="w3-input w3-border w3-round-large" value="<?php echo $row_data2; ?>"> 
    
    <p>      
    <label class="w3-text-black"><b>ชื่อกิจกรรม</b></label>
    <input class="w3-input w3-border w3-sand" name="ac_name" type="text"></p>
    <p>      
    <label class="w3-text-black"><b>ข้อมูลกิจกรรม</b></label>
    <input class="w3-input w3-border w3-sand" name="ac_data" type="text" rows="9"></p>
    <p>      
    <label for="ac_img" class="w3-text-black control-label">รูปภาพ :</label>
    <input type="file" name="ac_img" accept="image/*" required></p>
    <p>      
    <label class="w3-text-black"><b>สถานที่</b></label>
    <input class="w3-input w3-border w3-sand" name="ac_place" type="text" ></p>
    <p>      
    <label class="w3-text-black"><b>วันเวลา</b></label>
    <input class="w3-input w3-border w3-sand" name="ac_date" type="text" ></p>
    <p>      
    <label class="w3-text-black"><b>ติดค่อ</b></label>
    <input class="w3-input w3-border w3-sand" name="ac_contact" type="text" ></p>
    <p>      
    <label class="w3-text-black"><b>ผู้จัด</b></label>
    <input class="w3-input w3-border w3-sand" name="ac_founder" type="text" ></p>
 
    <p>
    <button class="w3-btn w3-black" type = "submit">บันทึก</button>
    <a href="ac_manage.php" class="w3-btn w3-black" >
    <span class="glyphicon glyphicon-plus"> กลับ</span></a></p>
  </form>
</div>

</body>
</html>
