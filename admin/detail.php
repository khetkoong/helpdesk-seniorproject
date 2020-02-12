<?php

require '../connect.php';

session_start();

// if login yet
if (!isset($_SESSION['id'])) {
    header("Location: form_login.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Helpdesk: User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link href="../main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button hidden type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">เมนู</li>
                            <li>
                                <a href="/helpdeskproject/admin/admin.php">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    หน้าหลัก
                                </a>
                            </li>
                            <li>
                            <li class="mm-active">
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-add-user"></i>
                                    พนักงานซ่อม
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>

                                <ul class="mm-show">
                                    <li>
                                        <a href="#" class="mm-active">
                                            <i class="metismenu-icon"></i>
                                            รายชื่อพนักงานซ่อม
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/helpdeskproject/admin/form_repairman.php">
                                            <i class="metismenu-icon"></i>
                                            เพิ่มช่างซ่อม
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            </li>
                            <li>
                                <a href="/helpdeskproject/admin/form_additem.php">
                                    <i class="metismenu-icon pe-7s-tools"></i>
                                    เพิ่มสิ่งของ
                                </a>
                            </li>
                            <li>
                                <a href="/helpdeskproject/admin/form_addroom.php">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    เพิ่มสถานที่ปฏิบัติงาน
                                </a>
                            </li>
                            <li>
                                <a href="/helpdeskproject/logout.php">
                                    <i class="metismenu-icon pe-7s-power"></i>
                                    ออกจากระบบ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-home icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>หน้ารายละเอียดการแจ้งซ่อม
                                    <div class="page-title-subheading">หน้ารายละเอียดจะแสดงข้อมูลต่างๆ ที่ผู้ใช้แจ้งซ่อมเอาไว้
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MAIN LAYOUT START HERE -->
                    <?php echo "<h1>ยินดีต้อนรับ : " . $_SESSION['name'] . "</h1>" ?>
                    <?php echo "แผนก : " . $_SESSION['department'] . "" ?><br />

                    <hr />
                    <br />
                    <h2>
                        <p>รายละเอียดการแจ้งซ่อม</p>
                    </h2>
                    <?php
                    $user_id = $_POST['user_id'];
                    $sql = "SELECT * FROM `users` WHERE user_id = '$user_id'";
                    $result = $dbcon->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                            $id = $row["id"];
                            $user_id = $row["user_id"];
                            $username = $row["username"];
                            $name = $row["name"];
                            $lastname = $row["lastname"];
                            $role = $row["role"];
                            $dep = $row["dep"];
                            $created_at = $row["created_at"];
                        }
                    }
                    ?>
                    <?php
                        $sql = "SELECT COUNT(*) FROM ticket WHERE repairman_id = '$user_id'";
                        $result = $dbcon->query($sql);
                        $row = $result->fetch_row();
                        $jobtotal = $row[0];
                    ?>
                    <?php
                        $sql = "SELECT COUNT(*) FROM ticket WHERE repairman_id = '$user_id' AND job_status = 'pending'";
                        $result = $dbcon->query($sql);
                        $row = $result->fetch_row();
                        $jobpending = $row[0];
                    ?>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">รายละเอียดพนักงานซ่อม : <?php echo "$user_id" ?></h5>
                            <form class="">
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="position-relative form-group"><label for="examplePassword11" class="">รหัสพนักงาน</label><input name="text" id="examplePassword11" placeholder="-" type="text" class="form-control" value="<?php echo "$user_id" ?>" disabled></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">ชื่อผู้ใช้งาน</label><input name="text" id="exampleEmail11" placeholder="-" type="text" class="form-control" value="<?php echo "$username" ?>" disabled></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group"><label for="examplePassword11" class="">ชื่อพนักงาน</label><input name="text" id="examplePassword11" placeholder="-" type="text" class="form-control" value="<?php echo "$name" ?>" disabled></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">นามสกุล</label><input name="text" id="exampleEmail11" placeholder="-" type="text" class="form-control" value="<?php echo "$lastname" ?>" disabled></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">แผนก</label><input name="text" id="exampleEmail11" placeholder="-" type="text" class="form-control" value="<?php echo "$dep" ?>" disabled></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">เวลาที่สร้างพนักงาน</label><input name="text" id="exampleEmail11" placeholder="-" type="text" class="form-control" value="<?php echo "$created_at" ?>" disabled></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">จำนวนงานทั้งหมดที่กดรับ</label><input name="text" id="exampleEmail11" placeholder="-" type="text" class="form-control" value="<?php echo "$jobtotal" ?>" disabled></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group"><label for="exampleEmail11" class="">ปัญหาแจ้งซ่อมที่ยังไม่ได้แก้ไข</label><input name="text" id="exampleEmail11" placeholder="-" type="text" class="form-control" value="<?php echo "$jobpending" ?>" disabled></div>
                                    </div>
                                </div>
                                <hr />
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <input type="button" value="ย้อนกลับ" class="btn btn-primary" onclick="history.back()">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- MAIN LAYOUT STOP HERE -->
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../assets/scripts/main.js"></script>
</body>

</html>