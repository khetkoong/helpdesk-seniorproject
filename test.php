<html>
<?php

require 'connect.php';

?>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body>
    <div class="container">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <h2 class="card-title mt-2 center">Register</h2>
                    </header>
                    <article class="card-body">
                        <form name="register" id="register" action="register.php" method="POST">
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>First name </label>
                                    <input type="text" class="form-control" name="Name" required autofocus>
                                </div> <!-- form-group end.// -->
                                <div class="col form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" name="Lastname" required autofocus>
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row end.// -->
                            <div class="form-group">
                                <label>User ID</label>
                                <input type="text" class="form-control" name="Userid" required autofocus>
                            </div> <!-- form-group end.// -->
                            <div class="form_group">
                                <label>Department</label>
                                <?php
                                $sql = "SELECT dep_name FROM dep";
                                $result = $dbcon->query($sql);
                                ?>
                                <select id="inputState" class="form-control">
                                    <option>- กรุณาเลือก -</option>
                                    <?php
                                    while ($rows = $result->fetch_assoc()) {
                                        $dep_name = $rows['dep_name'];
                                        echo "<option value='$dep_name'>$dep_name</option>";
                                    }
                                    ?>
                                </select>
                                <br />
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="Username" required autofocus >
                                <small><p class="text-danger">** ใช้สำหรับเข้าสู่ระบบ</p></small>
                            </div> <!-- form-group end.// -->
                            <div class="form-group">
                                <label>Passowrd</label>
                                <input class="form-control" type="password" name="Password" required autofocus>
                                <small><p class="text-danger">** ใช้สำหรับเข้าสู่ระบบ</p></small>
                            </div> <!-- form-group end.// -->
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="conPassword" required autofocus >
                            </div> <!-- form-group end.// -->
                            <hr />
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Register </button>
                            </div> <!-- form-group// -->
                        </form>
                    </article> <!-- card-body end .// -->
                    <div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
                </div> <!-- card.// -->
            </div> <!-- col.//-->
        </div> <!-- row.//-->
    </div>
    <!--container end.//-->
</body>

</html>