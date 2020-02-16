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
                                <a href="/helpdeskproject/user/main.php">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    หน้าหลัก
                                </a>
                            </li>
                            <li>
                                <a href="/helpdeskproject/user/form_ticket.php">
                                    <i class="metismenu-icon pe-7s-file"></i>
                                    แจ้งปัญหา
                                </a>
                            </li>
                            <li>
                                <a href="/helpdeskproject/user/waiting_tick.php">
                                    <i class="metismenu-icon pe-7s-tools"></i>
                                    ปัญหาที่อยู่ในระหว่างดำเนินการ
                                </a>
                            </li>
                            <li>
                                <a href="/helpdeskproject/user/success_tick.php">
                                    <i class="metismenu-icon pe-7s-check"></i>
                                    ปัญหาที่ได้รับการแก้ไขแล้ว
                                </a>
                            </li>
                            <li>
                                <a href="/helpdeskproject/user/all_tick.php">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    รวมการแจ้งปัญหา
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
                                <div>หน้าประเมินพนักงานซ่อม
                                    <div class="page-title-subheading">หน้าประเมินการซ่อม เพื่อให้ปรับปรุงในการทำงานในครั้งต่อๆไป
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
                            $repairman = $row["repairman"];
                            $repairman_id = $row['repairman_id'];
                            $job_status = $row["job_status"];
                            $created_at = $row["created_at"];
                            $pending_at = $row["pending_at"];
                            $success_at = $row["success_at"];
                        }
                    }
                    ?>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">ประเมินการแจ้งซ่อมขงอของ : <?php echo "$id" ?></h5>
                            <form action='rate.php' method='post'>
                                <input hidden name='job_id' value='<?php echo $id ?>' />
                                <input hidden name='repairman_id' value='<?php echo $repairman_id ?>' />
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
                                <hr />
                                <h5 class="card-title">1. ความเร็วในการทำงาน</h5>
                                <div class="position-relative form-group">
                                    <div>
                                        <div class="custom-radio custom-control"><input value='verygood' type="radio" id="speed_3" name="speed" class="custom-control-input"><label class="custom-control-label" for="speed_3">
                                                ดีมาก </label>
                                        </div>
                                        <div class="custom-radio custom-control"><input value='good' type="radio" id="speed_2" name="speed" class="custom-control-input"><label class="custom-control-label" for="speed_2">
                                                ดี </label>
                                        </div>
                                        <div class="custom-radio custom-control"><input value='normal' type="radio" id="speed_1" name="speed" class="custom-control-input"><label class="custom-control-label" for="speed_1">
                                                พอใช้ </label>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title">2. ความเรียบร้อยของการทำงาน</h5>
                                <div class="position-relative form-group">
                                    <div>
                                        <div class="custom-radio custom-control"><input value='verygood' type="radio" id="perfect_3" name="perfect" class="custom-control-input"><label class="custom-control-label" for="perfect_3">
                                                ดีมาก </label>
                                        </div>
                                        <div class="custom-radio custom-control"><input value='good' type="radio" id="perfect_2" name="perfect" class="custom-control-input"><label class="custom-control-label" for="perfect_2">
                                                ดี </label>
                                        </div>
                                        <div class="custom-radio custom-control"><input value='normal' type="radio" id="perfect_1" name="perfect" class="custom-control-input"><label class="custom-control-label" for="perfect_1">
                                                พอใช้ </label>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title">3. การปฏิสัมพันธ์กับผู้ใช้</h5>
                                <div class="position-relative form-group">
                                    <div>
                                        <div class="custom-radio custom-control"><input value='verygood' type="radio" id="talk_3" name="talk" class="custom-control-input"><label class="custom-control-label" for="talk_3">
                                                ดีมาก </label>
                                        </div>
                                        <div class="custom-radio custom-control"><input value='good' type="radio" id="talk_2" name="talk" class="custom-control-input"><label class="custom-control-label" for="talk_2">
                                                ดี </label>
                                        </div>
                                        <div class="custom-radio custom-control"><input value='normal' type="radio" id="talk_1" name="talk" class="custom-control-input"><label class="custom-control-label" for="talk_1">
                                                พอใช้ </label>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title">4. การให้คำแนะนำ, แจ้งอาการของเครื่อง และอธิบายถึงการแก้ปัญหา</h5>
                                <div class="position-relative form-group">
                                    <div>
                                        <div class="custom-radio custom-control"><input value='verygood' type="radio" id="guide_3" name="guide" class="custom-control-input"><label class="custom-control-label" for="guide_3">
                                                ดีมาก </label>
                                        </div>
                                        <div class="custom-radio custom-control"><input value='good' type="radio" id="guide_2" name="guide" class="custom-control-input"><label class="custom-control-label" for="guide_2">
                                                ดี </label>
                                        </div>
                                        <div class="custom-radio custom-control"><input value='normal' type="radio" id="guide_1" name="guide" class="custom-control-input"><label class="custom-control-label" for="guide_1">
                                                พอใช้ </label>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <input type="submit" value="ยืนยัน" class="btn btn-primary">
                                    </div>
                                </div>
                                <?php
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
                                            $repairman = $row["repairman"];
                                            $repairman_id = $row['repairman_id'];
                                            $job_status = $row["job_status"];
                                            $created_at = $row["created_at"];
                                            $pending_at = $row["pending_at"];
                                            $success_at = $row["success_at"];
                                        }
                                    }
                                ?>
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