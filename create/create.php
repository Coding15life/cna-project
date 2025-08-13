<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();
    $stmt->close();
    header("Location: http://54.82.126.154:30083/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>Create New Team Member</h2>
<form method="POST">
    Name: <input name="name" required><br><br>
    Email: <input name="email" required><br><br>
    <button type="submit">Create</button>
</form>
<a href="http://54.82.126.154:30083/index.php">Back</a>
</body>
</html>
