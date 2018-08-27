<?php

    // Start the session
    session_start();

    require 'connectdb/connectdb.php';

    $user_username = pg_escape_string($_POST['cs_username']);
    $user_password = pg_escape_string($_POST['cs_password']);

    //เข้ารหัส login_password
    $key = 'sfdjak;nvkio[eirujgtf049u15678465wefqawe';
    $hash_login_password = hash_hmac('sha256', $user_password, $key); // login_password
    
    //Sql Query
    $sql = "SELECT * from cs_user WHERE cs_username='$user_username' and cs_password='$hash_login_password'";
    $query = pg_query($db, $sql);
    $result = pg_fetch_array($query);
    
    if ($result) {
        // Set session variables
        $_SESSION['cs_id'] = $result['cs_id'];
        $_SESSION['cs_status'] = $result['cs_status'];

        session_write_close();

        if ($result['cs_status'] == 'admin') {
            header("Location:backend/ac_manage.php");
        } 
        else {
            header("Location:user/ac_manage.php");
        }
    } 
    else {
        echo '<script>
                alert("ชื่อ หรือ รหัสผ่าน ไม่ถูกต้อง");
                window.location="cs_login.php";
              </script>'; 
    }

    pg_close($db);
