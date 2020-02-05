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
                                <a href="#" class="mm-active">
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
                                    <i class="metismenu-icon pe-7s-tools"></i>
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
                                    <i class="pe-7s-file icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>หน้าแจ้งปัญหา
                                    <div class="page-title-subheading">หน้าแจ้งปัญหาต่างๆ ที่ผู้ใช้ต้องการแก้ไข
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
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                        <h5 class="card-title">แจ้งซ่อม</h5>
                            <hr />
                            <form name="frmlogin" method="post" action="ticket.php">
                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">ห้อง : </label>
                                    <div class="col-sm-10">
                                        <select name="room" from="frmlogin" required class="form-control">
                                            <option disabled selected value > -- เลือกห้อง -- </option>
                                            <?php
                                            $sql = "SELECT room_name FROM location";
                                            $result = $dbcon->query($sql);
                                            while ($rows = $result->fetch_assoc()) {
                                                $room_name = $rows['room_name'];
                                                echo "<option value='$room_name'>$room_name</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">สิ่งของ : </label>
                                    <div class="col-sm-10">
                                        <select name="item" from="frmlogin" required class="form-control">
                                            <option disabled selected value> -- เลือกสิ่งของ -- </option>
                                            <?php
                                            $sql = "SELECT item_name FROM items";
                                            $result = $dbcon->query($sql);
                                            while ($rows = $result->fetch_assoc()) {
                                                $item_name = $rows['item_name'];
                                                echo "<option value='$item_name'>$item_name</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">เลขครุภัณฑ์ : </label>
                                    <div class="col-sm-10"><input name="serial_num" required id="exampleEmail" placeholder="เลขครุภัณฑ์" type="text" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">รายละเอียด : </label>
                                    <div class="col-sm-10"><textarea name="detail" required id="exampleText" class="form-control"></textarea></div>
                                </div>

                                
                                <div class="position-relative row form-check">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button class="btn btn-primary">Submit</button>
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