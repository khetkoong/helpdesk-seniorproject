<?php

    require '../connect.php';

    $item = $_POST['item'];

    // check duplicate item
    $checkdup = "SELECT * FROM `items` WHERE item_name = '$item'";
    $resultdup = mysqli_query($dbcon, $checkdup);
    if($resultdup->num_rows > 0) {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('สิ่งของนี้มีอยู่แล้ว');
            window.location.href='/helpdeskproject/admin/form_additem.php';
            </script>");
        exit;
    }

    $sql = "INSERT INTO items (item_name) VALUES ('$item')";
    $result = mysqli_query($dbcon, $sql);
    if ($result) {
        echo ("<script>console.log('$result')</script>");
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('เพิ่มสิ่งของสำเร็จ');
            window.location.href='/helpdeskproject/admin/form_additem.php';
            </script>");
    } else {
        echo "เกิดข้อผิดพลาด ". mysqli_error($dbcon);
    }
    mysqli_close($dbcon);
?>  