<?php

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: form_login.php");
}

require '../connect.php';

$jobid = $_POST['id'];
$repairman = $_SESSION['name'];
$repairman_id = $_SESSION['user_id'];

$query = "UPDATE ticket SET repairman = '$repairman', repairman_id = '$repairman_id', job_status = 'pending', pending_at = NOW() WHERE id = $jobid";
$result = mysqli_query($dbcon, $query);

if ($result) {

    // LINE NOTIFICATION START
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    date_default_timezone_set("Asia/Bangkok");

    $sToken = "7NB4M8RAe0uguDxNvBEoFbECfyXXy5i7KbOvvOW5dnK";
    $sMessage = "Job Alert
$repairman has take the Job
Job ID: $jobid
Job Status: Pending";

    $chOne = curl_init();
    curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
    curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($chOne, CURLOPT_POST, 1);
    curl_setopt($chOne, CURLOPT_POSTFIELDS, "message=" . $sMessage);
    $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $sToken . '',);
    curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($chOne);

    //Result error 
    if (curl_error($chOne)) {
        echo 'error:' . curl_error($chOne);
    }
    curl_close($chOne);
    // LINE NOTIFICATION STOP

    echo "<script>
                alert('รับงานสำเร็จ \\nคุณได้รับงานการแจ้งซ่อมที่ " . $jobid ."');
                window.location.href='repairman.php';
            </script>";
} else {
    echo "เกิดข้อผิดพลาด " . mysqli_error($dbcon);
}

mysqli_close($dbcon);
