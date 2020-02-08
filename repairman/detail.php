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
                                <a href="/helpdeskproject/repairman/repairman.php">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    หน้าหลัก
                                </a>
                            </li>
                            <li>
                                <a href="/helpdeskproject/repairman/pending_job.php">
                                    <i class="metismenu-icon pe-7s-file"></i>
                                    งานที่กำลังรอ
                                </a>
                            </li>
                            <li>
                                <a href="/helpdeskproject/repairman/success_job.php">
                                    <i class="metismenu-icon pe-7s-tools"></i>
                                    งานที่เสร็จแล้ว
                                </a>
                            </li>
                            <!-- <li>
                                <a href="/helpdeskproject/repairman/success_tick.php">
                                    <i class="metismenu-icon pe-7s-tools"></i>
                                    ปัญหาที่ได้รับการแก้ไขแล้ว
                                </a>
                            </li>
                            <li>
                                <a href="/helpdeskproject/repairman/all_tick.php">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    รวมการแจ้งปัญหา
                                </a>
                            </li> -->
                            <li>
                                <a href="/helpdeskproject/logout.php">
                                    <i class="metismenu-icon pe-7s-door-lock"></i>
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
                        $jobid = $_POST['id'];
                        $sql = "SELECT * FROM `ticket` WHERE id = $jobid";
                        $result = $dbcon->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row["id"];
                                $room = $row["room"];
                                $item = $row["item"];
                                $serial_num = $row["serial_num"];

                                $detail = $row["detail"];

                                $submitted_name = $row["submitted_name"];
                                $user_id = $row["user_id"];
                                // if ($row["repairman"] == '') {
                                //     $repairman = "-";
                                // } else {
                                    $repairman = $row["repairman"];
                                // }

                                $job_status = $row["job_status"];
                                
                                // if ($row["job_status"] == 'waiting') {
                                //     $job_status = "<div class='badge badge-info'>" . $row["job_status"] . "</div>";
                                // } else if ($row["job_status"] == 'pending') {
                                //     $job_status = "<div class='badge badge-warning'>" . $row["job_status"] . "</div>";
                                // } else {
                                //     $job_status = "<div class='badge badge-success'>" . $row["job_status"] . "</div>";
                                // }

                                
                                $created_at = $row["created_at"];
                                $pending_at = $row["pending_at"];
                                $success_at = $row["success_at"];
                            }
                        }
                    ?>
                    <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">รายละเอียดการแจ้งซ่อมของ : <?php echo "$id" ?></h5>
                                        <form class="">
                                            <div class="form-row">
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">รหัสการแจ้งซ่อม</label><input name="text" id="exampleEmail11" placeholder="-" type="text" class="form-control" value="<?php echo "$id" ?>" disabled></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">ห้อง</label><input name="text" id="examplePassword11" placeholder="-" type="text" class="form-control" value="<?php echo "$room" ?>" disabled></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">ครุภัณฑ์</label><input name="text" id="exampleEmail11" placeholder="-" type="text" class="form-control" value="<?php echo "$item" ?>" disabled></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">รหัสครุภัณฑ์</label><input name="text" id="examplePassword11" placeholder="-" type="text" class="form-control" value="<?php echo "$serial_num" ?>" disabled></div>
                                                </div>
                                            </div>

                                            <div class="position-relative form-group"><label for="exampleAddress" class="">รายละเอียด</label><input name="address" id="exampleAddress" placeholder="-" type="textarea" class="form-control" value="<?php echo "$detail" ?>" disabled></div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">ชื่อผู้แจ้งซ่อม</label><input name="text" id="exampleEmail11" placeholder="-" type="text" class="form-control" value="<?php echo "$submitted_name" ?>" disabled></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">ชื่อพนักงานที่รับงานซ่อม</label><input name="text" id="examplePassword11" placeholder="-" type="text" class="form-control" value="<?php echo "$repairman" ?>" disabled></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">สถานะการแจ้งซ่อม</label><input name="text" id="exampleEmail11" placeholder="-" type="text" class="form-control" value="<?php echo "$job_status" ?>" disabled></div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">เวลาที่สร้างงาน</label><input name="text" id="exampleEmail11" placeholder="-" type="text" class="form-control" value="<?php echo "$created_at" ?>" disabled></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="examplePassword11" class="">เวลาที่พนักงานรับงาน</label><input name="text" id="examplePassword11" placeholder="-" type="text" class="form-control" value="<?php echo "$pending_at" ?>" disabled></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">เวลาที่การแจ้งซ่อมเสร็จสิ้น</label><input name="text" id="exampleEmail11" placeholder="-" type="text" class="form-control" value="<?php echo "$success_at" ?>" disabled></div>
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