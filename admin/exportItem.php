<?php
//include database configuration file
require '../connect.php';

//get records from database
$query = $dbcon->query("SELECT * FROM items");

if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "items_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('รหัสสิ่งของ', 'ชื่อสิ่งของ');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        $lineData = array($row['item_id'], $row['item_name']);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Encoding: UTF-8');
    header('Content-type: text/csv; charset=UTF-8');
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    echo "\xEF\xBB\xBF"; // UTF-8 BOM

    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>