<?php 
        require 'header_admin.php';

        //sql cs_class
        $sqlClass = "SELECT * FROM cs_class";
        $queryClass = pg_query($db, $sqlClass);

        //cs_student
        $sql_data = "SELECT MAX(st_id) FROM cs_student";
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
    <h2>Add Infomation</h2>
  </div>
  <form class="w3-container" action="st_insert.php" method="POST" enctype="multipart/form-data">

    <input name="st_id" type="hidden" class="w3-input w3-border w3-round-large" value="<?php echo $row_data2; ?>"> 
    
    <p>      
    <label class="w3-text-black"><b>Student Code</b></label>
    <input class="w3-input w3-border w3-sand" name="st_code" type="text"></p>
    
    
                    <label for="class_id" class="w3-text-black control-label">Class </label>
                    <div class="col-md-10">
                        <select name="class_id" id="owner_id" class="w3-input w3-border w3-sand">
                                    <!-- ดึงข้อมูลจากฐานข้อมูล -->
                                    <?php
                                        while($rowClass = pg_fetch_row($queryClass))
                                        {
                                            echo "<option value='$rowClass[0]'>$rowClass[1]</option>"; 
                                        }
                                    ?>
                        </select>
                    </div>
               

    <p>      
    <label class="w3-text-black"><b>FirstName</b></label>
    <input class="w3-input w3-border w3-sand" name="st_name" type="text" ></p>
    <p>      
    <label class="w3-text-black"><b>LastName</b></label>
    <input class="w3-input w3-border w3-sand" name="st_lname" type="text" ></p>
    <p>      
    <label for="st_img" class="w3-text-black control-label">Photo :</label>
    <input type="file" name="st_img" accept="image/*" required></p>
    <p>      
    <label class="w3-text-black"><b>Address</b></label>
    <input class="w3-input w3-border w3-sand" name="st_address" type="text" ></p>
    <p>      
    <label class="w3-text-black"><b>Went School</b></label>
    <input class="w3-input w3-border w3-sand" name="st_school" type="text" ></p>
    <p>      
    <label class="w3-text-black"><b>Contact</b></label>
    <input class="w3-input w3-border w3-sand" name="st_contact" type="text" ></p>
    
    <p>
    <button class="w3-btn w3-black" type = "submit">Save</button>
    <a href="st_manage.php" class="w3-btn w3-black" >
    <span class="glyphicon glyphicon-plus">Cancel</span></a></p>
  </form>
</div>

</body>
</html>
