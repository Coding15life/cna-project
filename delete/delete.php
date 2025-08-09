<?php
include 'db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM users WHERE id=$id");
header("Location: http://MicroservicesLB-250340831.us-east-1.elb.amazonaws.com:30083/index.php");
exit();
?>
