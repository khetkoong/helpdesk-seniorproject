<?php

session_start();

require '../connect.php';

$room_id = $_POST['room_id'];


$query = "DELETE FROM location WHERE room_id = '$room_id'";
$result = mysqli_query($dbcon, $query);

if ($result) {
    echo "<script>
                alert('ลบสถานที่ปฏิบัติงานสำเร็จ');
                history.back();
            </script>";
} else {
    echo "เกิดข้อผิดพลาด " . mysqli_error($dbcon);
}

mysqli_close($dbcon);
?>