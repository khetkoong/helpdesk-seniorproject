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
    <title>Main</title>
</head>
<body>
    <?php echo "<h1>ชื่อช่าง : ". $_SESSION['name']."</h1>"?><br />
    <a href="jobs.php">งานทั้งหมด</a> | <a href="pending_job.php">งานที่กำลังรอ</a> | <a href="success_job.php">งานที่เสร็จแล้ว</a>
    <hr />
    <a href="/helpdeskproject/logout.php">ออกจากระบบ</a>
</body>
</html>