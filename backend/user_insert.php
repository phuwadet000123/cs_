<?php

        require '../connectdb/connectdb.php';
        
        //รับค่าตัวแปรจากฟอร์ม
        
        $cs_name = pg_escape_string($db, $_POST['cs_name']);
        $cs_surname = pg_escape_string($db, $_POST['cs_surname']);
        $cs_address = pg_escape_string($db, $_POST['cs_address']);
        $cs_tel = pg_escape_string($db, $_POST['cs_tel']);
        $cs_username = pg_escape_string($db, $_POST['cs_username']);
        $cs_password = pg_escape_string($db, $_POST['cs_password']);
        $cs_email = pg_escape_string($db, $_POST['cs_email']);
        $cs_status = pg_escape_string($db, $_POST['cs_status']);
        
        //เข้ารหัส login_password
        $key = 'sfdjak;nvkio[eirujgtf049u15678465wefqawe';
        $hash_login_password = hash_hmac('sha256', $cs_password, $key); // login_password
        
        //คำสั่ง sql
        $query = "  INSERT INTO cs_user(cs_name, cs_surname, cs_address, cs_tel, cs_username, cs_password, cs_email, cs_status) 
                    VALUES ('$cs_name','$cs_surname','$cs_address', '$cs_tel','$cs_username', '$hash_login_password', '$cs_email', '{$cs_status}')";
        $result = pg_query($db, $query);
        
        //check 
        if($result){
            //echo 
            header("Location: user_manage.php");
        } else {
            echo pg_last_error($db);
        }
        
        pg_close($db);