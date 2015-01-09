<?php
include 'authenticate.php';
include 'config.php';
include 'opendb.php';
$id = $_POST['id'];
mysql_query("DELETE FROM applications WHERE id = '$id'") or die('Database error: deletion failed');
include 'closedb.php';
exit;
?>