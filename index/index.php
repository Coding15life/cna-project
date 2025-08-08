<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>CNAS Assignment - Team Members List</title></head>
<body>
<h2>Team Members in Class -T01/T02 Team – 01/02/03/04 </h2>
<h2>Test</h2>
<a href="http://54.226.220.205:30081/create.php">Add New Team Member</a>
<table border="1" cellpadding="8" cellspacing="0">
<tr><th>ID</th><th>Student Name</th><th>Email</th><th>Actions</th></tr>
<?php
$result = $conn->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>
                <a href='http://54.226.220.205:30084/update.php?id={$row['id']}'>Edit</a> |
                <a href='http://54.226.220.205:30082/delete.php?id={$row['id']}'>Delete</a>
            </td>
          </tr>";
}
$conn->close();
?>
</table>
</body>
</html>
