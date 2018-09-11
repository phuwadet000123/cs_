<?php 
        require 'header_admin.php';        
?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https//www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <div class="w3-card-4 w3-container">
            <div class="w3-container w3-dark-grey" >
            <h2>กรอกข้อมูลสมาชิก</h2>
            </div>
            
            <form action="user_insert.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                
               
                
                <!-- user_name -->
                
                   <p> <label for="cs_name" class="w3-text-black">ชื่อ </label>
                    
                        <input name="cs_name" type="text" class="w3-input w3-border w3-sand" placeholder="ชื่อ" required>
                        </p>
                
                
                <!-- user_surname -->
                
                <p><label for="cs_surname" class="w3-text-black">นามสกุล </label>
                    
                        <input name="cs_surname" type="text" class="w3-input w3-border w3-sand" placeholder="นามสกุล" required>
                        </p>
                
                
                <!-- user_address -->
                
                <p> <label for="cs_address" class="w3-text-black">ที่อยู่ </label>
                    
                        <textarea name="cs_address" class="w3-input w3-border w3-sand" rows="5" id="comment" required>
                      
                        </textarea>
                        </p>
                
                
                <!-- user_tel -->
                
                <p><label for="cs_tel" class="w3-text-black">เบอร์โทรศัพท์ </label>
                    
                        <input name="cs_tel" type="text" class="w3-input w3-border w3-sand" placeholder="xxx-xxxxxxx" required>
                        </p> 
                
                
                <!-- user_username -->
                
                <p> <label for="cs_username" class="w3-text-black">ชื่อผู้ใช้ </label>
                    
                        <input name="cs_username" type="text" class="w3-input w3-border w3-sand" placeholder="username" required>
                        </p> 
                
                
                <!-- user_password -->
                
                <p>    <label for="cs_password" class="w3-text-black">รหัสผ่าน </label>
                    
                        <input name="cs_password" type="password" class="w3-input w3-border w3-sand" placeholder="password" required>
                        </p> 
                
                
                <!-- user_email -->
                
                <p> <label for="cs_email" class="w3-text-black">อีเมล </label>
                    
                        <input name="cs_email" type="email" class="w3-input w3-border w3-sand" placeholder="email" required>
                        </p>
                
                
                <!-- user_status -->
                
                <p>  <label for="cs_status" class="w3-text-black">สถานะ </label>
                                                               
                        <label class="radio-inline">
                            <input type="radio" name="cs_status" value="user" checked>
                            User
                        </label>                        
                        <!--<label class="radio-inline">
                            <input type="radio" name="user_status" value="admin" >
                            Admin
                        </label>  -->                     
                        </p> 
                

                <!-- button -->
                
                <p>   <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="w3-btn w3-black">บันทึก</button>
                        <a href="user_manage.php" class="w3-btn w3-black">กลับหน้าหลัก</a>
                    </div>
                    </p>
                <br><br>
                
            </form>
            
        </div>
    </body>
</html>
