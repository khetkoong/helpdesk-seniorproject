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
    <title>Problem</title>
</head>
<body>

    <h1><?php echo "แจ้งปัญหาโดย : ". $_SESSION['name']?></h1>
    <br />
    <a href="main.php">หน้าหลัก</a> | <a href="form_ticket.php">แจ้งปัญหา</a> | <a href="success_tick.php">ปัญหาที่ได้รับการแก้ไขแล้ว</a> | <a href="all_tick.php">รวมการแจ้งปัญหา</a>
    <hr />

    <form name="frmlogin"  method="post" action="ticket.php">

        <!-- <p> Building :
          <input type="text"   name="building" required name="building" >
        </p> -->

        <p> ห้อง : 
        <!-- drop down list from db -->
        <?php
        $sql = "SELECT room_name FROM location";
        $result = $dbcon->query($sql);
        ?>
        <select name="room" from="frmlogin" required>
        <option disabled selected value> -- เลือกห้อง -- </option>
        <?php
        while ($rows = $result->fetch_assoc()) {
            $room_name = $rows['room_name'];
            echo "<option value='$room_name'>$room_name</option>";
        }
        ?>
        </select>
        </p>

        <p> สิ่งของ : 
        <!-- drop down list from db -->
        <?php
        $sql = "SELECT item_name FROM items";
        $result = $dbcon->query($sql);
        ?>
        <select name="item" from="frmlogin" required>
        <option disabled selected value> -- เลือกสิ่งของ -- </option>
        <?php
        while ($rows = $result->fetch_assoc()) {
            $item_name = $rows['item_name'];
            echo "<option value='$item_name'>$item_name</option>";
        }
        ?>
        </select>
        </p>
        Serial Number: 
        <input type="text" name="serial_num" required>
        <br /><br />
        รายละเอียด :
        <textarea name="detail" required></textarea>
        <p>
          <button type="submit">ตกลง</button>  
          &nbsp;&nbsp;
          <button type="reset">ล้างค่า</button>
          <br>
          <br>  
        </p>

      </form>
    
</body>
</html>