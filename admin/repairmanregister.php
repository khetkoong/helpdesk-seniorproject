<?php

    require '../connect.php';

    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $conpassword = $_POST['conPassword'];
    if ($password != $conpassword) {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Confirm Password not Match!!');
            window.location.href='form_register.php';
            </script>");
        exit;
    }
    $name = $_POST['Name'];
    $department = $_POST['Department'];
    $lastname = $_POST['Lastname'];
    $user_id = $_POST['Userid'];

    // encrypt
    $salt = 'helpdeskprojectmotherfucker';
    $hashpassword = hash_hmac('sha256', $password, $salt);

    // check duplicate username
    // $checkdup = "SELECT * FROM `users` WHERE username = '".$username."'";
    // $resultdup = mysqli_query($dbcon, $checkdup);
    // if($resultdup) {
    //     echo ("<script LANGUAGE='JavaScript'>
    //         window.alert('Username already exist');
    //         window.location.href='form_register.php';
    //         </script>");
    //     exit;
    // }

    // save username into database
    $query = "INSERT INTO users (user_id, username, password, name, lastname, role, dep) VALUES ('$user_id', '$username', '$hashpassword', '$name', '$lastname', 'repairman','$department')";
    $result = mysqli_query($dbcon, $query);
    if ($result) {
        echo ("<script>console.log('$result')</script>");
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Repairman Register Success!!');
            window.location.href='form_repairmanregister.php';
            </script>");
    } else {
        echo "เกิดข้อผิดพลาด ". mysqli_error($dbcon);
    }

    mysqli_close($dbcon);
?>  