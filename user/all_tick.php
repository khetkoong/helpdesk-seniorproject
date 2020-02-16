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
                                <a href="#" class="mm-active">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    รวมการแจ้งปัญหา
                                </a>
                            </li>
                            <li>
                                <a href="/helpdeskproject/user/detailrate.php">
                                    <i class="metismenu-icon pe-7s-note2"></i>
                                    ประเมินการซ่อมของพนักงาน
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
                                    <i class="pe-7s-display2 icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>หน้ารวมการแจ้งซ่อมทั้งหมด
                                    <div class="page-title-subheading">หน้ารวมการแจ้งซ่อมทั้งหมด ที่ผู้ใช้ได้แจ้งซ่อมไว้
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
                            <h5 class="card-title">รวมการแจ้งปัญหา</h5>
                            <?php
                            $id = $_SESSION['id'];
                            $name = $_SESSION['name'];
                            $sql = "SELECT id, room, item, detail, job_status FROM ticket WHERE user_id= '$id' ORDER BY created_at DESC";
                            $result = $dbcon->query($sql);
                            if ($result->num_rows > 0) {
                                echo "<table class='mb-0 table table-hover'>";
                                echo "<tr align='center'>";
                                echo "<th>รหัสการแจ้งปัญหา</th>";
                                echo "<th>ห้อง</th>";
                                echo "<th>สิ่งของ</th>";
                                echo "<th>รายละเอียด</th>";
                                echo "<th>สถานะ</th>";
                                echo "<th>จัดการ</th>";
                                echo "</tr>";
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr align='center'>";
                                    echo "<td>" . $row["id"] . "</td>";
                                    echo "<td>" . $row["room"] . "</td>";
                                    echo "<td>" . $row["item"] . "</td>";
                                    echo "<td>" . $row["detail"] . "</td>";
                                    if ($row["job_status"] == 'waiting') {
                                        echo "<td>" . "<div class='badge badge-info'>" . $row["job_status"] . "</div>" . "</td>";
                                    } else if ($row["job_status"] == 'pending') {
                                        echo "<td>" . "<div class='badge badge-warning'>" . $row["job_status"] . "</div>" . "</td>";
                                    } else {
                                        echo "<td>" . "<div class='badge badge-success'>" . $row["job_status"] . "</div>" . "</td>";
                                    }
                                    echo "<td><div class='dropdown d-inline-block'>
                                    <button type='button' aria-haspopup='true' aria-expanded='false' data-toggle='dropdown' class='dropdown-toggle btn btn-primary'>จัดการ</button>
                                    <div tabindex='-1' role='menu' aria-hidden='true' class='dropdown-menu'>

                                        <form action='detail.php' method='post'>
                                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                                            <button type='submit' tabindex='0' class='dropdown-item'>ดูรายละเอียด</button>
                                        </form>
                                    </div>
                                    </div>
                                    </td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                // Free result set
                                mysqli_free_result($result);
                            } else {
                                echo "ในขณะนี้ยังไม่มีงาน <br />";
                                echo "แจ้งปัญหาแล้วรึยัง? ";
                                echo "<a href='form_ticket.php'>ไป</a>";
                            }
                            ?>
                        </div>
                    </div>
                    <!-- MAIN LAYOUT STOP HERE -->
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../assets/scripts/main.js"></script>
</body>

</html>