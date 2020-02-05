<?php

require '../connect.php';

session_start();

// if login yet
if (!isset($_SESSION['id'])) {
    header("Location: form_login.php");
}
if ($_SESSION['role'] != 'member') {
    header("Location: admin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success Problems</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <h1>ปัญหาที่ได้รับการแก้ไขแล้ว: </h1>

    <br />
    <a href="main.php">หน้าหลัก</a> | <a href="form_ticket.php">แจ้งปัญหา</a> | <a href="success_tick.php">ปัญหาที่ได้รับการแก้ไขแล้ว</a> | <a href="all_tick.php">รวมการแจ้งปัญหา</a>
    <hr />
    <br /><br />
    <?php
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $sql = "SELECT id, room, item, detail, job_status FROM ticket WHERE submitted_name = '" . $name . "' AND job_status= 'success'";
    $result = $dbcon->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>รหัสการแจ้งปัญหา</th>";
        echo "<th>ห้อง</th>";
        echo "<th>สิ่งของ</th>";
        echo "<th>รายละเอียด</th>";
        echo "<th>สถานะ</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["room"] . "</td>";
            echo "<td>" . $row["item"] . "</td>";
            echo "<td>" . $row["detail"] . "</td>";
            echo "<td>" . $row["job_status"] . "</td>";
            echo "</tr>";
            echo "</tbody>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "ในขณะนี้ยังไม่มีงาน <br />";
        echo "แจ้งปัญหาแล้วรึยัง? ";
        echo "<a href='form_ticket.php'>ไป</a>";
    }
    ?>

    <br /><br />
    <hr />
</body>

</html>