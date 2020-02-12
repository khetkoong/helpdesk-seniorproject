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
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-add-user"></i>
                                    พนักงานซ่อม
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
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
                                        <a href="#">
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
                                <ul class="mm-show">
                                    <li>
                                        <a href="/helpdeskproject/admin/allroom.php">
                                            <i class="metismenu-icon"></i>
                                            รายชื่อสถานที่ปฏิบัติงาน
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="mm-active">
                                            <i class="metismenu-icon"></i>
                                            เพิ่มสถานที่ปฏิบัติงาน
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
                                    <i class="pe-7s-file icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>เพิ่มสถานที่ปฏิบัติงาน
                                    <div class="page-title-subheading">หน้าเพิ่มสถานที่ปฏิบัติงาน
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- MAIN LAYOUT START HERE -->
                    <?php echo "<h1>ยินดีต้อนรับ : " . $_SESSION['name'] . "</h1>" ?>
                    แผนก: แอดมิน
                    <hr />
                    <br />
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                        <h5 class="card-title">เพิ่มสถานที่ปฏิบัติงาน</h5>
                            <hr />
                            <form name="register" id="register" action="addroom.php" method="POST">
                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">ชื่อสถานที่ปฏิบัติงาน : </label>
                                    <div class="col-sm-10"><input type="text" name="room" required autofocus placeholder="เช่น ห้อง 201, ห้อง 577" class="form-control"></div>
                                </div>

                                
                                <div class="position-relative row form-group">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button class="btn btn-primary">ตกลง</button>
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