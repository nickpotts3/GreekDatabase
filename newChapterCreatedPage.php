<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your id is: <?php echo $_POST["id"]; ?>
    
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
    
    $id = $_POST["id"];
    $name = $_POST["name"];
    $loc = $_POST["loc"];
    $account = $_POST["account_num"];
    $balance = $_POST["balance"];
    echo $name;
    
    $result = mysqli_query($conn, "INSERT INTO Chapter (chapter_id, chapter_name, chapter_location) VALUES
    ('$id','$name', '$loc')");
    if($result) {
        echo "Success";
    } else { echo "Failed";}
    
    $sql = mysqli_query($conn,"INSERT INTO Account (account_num, chapter_id, balance) VALUES
    ('$account', '$id', '$balance')");
    
    $sqlselect = "SELECT * FROM Chapter";
    $newresult = $conn->query($sqlselect);
    
    if ($newresult->num_rows > 0) {
        // output data of each row
        while($row = $newresult->fetch_assoc()) {
            echo "id: " . $row["chapter_id"]. " - Name: " . $row["chapter_name"]. " - Location: " . $row["chapter_location"]. "<br>";
        }
    } else {
        echo "0 results";
}
    
?>
    


</body>
</html>