 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jainsahil1997";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tempmoi (temp1,moi1)  values ('".$_GET["temp1"]."', '".$_GET["moi1"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
