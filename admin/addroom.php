<?php

    require '../connect.php';

    $room = $_POST['room'];

    // check duplicate item
    $checkdup = "SELECT * FROM `location` WHERE room_name = '$room'";
    $resultdup = mysqli_query($dbcon, $checkdup);
    if($resultdup->num_rows > 0) {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('สถานที่นี้มีอยู่แล้ว');
            window.location.href='/helpdeskproject/admin/form_addroom.php';
            </script>");
        exit;
    }

    $sql = "INSERT INTO location (room_name) VALUES ('$room')";
    $result = mysqli_query($dbcon, $sql);
    if ($result) {
        echo ("<script>console.log('$result')</script>");
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('เพิ่มสถานที่สำเร็จ');
            window.location.href='/helpdeskproject/admin/form_addroom.php';
            </script>");
    } else {
        echo "เกิดข้อผิดพลาด ". mysqli_error($dbcon);
    }
    mysqli_close($dbcon);
?>  