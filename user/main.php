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
                                <a href="#" class="mm-active">
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
                                    <i class="pe-7s-home icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>หน้าหลัก
                                    <div class="page-title-subheading">หน้าหลักจะแสดงข้อมูลต่างๆที่ User แจ้งซ่อมเอาไว้
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MAIN LAYOUT START HERE -->
                    <?php echo "<h1>ยินดีต้อนรับ คุณ " . $_SESSION['name'] . "</h1>" ?>
                    <?php echo "แผนก : " . $_SESSION['department'] ?><br />

                    <hr />
                    <br />
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">แจ้งซ่อม</div>
                                        <div class="widget-subheading">ทั้งหมด</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>
                                            <?php 
                                            $id = $_SESSION['id'];
                                            $sql = "SELECT COUNT(*) FROM ticket WHERE `user_id` = '$id'";
                                            $result = $dbcon->query($sql);
                                            $row = $result->fetch_row();
                                            echo $row[0];
                                            ?>
                                        </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-sunny-morning">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">แจ้งซ่อมที่รอ</div>
                                        <div class="widget-subheading">รอพนักงานซ่อม</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>
                                        <?php 
                                            $name = $_SESSION['name'];
                                            $sql = "SELECT COUNT(*) FROM ticket WHERE `user_id` = '$id' AND `job_status` = 'waiting'";
                                            $result = $dbcon->query($sql);
                                            $row = $result->fetch_row();
                                            echo $row[0];
                                        ?>
                                        </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-grow-early">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">ปัญหาที่ได้รับแก้ไขแล้ว</div>
                                        <div class="widget-subheading">พนักงานซ่อมเรียบร้อย</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>
                                        <?php 
                                            $name = $_SESSION['name'];
                                            $sql = "SELECT COUNT(*) FROM ticket WHERE `user_id` = '$id' AND `job_status` = 'success'";
                                            $result = $dbcon->query($sql);
                                            $row = $result->fetch_row();
                                            echo $row[0];
                                        ?>
                                        </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                        <h5 class="card-title">ปัญหาที่คุณแจ้ง</h5>
                    <?php

                    $id = $_SESSION['id'];
                    $name = $_SESSION['name'];

                    $sql = "SELECT id, room, item, serial_num, detail, job_status FROM ticket WHERE user_id= '" . $id . "' AND job_status= 'waiting' ORDER BY created_at DESC";
                    $result = $dbcon->query($sql);

                    if ($result->num_rows > 0) {
                        // head of table
                        echo "<table class='mb-0 table table-hover'>";
                        echo "<tr align='center'>";
                        echo "<th>รหัสการแจ้งปัญหา</th>";
                        echo "<th>ห้อง</th>";
                        echo "<th>สิ่งของ</th>";
                        echo "<th>Serial Number</th>";
                        echo "<th>รายละเอียด</th>";
                        // echo "<th>Date</th>";
                        echo "<th>สถานะ</th>";
                        echo "<th>จัดการ</th>";
                        echo "</tr>";

                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr align='center'>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["room"] . "</td>";
                            echo "<td>" . $row["item"] . "</td>";
                            echo "<td>" . $row["serial_num"] . "</td>";
                            echo "<td>" . $row["detail"] . "</td>";
                            // $date = new DateTime($row["create_at"]);
                            // $strdate = $date->format('Y-m-d H:i:s');
                            // echo "<td>" . $strdate . "</td>";
                            echo "<td>" . "<div class='badge badge-info'>" . $row["job_status"] . "</div>" . "</td>";
                            echo "<td><div class='dropdown d-inline-block'>
                            <button type='button' aria-haspopup='true' aria-expanded='false' data-toggle='dropdown' class='dropdown-toggle btn btn-primary'>จัดการ</button>
                            <div tabindex='-1' role='menu' aria-hidden='true' class='dropdown-menu'>

                                <form action='detail.php' method='post'>
                                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                                    <button type='submit' tabindex='0' class='dropdown-item'>ดูรายละเอียด</button>
                                </form>

                                <form action='form_edit.php' method='post'>
                                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                                    <input type='hidden' name='room' value='" . $row['room'] . "'>
                                    <input type='hidden' name='item' value='" . $row['item'] . "'>
                                    <input type='hidden' name='serial_num' value='" . $row['serial_num'] . "'>
                                    <input type='hidden' name='detail' value='" . $row['detail'] . "'>
                                    <button type='submit' tabindex='0' class='dropdown-item'>แก้ไขรายละเอียด</button>
                                </form>

                                <form action='delete.php' method='post'>
                                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                                    <button type='submit' tabindex='0' class='dropdown-item' style='color:red;'>ลบการแจ้งซ่อม</button>
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
                        echo "<a href='form_ticket.php'>แจ้งซ่อม</a>";
                    }

                    ?>
                    <hr />
                </div>
                </div>
                    <!-- MAIN LAYOUT STOP HERE -->
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../assets/scripts/main.js"></script>
</body>

</html>