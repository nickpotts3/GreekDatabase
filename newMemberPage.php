<!DOCTYPE html>
<html>
<head>
<title>New Member</title>
</head>
<body>

<h1>Create a New Member</h1>
    
<form action="newMemberCreatedPage.php" method="post">
Name: <input type="text" name="name"><br>
ID: <input type="text" name="id"><br>
Position: <input type="text" name="position"><br>
Chapter ID: <input type="text" name="chapter_id"><br>
<input type="submit">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GreekDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$conn->close();
?>




</body>
</html>