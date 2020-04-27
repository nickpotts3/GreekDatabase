 <html>
<body>

You have succesfully created the new member:  <?php echo $_POST["name"]; ?><br>
    
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
    
    $chapter_id = $_POST["chapter_id"];
    $name = $_POST["name"];
    $id = $_POST["id"];
    $position = $_POST["position"];
    
    $result = mysqli_query($conn, "INSERT INTO Member (member_id, chapter_id, member_name, member_position) VALUES
    ('$id','$chapter_id', '$name', '$position')");
    if($result) {
        echo "Success";
    } else { echo "Failed";}
    
    $sqlselect = "SELECT * FROM Member";
    $newresult = $conn->query($sqlselect);
    
//     if ($newresult->num_rows > 0) {
//         // output data of each row
//         while($row = $newresult->fetch_assoc()) {
//             echo "CID: " . $row["chapter_id"]. " - MID: " . $row["member_id"]. " - Name: " . $row["member_name"]. " Position: " . $row["member_position"]. "<br>";
//         }
//     } else {
//         echo "0 results";
// }
    
?>
    
    <br/>
    <button type="button"><a href="homepage.php">Home</a></button>


</body>
</html>