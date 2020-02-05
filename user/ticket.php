<?php

    require '../connect.php';

    session_start();
    if (!isset($_SESSION['id'])) {
        header("Location: form_login.php");
    }

    $room = $_POST['room'];
    $item = $_POST['item'];
    $serial_num = $_POST['serial_num'];
    $detail = $_POST['detail'];
    $submitted_name = $_SESSION['name'];
    $user_id = $_SESSION['id'];
    $date = date("Y-m-d H:i:s");

    $query = "INSERT INTO ticket (item, room, serial_num, detail, submitted_name, user_id) VALUES ('$item', '$room', '$serial_num', '$detail', '$submitted_name', '$user_id')";
    $result = mysqli_query($dbcon, $query);

    if ($result) {

    // LINE NOTIFICATION START -----------------------------------------------
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set("Asia/Bangkok");

	$sToken = "7NB4M8RAe0uguDxNvBEoFbECfyXXy5i7KbOvvOW5dnK";
    $sMessage = "Job Alert
-------------------------------------------------------------
Room: $room
Product: $item
Detail: $detail
Serial Number: $serial_num
Submitted by: $submitted_name
Submitted at: $date
-------------------------------------------------------------";

	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 

	//Result error 
	if(curl_error($chOne)) 
	{ 
		echo 'error:' . curl_error($chOne); 
	}
	curl_close( $chOne );   
    // LINE NOTIFICATION STOP -----------------------------------------------

        echo "<script>
                alert('submitted success!!');
                window.location.href='form_ticket.php';
            </script>";
    } else {
        echo "<script>
                alert('เกิดข้อผิดพลาด');
                window.location.href='form_ticket.php';
            </script>";
    }
    mysqli_close($dbcon);