<?php 
        require 'header_admin.php';

        
           //รับค่า
           $ac_id = $_GET['ac_id'];
        
           //คำสั่ง sql
           $sql = "SELECT * FROM cs_activity WHERE ac_id='$ac_id'";
           $result = pg_query($db, $sql);
           $row = pg_fetch_array($result);
           
           
   ?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    

<div class="w3-card-4 w3-container">
  <div class="w3-container w3-dark-grey" >
    <h2>Edit Infomation.</h2>
  </div>
  <form class="w3-container" action="ac_edit_edit.php" method="POST" enctype="multipart/form-data">

    
    
    <p>      
    <label class="w3-text-black"><b>Name Activitie</b></label>
    <input class="w3-input w3-border w3-sand" name="ac_name" type="text"></p>
    <p>      
    <label class="w3-text-black"><b>Infomation</b></label>
    <input class="w3-input w3-border w3-sand" name="ac_data" type="text" rows="9"></p>
    <p>      
    <label for="ac_img" class="w3-text-black control-label">Photo :</label>
    <input type="file" name="ac_img" accept="image/*" required></p>
    <p>      
    <label class="w3-text-black"><b>Place</b></label>
    <input class="w3-input w3-border w3-sand" name="ac_place" type="text" ></p>
    <p>      
    <label class="w3-text-black"><b>Date&Time</b></label>
    <input class="w3-input w3-border w3-sand" name="ac_date" type="text" ></p>
    <p>      
    <label class="w3-text-black"><b>Contact</b></label>
    <input class="w3-input w3-border w3-sand" name="ac_contact" type="text" ></p>
    <p>      
    <label class="w3-text-black"><b>Founder</b></label>
    <input class="w3-input w3-border w3-sand" name="ac_founder" type="text" ></p>
 
    <p>
    <input type="hidden" name="ac_id" value="<?php echo $row['ac_id'] ?>">
    <button class="w3-btn w3-black" type = "submit">Save</button>
    <a href="ac_manage.php" class="w3-btn w3-black" >
    <span class="glyphicon glyphicon-plus">Cancel</span></a></p>
  </form>
</div>

</body>
</html>
