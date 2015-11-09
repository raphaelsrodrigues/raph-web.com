<?php
    ob_start();
    require('includes/connect.php');
    require('includes/database.php');
    session_start();


    $str= $_POST['value'];
    $exercise_id = ltrim ($str, 'set_');

    $response= "Exercise deleted successfully";

    $sql ="Delete FROM exercise_instances WHERE id = $exercise_id";

    if ($database->query($sql) === TRUE) {

        echo $response;

    } else { echo "Error: " . $sql . "<br>" . $conn->error; }
?>

