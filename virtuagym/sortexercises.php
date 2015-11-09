<?php
ob_start();
require('includes/connect.php');
require('includes/database.php');
session_start();
?>

<?php

$i = 1;

foreach ($_POST['set'] as $value) {
    $sql ="UPDATE exercise_instances SET sort = $i WHERE id = $value";
    if ($database->query($sql) === TRUE) {

        echo $response;

    } else { echo "Error: " . $sql . "<br>" . $conn->error; }
    $i++;
}

?>

