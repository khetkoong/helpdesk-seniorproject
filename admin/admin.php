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
    <title>Helpdesk: Admin</title>
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
                                <a href="#" class="mm-active">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    หน้าหลัก
                                </a>
                            </li>
                            <li>
                                <a href="/helpdeskproject/admin/alluser.php">
                                    <i class="metismenu-icon pe-7s-id"></i>
                                    รายชื่อผู้ใช้งาน
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-add-user"></i>
                                    พนักงานซ่อม
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="/helpdeskproject/admin/allrepairman.php">
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
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-tools"></i>
                                    สิ่งของ
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="/helpdeskproject/admin/allitem.php">
                                            <i class="metismenu-icon"></i>
                                            รายชื่อสิ่งของ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/helpdeskproject/admin/form_additem.php">
                                            <i class="metismenu-icon"></i>
                                            เพิ่มสิ่งของ
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    สถานที่ปฏิบัติงาน
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="/helpdeskproject/admin/allroom.php">
                                            <i class="metismenu-icon"></i>
                                            รายชื่อสถานที่ปฏิบัติงาน
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/helpdeskproject/admin/form_addroom.php">
                                            <i class="metismenu-icon"></i>
                                            เพิ่มสถานที่ปฏิบัติงาน
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-notebook"></i>
                                    สาขา
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="/helpdeskproject/admin/alldepartment.php">
                                            <i class="metismenu-icon"></i>
                                            รายชื่อสาขา
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/helpdeskproject/admin/form_adddep.php">
                                            <i class="metismenu-icon"></i>
                                            เพิ่มสาขา
                                        </a>
                                    </li>
                                </ul>
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
                                <div>หน้าหลัก
                                    <div class="page-title-subheading">หน้าหลักจะแสดงข้อมูลรายงานต่างๆเบื้องต้น
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MAIN LAYOUT START HERE -->
                    <?php echo "<h1>ยินดีต้อนรับ : " . $_SESSION['name'] . "</h1>" ?>
                    แผนก: Admin
                    <hr />
                    <br />
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-primary">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">แอดมิน</div>
                                        <div class="widget-subheading">ทั้งหมด</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>
                                                <?php
                                                $name = $_SESSION['name'];
                                                $sql = "SELECT COUNT(*) FROM users WHERE role ='admin'";
                                                $result = $dbcon->query($sql);
                                                $row = $result->fetch_row();
                                                echo $row[0];
                                                $user_total = $row[0];
                                                ?>
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-success">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">ผู้ใช้งานทั่วไป</div>
                                        <div class="widget-subheading">ทั้งหมด</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>
                                                <?php
                                                $name = $_SESSION['name'];
                                                $sql = "SELECT COUNT(*) FROM users WHERE role = 'repairman'";
                                                $result = $dbcon->query($sql);
                                                $row = $result->fetch_row();
                                                echo $row[0];
                                                $user_member = $row[0];
                                                ?>
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-warning">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">พนักงานซ่อม</div>
                                        <div class="widget-subheading">ทั้งหมด</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>
                                                <?php
                                                $name = $_SESSION['name'];
                                                $sql = "SELECT COUNT(*) FROM users WHERE role = 'member'";
                                                $result = $dbcon->query($sql);
                                                $row = $result->fetch_row();
                                                echo $row[0];
                                                $user_repairman = $row[0];
                                                ?>
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-card mb-3 card">
                                <div class="card-body" id="test">
                                    <h5 class="card-title">ชาร์ตจำนวนการแจ้งซ่อมทั้งหมด
                                        <button id="btnDownload" type='button' class='btn btn-success pull-right'>บันทึกรูปภาพ</button>
                                        <br />
                                        <br />
                                        <hr />
                                    </h5>
                                    <canvas id="job_status2"></canvas>
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">ชาร์ตจำนวนผู้ใช้งั้นทั้งระบบ
                                        <button id="btnDownload2" type='button' class='btn btn-success pull-right'>บันทึกรูปภาพ</button>
                                        <br />
                                        <br />
                                        <hr />
                                    </h5>
                                    <canvas id="role2"></canvas>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <canvas hidden id="job_status"></canvas>
                        <canvas hidden id="role"></canvas>
                    </div>

                    <!-- <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Polar Chart</h5>
                                    <canvas id="polar-chart"></canvas>
                                </div>
                            </div> -->
                </div>
            </div>

        </div>
    </div>
    <!-- MAIN LAYOUT STOP HERE -->
    </div>
    </div>
    </div>
    <?php
    $sql = "SELECT COUNT(*) FROM ticket ";
    $result = $dbcon->query($sql);
    $row = $result->fetch_row();
    echo $row[0];
    $job_total = $row[0];
    ?>
    <?php
    $sql = "SELECT COUNT(*) FROM ticket WHERE job_status = 'waiting'";
    $result = $dbcon->query($sql);
    $row = $result->fetch_row();
    echo $row[0];
    $job_waiting = $row[0];
    ?>
    <?php
    $sql = "SELECT COUNT(*) FROM ticket WHERE job_status = 'pending'";
    $result = $dbcon->query($sql);
    $row = $result->fetch_row();
    echo $row[0];
    $job_pending = $row[0];
    ?>
    <?php
    $sql = "SELECT COUNT(*) FROM ticket WHERE job_status = 'success'";
    $result = $dbcon->query($sql);
    $row = $result->fetch_row();
    echo $row[0];
    $job_success = $row[0];
    ?>
    <script type="text/javascript" src="../assets/scripts/main.js"></script>
    <script type="text/javascript" src="https://polyfill.io/v3/polyfill.min.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
    <script>
    
        const btnDownload = document.querySelector('#btnDownload');
        const myCanvas = document.querySelector('#job_status');



        const btnDownload2 = document.querySelector('#btnDownload2');
        const myCanvas2 = document.querySelector('#role');


        btnDownload.addEventListener("click", function() {
            console.log('click')
            if (window.navigator.msSaveBlob) {
                window.navigator.msSaveBlob(myCanvas.msSaveBlob(), "jobs.png");
            } else {
                const a = document.createElement("a");
                document.body.appendChild(a);
                a.href = myCanvas.toDataURL();
                a.download = "jobs.png";
                a.click();
                document.body.removeChild(a);
            }
        });

        btnDownload2.addEventListener("click", function() {
            console.log('click')
            if (window.navigator.msSaveBlob) {
                window.navigator.msSaveBlob(myCanvas2.msSaveBlob(), "users.png");
            } else {
                const a = document.createElement("a");
                document.body.appendChild(a);
                a.href = myCanvas2.toDataURL();
                a.download = "users.png";
                a.click();
                document.body.removeChild(a);
            }
        });

        var ctx = document.getElementById('job_status2').getContext('2d');
        var job_status2 = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['การแจ้งซ่อมสถานะรอ [<?php echo "$job_waiting" ?>]', 'การแจ้งซ่อมสถานะกำลังดำเนินการ [<?php echo "$job_pending" ?>]', 'การแจ้งซ่อมสถานะเสร็จแล้ว [<?php echo "$job_success" ?>]'],
                datasets: [{
                    label: '# of Jobs',
                    data: [<?php echo "$job_waiting" ?>, <?php echo "$job_pending" ?>, <?php echo "$job_success" ?>],
                    backgroundColor: [
                        'rgba(60, 51, 255, 1)',
                        'rgba(255, 227, 51, 1)',
                        'rgba(24, 231, 58, 1)',

                    ],
                    borderColor: [
                        'rgba(60, 51, 255, 1)',
                        'rgba(255, 227, 51, 1)',
                        'rgba(24, 231, 58, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'การแจ้งซ่อมทั้งหมด [<?php echo $job_total ?>]'
                }
            }
        });

        <?php
        $sql = "SELECT COUNT(*) FROM users";
        $result = $dbcon->query($sql);
        $row = $result->fetch_row();
        echo $row[0];
        $member = $row[0];
        ?>

        var ctx = document.getElementById('job_status').getContext('2d');
        var job_status = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['การแจ้งซ่อมสถานะรอ [<?php echo "$job_total" ?>]', 'การแจ้งซ่อมสถานะกำลังดำเนินการ [<?php echo "$job_waiting" ?>]', 'การแจ้งซ่อมสถานะเสร็จแล้ว [<?php echo "$job_success" ?>]'],
                datasets: [{
                    label: '# of Jobs',
                    data: [<?php echo "$job_total" ?>, <?php echo "$job_waiting" ?>, <?php echo "$job_success" ?>],
                    backgroundColor: [
                        'rgba(60, 51, 255, 1)',
                        'rgba(255, 227, 51, 1)',
                        'rgba(24, 231, 58, 1)',

                    ],
                    borderColor: [
                        'rgba(60, 51, 255, 1)',
                        'rgba(255, 227, 51, 1)',
                        'rgba(24, 231, 58, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'การแจ้งซ่อมทั้งหมด'
                }
            }
        });
        var ctx = document.getElementById('role').getContext('2d');
        var role = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['แอดมิน [<?php echo "$user_total" ?>]', 'พนักงานซ่อม [<?php echo "$user_member" ?>]', 'ผู้ใช้งาน [<?php echo "$user_repairman" ?>]'],
                datasets: [{
                    label: '# of Users',
                    data: [<?php echo "$user_total" ?>, <?php echo "$user_member" ?>, <?php echo "$user_repairman" ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'ผู้ใช้ทั้งหมด'
                }
            }
        });

        var ctx = document.getElementById('role2').getContext('2d');
        var role2 = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['แอดมิน [<?php echo "$user_total" ?>]', 'พนักงานซ่อม [<?php echo "$user_member" ?>]', 'ผู้ใช้งาน [<?php echo "$user_repairman" ?>]'],
                datasets: [{
                    label: '# of Users',
                    data: [<?php echo "$user_total" ?>, <?php echo "$user_member" ?>, <?php echo "$user_repairman" ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'ผู้ใช้ทั้งหมด [<?php echo $member ?>]'
                }
            }
        });
    </script>

</body>

</html>