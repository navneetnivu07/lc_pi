<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pi";

if(isset($_GET["status"])){
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connectionhttp://localhost/phpmyadmin/sql.php?db=pi&table=button_data&token=7329147042de77ed57c8891e92870aa8&pos=0
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO button_data (status) VALUES ('".$_GET["status"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>