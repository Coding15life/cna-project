<?php
include 'db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM users WHERE id=$id");
header("https://ljpnho26p3.execute-api.us-east-1.amazonaws.com/");
exit();
?>
