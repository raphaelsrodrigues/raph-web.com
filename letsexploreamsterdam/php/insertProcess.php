<?php

$name = $_REQUEST['name']
$email = $_REQUEST['email']
$comment = $_REQUEST['comment']

echo($name.''.
$email.''.
$comment);

require_once("connect.php")

$sql="INSERT INTO newsletter (userName, userEmail)
VALUES (",".
"'".$name."',".
"'".$email."'")";

if ($conn->query($sql)== false {
$errmsg = 'WrongSQL:'.$sql. 'Error:'.$conn->error;
trigger_error($errmsg, E_USER_ERROR);
}else{
...
}

$last_id = $conn->insert_id;
echo "New record created successfully. Last inserted ID is:" .$last_id;

$conn->close;