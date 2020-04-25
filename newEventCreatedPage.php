 <html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
    
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
    
    $chapter_id = $_POST["chapter_id"];
    $name = $_POST["name"];
    $org = $_POST["org_benefitted"];
    $id = $_POST["event_id"];
    $date = $_POST["event_date"];
    echo $name;
    
    $result = mysqli_query($conn, "INSERT INTO Socials (event_id, chapter_id, org_benefitted, event_date, event_name) VALUES
    ('$id','$chapter_id', '$org', '$date', '$name')");
    if($result) {
        echo "Success";
    } else { echo "Failed";}
    
    $sqlselect = "SELECT * FROM Socials";
    $newresult = $conn->query($sqlselect);
    
    if ($newresult->num_rows > 0) {
        // output data of each row
        while($row = $newresult->fetch_assoc()) {
            echo "EID: " . $row["event_id"]. " - CID: " . $row["chapter_id"]. " - Org: " . $row["org_benefitted"]. " Date: " . $row["event_date"]. "Name: " . $row["event_name"]. "<br>";
        }
    } else {
        echo "0 results";
}
    
?>
    


</body>
</html>