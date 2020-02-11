<?php

session_start();

require '../connect.php';

$user_id = $_POST['user_id'];


$query = "DELETE FROM users WHERE user_id = '$user_id'";
$result = mysqli_query($dbcon, $query);

if ($result) {
    echo "<script>
                alert('ลบพนักงานซ่อมสำเร็จ');
                history.back();
            </script>";
} else {
    echo "เกิดข้อผิดพลาด " . mysqli_error($dbcon);
}

mysqli_close($dbcon);
?>