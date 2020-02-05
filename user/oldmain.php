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
    <title>Main</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php echo "<h1>ยินดีต้อนรับ : " . $_SESSION['name'] . "</h1>" ?>
    <?php echo "<small>แผนก : " . $_SESSION['department'] . "</small>" ?><br />

    <a href="main.php">หน้าหลัก</a> | <a href="form_ticket.php">แจ้งปัญหา</a> | <a href="success_tick.php">ปัญหาที่ได้รับการแก้ไขแล้ว</a> | <a href="all_tick.php">รวมการแจ้งปัญหา</a>
    <hr />  
    <h1>
        <p>ปัญหาที่คุณแจ้ง: </p>
    </h1>
    <?php

    $id = $_SESSION['id'];
    $name = $_SESSION['name'];

    $sql = "SELECT id, room, item, serial_num, detail, job_status FROM ticket WHERE submitted_name= '" .$name. "' AND job_status= 'waiting'";
    $result = $dbcon->query($sql);      
    
    if ($result->num_rows > 0) {
        // head of table
        echo "<table width='500' align='center'>";
        echo "<tr>";
        echo "<th>รหัสการแจ้งปัญหา</th>";
        echo "<th>ห้อง</th>";
        echo "<th>สิ่งของ</th>";
        echo "<th>Serial Number</th>";
        echo "<th>รายละเอียด</th>";
        echo "<th>สถานะ</th>";
        // echo "<th>Date</th>";
        echo "</tr>";

        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["room"] . "</td>";
            echo "<td>" . $row["item"] . "</td>";
            echo "<td>" . $row["serial_num"] . "</td>";
            echo "<td>" . $row["detail"] . "</td>";
            echo "<td>" . $row["job_status"] . "</td>";
            // echo "<td>" . $row["create_at"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
		echo "ในขณะนี้ยังไม่มีงาน <br />";
        echo "แจ้งปัญหาแล้วรึยัง? ";
		echo "<a href='form_ticket.php'>ไป</a>";
        /* echo "Have no job now <br />";
        echo "Go send Ticket? ";
        echo "<a href='form_ticket.php'>GO</a>"; */
    }

    ?>
    <hr />
    <a href="/helpdeskproject/logout.php">ออกจากระบบ</a>
</body>

</html>