<?php

    require 'connect.php';

    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // encrypt
    $salt = 'helpdeskprojectmotherfucker';
    $hashpassword = hash_hmac('sha256', $password, $salt);

    $sql = "SELECT * FROM users WHERE username=? AND password=?";
    $stmt = mysqli_prepare($dbcon, $sql);

    mysqli_stmt_bind_param($stmt, "ss", $username, $hashpassword);

    mysqli_execute($stmt);

    $result_user = mysqli_stmt_get_result($stmt);

    if ($result_user->num_rows == 1) {
        session_start();
        $row_user = mysqli_fetch_array($result_user, MYSQLI_ASSOC);

        $_SESSION['id'] = $row_user['id'];
        $_SESSION['username'] = $row_user['username'];
        $_SESSION['password'] = $row_user['password'];
        $_SESSION['name'] = $row_user['name'];
        $_SESSION['role'] = $row_user['role'];
        $_SESSION['department'] = $row_user['dep'];

        if($row_user['role'] == 'admin') {
            header("Location: /helpdeskproject/admin/admin.php");
        }
        if($row_user['role'] == 'member') {
            header("Location: /helpdeskproject/user/main.php");
        }
        if($row_user['role'] == 'repairman') {
            header("Location: /helpdeskproject/repairman/repairman.php");
        }

    } else {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('ชื่อผู้ใช้ หรือ รหัสผ่าน ผิด');
        window.location.href='form_login.php';
        </script>");
    }
    mysqli_close($dbcon);
?>