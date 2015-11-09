<?php
ob_start();
require('includes/connect.php');
require('includes/database.php');
session_start();
?>

<?php

$i = 1;

foreach ($_POST['foo'] as $value) {
    $sql ="UPDATE plan_days SET sort = $i WHERE id = $value";
    if ($database->query($sql) === TRUE) {

        echo $response;

    } else { echo "Error: " . $sql . "<br>" . $conn->error; }
    $i++;
}

?>

