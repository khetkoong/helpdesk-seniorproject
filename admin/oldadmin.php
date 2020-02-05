<?php 

    session_start();
    // if login yet
    if (!isset($_SESSION['id'])) {
        header("Location: form_login.php");
    }
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
<?php echo "<h1>ยินดีต้อนรับ : ". $_SESSION['username']. "</h1>"?>
    <a href="form_repairmanregister.php">เพิ่มช่างซ่อม</a>
    <hr />
    <a href="/helpdeskproject/logout.php">ออกจากระบบ</a>
</body>
</html>