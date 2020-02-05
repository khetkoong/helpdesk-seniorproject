<?php

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: form_login.php");
}

require '../connect.php';

$jobid = $_POST['id'];


$query = "DELETE FROM `ticket` WHERE `ticket`.`id` = $jobid";
$result = mysqli_query($dbcon, $query);

if ($result) {
    echo "<script>
                alert('ลบรายการแจ้งซ่อมสำเร็จ');
                window.location.href='main.php';
            </script>";
} else {
    echo "เกิดข้อผิดพลาด " . mysqli_error($dbcon);
}

mysqli_close($dbcon);
