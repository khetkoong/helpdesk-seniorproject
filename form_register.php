<html>
<?php
require 'connect.php';
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon icon -->
    <link rel="icon" href="images/helpdesk.png" type="image/icon type">
    <title>Final Project: Helpdesk</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Custom CSS -->
    <link href="http://asset.oppo.in.th/css/style.css" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
        .btn-info,
        .btn-info.disabled {
            background: #6666FF;
            border: 1px solid #6666FF;
            -webkit-box-shadow: 0 2px 2px 0 rgba(66, 165, 245, 0.14), 0 3px 1px -2px rgba(66, 165, 245, 0.2), 0 1px 5px 0 rgba(66, 165, 245, 0.12);
            box-shadow: 0 2px 2px 0 rgba(66, 165, 245, 0.14), 0 3px 1px -2px rgba(66, 165, 245, 0.2), 0 1px 5px 0 rgba(66, 165, 245, 0.12);
            -webkit-transition: 0.2s ease-in;
            -o-transition: 0.2s ease-in;
            transition: 0.2s ease-in;
        }

        .btn-info:hover,
        .btn-info.disabled:hover {
            background: #6666FF;
            border: 1px solid #6666FF;
            -webkit-box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
            box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
        }

        .btn-info.active,
        .btn-info:focus,
        .btn-info.disabled.active,
        .btn-info.disabled:focus {
            background: #6666FF;
            -webkit-box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
            box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
        }

        .btn-info.active.focus,
        .btn-info.active:focus,
        .btn-info.active:hover,
        .btn-info.focus:active,
        .btn-info:active:focus,
        .btn-info:active:hover,
        .open>.dropdown-toggle.btn-info.focus,
        .open>.dropdown-toggle.btn-info:focus,
        .open>.dropdown-toggle.btn-info:hover,
        .btn-info.focus,
        .btn-info:focus {
            background-color: #6666FF;
            border: 1px solid #6666FF;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div class="container">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <h2 class="card-title mt-2 center">สมัครสมาชิก</h2>
                    </header>
                    <article class="card-body">
                        <form name="register" id="register" action="register.php" method="POST">
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>ชื่อ </label>
                                    <input type="text" class="form-control" name="Name" required autofocus>
                                </div> <!-- form-group end.// -->
                                <div class="col form-group">
                                    <label>นามสกุล</label>
                                    <input type="text" class="form-control" name="Lastname" required autofocus>
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row end.// -->
                            <div class="form-group">
                                <label>รหัสพนักงาน</label>
                                <input type="text" class="form-control" name="Userid" required autofocus>
                            </div> <!-- form-group end.// -->
                            <div class="form_group">
                                <label>สาขา</label>
                                <?php
                                $sql = "SELECT dep_name FROM dep";
                                $result = $dbcon->query($sql);
                                ?>
                                <select required autofocus id="inputState" class="form-control" name="Department">
                                    <option>- กรุณาเลือก -</option>
                                    <?php
                                    while ($rows = $result->fetch_assoc()) {
                                        $dep_name = $rows['dep_name'];
                                        echo "<option value='$dep_name'>$dep_name</option>";
                                    }
                                    ?>
                                </select>
                                <br />
                                <br />
                            </div>
                            <div class="form-group">
                                <label>ชื่อผู้ใช้</label>
                                <input type="text" class="form-control" name="Username" required autofocus>
                                <small>
                                    <p class="text-danger">** ใช้สำหรับเข้าสู่ระบบ</p>
                                </small>
                            </div> <!-- form-group end.// -->
                            <div class="form-group">
                                <label>รหัสผ่าน</label>
                                <input class="form-control" type="password" name="Password" required autofocus>
                                <small>
                                    <p class="text-danger">** ใช้สำหรับเข้าสู่ระบบ</p>
                                </small>
                            </div> <!-- form-group end.// -->
                            <div class="form-group">
                                <label>ยืนยันรหัสผ่าน</label>
                                <input type="password" class="form-control" name="conPassword" required autofocus>
                            </div> <!-- form-group end.// -->
                            <hr />
                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-block">สมัครสมาชิก </button>
                            </div> <!-- form-group// -->
                        </form>
                    </article> <!-- card-body end .// -->
                    <div class="text-center">
                        <p class="text-center">ฉันมีรหัสผู้ใช้งานแล้ว <a href="form_login.php">เข้าสู่ระบบ</a></p>
                    </div>
                </div> <!-- card.// -->
            </div> <!-- col.//-->
        </div> <!-- row.//-->
    </div>
    <!--Custom JavaScript -->
    <script src="http://asset.oppo.in.th/js/custom.min.js"></script>
</body>

</html>