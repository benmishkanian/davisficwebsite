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

    mysql_query($query) or die(mysql_error() . $stockReportType);
    include 'closedb.php';
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Thank You</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/base.css" />
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <?php include "boilerplate.html";?>
        <img src="img/thankyou.jpg" width="1280px" />
        <p style="text-align: center">Your application was submitted successfully. We will review it as soon as possible, and notify you through email.</p>
        <div class="row">
            <div class="large-12 small-centered columns">
                <div><a href="/" class="button" style="display: block; margin: 0 auto; max-width: 350px">Return to home page</a></div>
            </div>
        </div>
        <?php include "footer.html";?>

        <a class="exit-off-canvas"></a>
    </div>
</div>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>



