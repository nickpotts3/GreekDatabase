<!DOCTYPE html>
<html>
<head>
<title>New Event</title>
</head>
<body>

<h1>Create a New Event</h1>
    
<form action="newEventCreatedPage.php" method="post">
Name: <input type="text" name="name"><br>
Organization Benefitted: <input type="text" name="org_benefitted"><br>
Event Date: <input type="date" name="event_date"><br>
Chapter ID: <input type="text" name="chapter_id"><br>
Event ID: <input type="text" name="event_id"><br>
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