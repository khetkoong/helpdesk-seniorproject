<?php

session_start();

require '../connect.php';

$dep_id = $_POST['dep_id'];


$query = "DELETE FROM dep WHERE dep_id = '$dep_id'";
$result = mysqli_query($dbcon, $query);

if ($result) {
    echo "<script>
                alert('ลบสาขาสำเร็จ');
                history.back();
            </script>";
} else {
    echo "เกิดข้อผิดพลาด " . mysqli_error($dbcon);
}

mysqli_close($dbcon);
?>