<?php
include 'authenticate.php';
if(isset($_GET['id']) && isset($_GET['fileType']))
{
// if id is set then get the file with the id from database

    include 'config.php';
    include 'opendb.php';
    $id    = $_GET['id'];
    $fileType = $_GET['fileType'];
    if ($fileType == "resume") {
        $query = "SELECT name, type, size, content " .
            "FROM applications WHERE id = '$id'";
    }
    else {
        $query = "SELECT stockReportName, stockReportType, stockReportSize, stockReportContent " .
            "FROM applications WHERE id = '$id'";
    }
    $result = mysql_query($query) or die('Error, query failed');
    list($name, $type, $size, $content) = mysql_fetch_array($result);

    header("Content-length: $size");
    header("Content-type: $type");
    header("Content-Disposition: attachment; filename=$name");
    echo $content;

    include 'closedb.php';
    exit;
}

?>