<?php
ob_start();
require('includes/connect.php');
require('includes/database.php');
session_start();


$str= $_POST['value'];
$day_id = ltrim ($str, 'foo_');

$response= "Day deleted successfully";

$sql ="Delete FROM plan_days WHERE id = $day_id";

if ($database->query($sql) === TRUE) {

    $sqlexercises ="Delete FROM exercise_instances WHERE day_id = $day_id";

if ($database->query($sqlexercises) === TRUE) {

    echo $response;

}  else { echo "Error: Exercises were not deleted"; }

} else { echo "Error: Days was not deleted"; }
?>

