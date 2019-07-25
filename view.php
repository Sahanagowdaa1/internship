<?php

include 'conn.php';

$query="SELECT * FROM `users`";

$result= mysqli_query($con,$query);    //we link conn.php to this file.

$json_data=array();
while($row=mysqli_fetch_assoc($result)){        //we have copy this link here and then paste it in the url field of arc and the send to get the output.
	$json_data[]=$row;
}
echo json_encode($json_data);
?>