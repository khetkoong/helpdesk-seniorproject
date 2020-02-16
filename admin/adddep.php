<?php

    require '../connect.php';

    $dep = $_POST['dep'];

    // check duplicate item
    $checkdup = "SELECT * FROM `dep` WHERE dep_name = '$dep'";
    $resultdup = mysqli_query($dbcon, $checkdup);
    if($resultdup->num_rows > 0) {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('สาขานี้มีอยู่แล้ว');
            window.history.back();
            </script>");
        exit;
    }

    $sql = "INSERT INTO dep (dep_name) VALUES ('$dep')";
    $result = mysqli_query($dbcon, $sql);
    if ($result) {
        echo ("<script>console.log('$result')</script>");
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('เพิ่มสาขาสำเร็จ');
            window.location.href='/helpdeskproject/admin/alldepartment.php';
            </script>");
    } else {    
        echo "เกิดข้อผิดพลาด ". mysqli_error($dbcon);
    }
    mysqli_close($dbcon);
?>  