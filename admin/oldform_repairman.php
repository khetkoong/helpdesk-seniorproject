<?php

require '../connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
</head>

<body>
    <h1>ข้อมูลช่างซ่อม</h1>
    <hr /> <br />
                    <form name="register" id="register" action="repairmanregister.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="Name" required autofocus placeholder="ชื่อ"> <br /><br />
                        </div>
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-email"></i></label>
                            <input type="text" name="Lastname" placeholder="นามสกุล" required autofocus> <br /><br />
                        </div>
                        <div class="form-group">
                        <!-- drop down list from db -->
                        <?php
                        $sql = "SELECT dep_name FROM dep";
                        $result = $dbcon->query($sql);
                        ?>
                        <select class="form-control" name="Department" from="register" required>
                            <option disabled selected value>เลือกแผนก</option>
                            <?php
                            while ($rows = $result->fetch_assoc()) {
                                $dep_name = $rows['dep_name'];
                                echo "<option value='$dep_name'>$dep_name</option>";
                            }
                            ?>
                        </select> <br /><br />
                        </div>
                        <!-- END dropdown -->
                        <div class="form-group">
                            <label for="name"><i cl ass="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="Userid" required autofocus placeholder="รหัสพนักงาน"> <br /><br />
                        </div>
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="Username" required autofocus placeholder="ชื่อผู้ใช้"> <br /><br />
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="Password" id="pass" placeholder="รหัสผ่าน" /> <br /><br />
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="conPassword" required autofocus placeholder="ยืนยันรหัสผ่าน"> <br /><br />
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="สมัครสมาชิก" /> <br /><br />
                        </div>
                    </form>
                    <a href="admin.php">ย้อนกลับหน้าหลัก</a>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>