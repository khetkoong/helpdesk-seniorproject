<?php

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: form_login.php");
}

require '../connect.php';

$speed_point = $_POST['speed'];
$perfect_point = $_POST['perfect'];
$talk_point = $_POST['talk'];
$guide_point = $_POST['guide'];
$repairman_id = $_POST['repairman_id'];
$job_id = $_POST['job_id'];

if ($speed_point == 'verygood') {
    $speed_point_3 = 1;
    $speed_point_2 = 0;
    $speed_point_1 = 0;
} else if ($speed_point == 'good') {
    $speed_point_3 = 0;
    $speed_point_2 = 1;
    $speed_point_1 = 0;
} else {
    $speed_point_3 = 0;
    $speed_point_2 = 0;
    $speed_point_1 = 1;
}

if ($perfect_point == 'verygood') {
    $perfect_point_3 = 1;
    $perfect_point_2 = 0;
    $perfect_point_1 = 0;
} else if ($perfect_point == 'good') {
    $perfect_point_3 = 0;
    $perfect_point_2 = 1;
    $perfect_point_1 = 0;
} else {
    $perfect_point_3 = 0;
    $perfect_point_2 = 0;
    $perfect_point_1 = 1;
}

if ($talk_point == 'verygood') {
    $talk_point_3 = 1;
    $talk_point_2 = 0;
    $talk_point_1 = 0;
} else if ($talk_point == 'good') {
    $talk_point_3 = 0;
    $talk_point_2 = 1;
    $talk_point_1 = 0;
} else {
    $talk_point_3 = 0;
    $talk_point_2 = 0;
    $talk_point_1 = 1;
}

if ($guide_point == 'verygood') {
    $guide_point_3 = 1;
    $guide_point_2 = 0;
    $guide_point_1 = 0;
} else if ($guide_point == 'good') {
    $guide_point_3 = 0;
    $guide_point_2 = 1;
    $guide_point_1 = 0;
} else {
    $guide_point_3 = 0;
    $guide_point_2 = 0;
    $guide_point_1 = 1;
}

$sql = "UPDATE users 
SET speed_3 = speed_3 + $speed_point_3,
 speed_2 = speed_2 + $speed_point_2,
 speed_1 = speed_1 + $speed_point_1,

 perfect_3 = perfect_3 + $perfect_point_3,
 perfect_2 = perfect_2 + $perfect_point_2,
 perfect_1 = perfect_1 + $perfect_point_1,

 talk_3 = talk_3 + $talk_point_3,
 talk_2 = talk_2 + $talk_point_2,
 talk_1 = talk_1 + $talk_point_1,

 guide_3 = guide_3 + $guide_point_3,
 guide_2 = guide_2 +  $guide_point_2,
 guide_1 = guide_1 +  $guide_point_1

WHERE user_id = '$repairman_id'";

$result = mysqli_query($dbcon, $sql);

if ($result) {
    echo "<script>
                alert('ประเมินสำเร็จ \\nคุณได้ประเมินการแจ้งซ่อมที่ " . $job_id ."');
                window.location.href='detailrate.php';
            </script>";
} else {
    echo "เกิดข้อผิดพลาด " . mysqli_error($dbcon);
}

$sql2 = "UPDATE ticket SET isRate = '1' WHERE id = '$job_id '";
$result2 = mysqli_query($dbcon, $sql2);

mysqli_close($dbcon);
?>

