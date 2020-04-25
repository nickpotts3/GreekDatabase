<!DOCTYPE html>
<html>
<head>
<title>HTML Sample Title</title>
</head>
<body>

<h1>This is a heading</h1>
    
<form action="newChapterCreatedPage.php" method="post">
Name: <input type="text" name="name"><br>
ID: <input type="text" name="id"><br>
Location: <input type="text" name="loc"><br>
Account Number: <input type="text" name="account_num"><br>
Balance: <input type="text" name="balance"><br>
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