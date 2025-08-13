<?php
include 'db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM users WHERE id=$id");
header("Location: http://54.82.126.154:30083/index.php");
exit();
?>
