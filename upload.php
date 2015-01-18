<?php
if (isset($_POST['upload']) && $_FILES['userfile']['size'] > 0 && $_FILES['stockReport']['size'] > 0) {
    $fileName = $_FILES['userfile']['name'];
    $tmpName = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];
    $stockReportName = $_FILES['stockReport']['name'];
    $stockReportTempName = $_FILES['stockReport']['tmp_name'];
    $stockReportSize = $_FILES['stockReport']['size'];
    $stockReportType = $_FILES['stockReport']['type'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];

    if ($fileSize > 2097152 || $stockReportSize > 2097152) {
        exit("Error: The uploaded files exceeded the 2MB size limit.");
    }

    $fp = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);

    if (!get_magic_quotes_gpc()) {
        $fileName = addslashes($fileName);
    }

    $fp2 = fopen($stockReportTempName, 'r');
    $stockReportContent = fread($fp2, filesize($stockReportTempName));
    $stockReportContent = addslashes($stockReportContent);
    fclose($fp2);

    if (!get_magic_quotes_gpc()) {
        $stockReportName = addslashes($stockReportName);
    }

    include 'config.php';
    include 'opendb.php';

    $query = "INSERT INTO applications (name, size, type, content, firstName, lastName, email, stockReportName, stockReportType, stockReportSize, stockReportContent ) " .
        "VALUES ('$fileName', '$fileSize', '$fileType', '$content', '$firstName', '$lastName', '$email', '$stockReportName', '$stockReportType', '$stockReportSize', '$stockReportContent')";

    mysql_query($query) or die(mysql_error());
    include 'closedb.php';
    include 'applicationsuccess.html';
}