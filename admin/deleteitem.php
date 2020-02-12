<?php

session_start();

require '../connect.php';

$item_id = $_POST['item_id'];


$query = "DELETE FROM items WHERE item_id = '$item_id'";
$result = mysqli_query($dbcon, $query);

if ($result) {
    echo "<script>
                alert('ลบสิ่งของสำเร็จ');
                history.back();
            </script>";
} else {
    echo "เกิดข้อผิดพลาด " . mysqli_error($dbcon);
}

mysqli_close($dbcon);
?>