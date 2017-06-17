<?php

    include 'connection.php';

    $query = "SELECT * FROM button_data order by id DESC";

    $res = mysqli_query($conn,$query);
	
	$result = array();

    while ($row = mysqli_fetch_array($res))
    {
		array_push($result, array('id' => $row[0],'status' => $row[1],'time' => $row[2]));
    }
       echo json_encode(array("results" => $result));

?>
