<?php

require '../connect.php';

session_start();

// if login yet
if (!isset($_SESSION['id'])) {
    header("Location: form_login.php");
}
if ($_SESSION['role'] != 'repairman') {
    header("Location: form_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <h1>งานทั้งหมด : </h1><br />
    <a href="jobs.php">งานทั้งหมด</a> | <a href="pending_job.php">งานที่กำลังรอ</a> | <a href="success_job.php">งานที่เสร็จแล้ว</a>
    <hr />
    
    <?php
    $sql = "SELECT id, room, item, serial_num, detail, submitted_name, created_at, job_status FROM ticket WHERE job_status = 'waiting'";
    $result = $dbcon->query($sql);
    
    if ($result->num_rows > 0) {    
        // head of table
        echo "<table width='1000' align='center'>";
        echo "<tr>";
        echo "<th>รหัสการแจ้งปัญหา</th>";
        echo "<th>ห้อง</th>";
        echo "<th>สิ่งของ</th>";
        echo "<th>Serial Number</th>";
        echo "<th>รายละเอียด</th>";
        echo "<th>ส่งงานโดยช่าง</th>";
        echo "<th>วันที่ และ เวลา</th>";
        echo "<th>สถานะ</th>";
        echo "<th>รับงาน</th>";
        echo "</tr>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<form action='update_jobs.php' method='post'>";
            echo "<td><input name='id'type='text' value='" . $row['id'] . "' readOnly>";
            echo "<td>" . $row["room"] . "</td>";
            echo "<td>" . $row["item"] . "</td>";
            echo "<td>" . $row["serial_num"] . "</td>";
            echo "<td>" . $row["detail"] . "</td>";
            echo "<td>" . $row["submitted_name"] . "</td>";
            echo "<td>" . $row["created_at"] . "</td>";
            echo "<td>" . $row["job_status"] . "</td>";
            echo "<td><input type='submit' value='Get Job' />" . "</td>";
            echo "</tr>";
            echo "</form>";
        }
        echo "</table>";
    } else {
        echo "Have no job now <br />";
    }

    ?>
    <hr />
    <a href="repairman.php">ย้อนกลับหน้าหลัก</a>
</body>

</html>