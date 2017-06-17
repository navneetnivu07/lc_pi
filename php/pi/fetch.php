<html>

<meta http-equiv="refresh" content="5" >

<head>

<style>

table, th, td {
    border: 1px solid green;
    border-collapse: collapse;
}
</style>

</head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM button_data";
$result = $conn->query($sql);

//echo(var_dump($result));

if ($result->num_rows > 0) {
	
	//echo(var_dump($result->fetch_assoc()));
	
    // output data of each row
	echo("<table>");
	echo("<tr><th>Id</th><th>Status</th> <th>Time</th></tr>");
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["status"]. "</td><td>" . $row["time"]. "</td></tr>";
    }
	echo("</table>");

} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>