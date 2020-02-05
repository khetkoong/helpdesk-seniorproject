<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" href="images/helpdesk.png" type="image/icon type">
  <title>Final Project: Helpdesk</title>
  <!-- Bootstrap Core CSS -->
  <link href="http://asset.oppo.in.th/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="http://asset.oppo.in.th/css/style.css" rel="stylesheet">
  <!-- You can change the theme colors from here -->
  <link href="http://asset.oppo.in.th/css/colors/blue.css" id="theme" rel="stylesheet">
  <link href="http://asset.oppo.in.th/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
  <style type="text/css">
    .logo {
      background: white;
      border-radius: 4px 4px 0px 0px;
      padding: 15px;
      text-align: center;
    }

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

    .help-block {
      color: red;
      font-size: 12px;
    }
  </style>
</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <section id="wrapper">
  <br />
  <br />
  <br />
  <br />
      <div class="login-box card">
        <div class="col-md-12 logo">
          <p class="text-center text-danger"><h1>Helpdesk System hello git<h1></p>
        </div>
        <div class="card-body">
          <h3 class="text-center">เข้าสู่ระบบ</h3>
          <hr>
          <form class="form-horizontal form-material" name="frmlogin" method="POST" action="login.php">
            <div class="form-group">
              <label for="username" class="col-md-12 control-label">ชื่อผู้ใช้</label>

              <div class="col-md-12">
                <input id="username" type="text" class="form-control" name="Username" value="" required autofocus>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-md-12 control-label">รหัสผ่าน</label>

              <div class="col-md-12">
                <input id="password" type="password" class="form-control" name="Password" required>

              </div>
            </div>
            <div class="form-group text-center m-t-20">
              <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">เข้าสู่ระบบ</button>
              </div>
              <br />
              <div class="text-center">
                  <p class="text-center">คุณยังไม่มีรหัสผ่านผู้ใช้งานใช่ไหม? <a href="form_register.php">สมัครสมาชิก</a></p>
              </div>
            </div>
          </form>
        </div>
    </div>


  </section>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->

  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="http://asset.oppo.in.th/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="http://asset.oppo.in.th/plugins/bootstrap/js/popper.min.js"></script>
  <script src="http://asset.oppo.in.th/plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="http://asset.oppo.in.th/js/jquery.slimscroll.js"></script>
  <!--Wave Effects -->
  <script src="http://asset.oppo.in.th/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="http://asset.oppo.in.th/js/sidebarmenu.js"></script>
  <!--stickey kit -->
  <script src="http://asset.oppo.in.th/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
  <script src="http://asset.oppo.in.th/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!--Custom JavaScript -->
  <script src="http://asset.oppo.in.th/js/custom.min.js"></script>
  <!-- Style switcher -->
  <script src="http://asset.oppo.in.th/plugins/styleswitcher/jQuery.style.switcher.js"></script>
  <script src="http://asset.oppo.in.th/plugins/sweetalert/sweetalert.min.js"></script>
</body>

</html>