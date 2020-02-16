<?php

    require '../connect.php';

    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $conpassword = $_POST['conPassword'];
    if ($password != $conpassword) {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('รหัสผ่านไม่ตรงกัน');
            window.history.back();
            </script>");
        exit;
    }
    $name = $_POST['Name'];
    $department = 'Repair Man';
    $lastname = $_POST['Lastname'];
    $user_id = $_POST['Userid'];

    // encrypt
    $salt = 'helpdeskprojectmotherfucker';
    $hashpassword = hash_hmac('sha256', $password, $salt);


    // save username into database
    $query = "INSERT INTO users (user_id, username, password, name, lastname, role, dep) VALUES ('$user_id', '$username', '$hashpassword', '$name', '$lastname', 'repairman','$department')";
    $result = mysqli_query($dbcon, $query);
    if ($result) {
        echo ("<script>console.log('$result')</script>");
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('สมัครสมาชิกพนักงานสำเร็จ');
            window.location.href='/helpdeskproject/admin/form_repairman.php';
            </script>");
    } else {
        echo "เกิดข้อผิดพลาด ". mysqli_error($dbcon);
    }

    mysqli_close($dbcon);
?>  