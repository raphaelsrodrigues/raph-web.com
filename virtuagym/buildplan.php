<?php include('header.php'); ?>

<?php $last_id = $_REQUEST["set"]; ?>

<style>
    .center-table
    {
        margin: 0 auto !important;
        float: none !important;
    }

    * {font-family: arial, verdana, helvetica, sans-serif}
    input { width: 250px; height: 40px; font-size: 20px; border: 1px solid #999999; padding: 5px; }

    ::-webkit-input-placeholder {

        font-size: 20px;
    }
    :-moz-placeholder {font-size: 20px;}
    :-ms-input-placeholder {font-size: 20px;}

</style>

<?php

$id = $_SESSION['myid'];

if (isset($_POST["submit"]) && !empty($_POST["day"])) {

    $day = $_REQUEST['day'];
    $sort = $_REQUEST['order'];

//returns a MySQLi result object.

    $sql = "INSERT INTO plan_days (plan_id, day_name, sort) VALUES ('$last_id','$day','$sort')";

    if ($conn->query($sql) === TRUE) {
        //this might
        // $last_id = $database->insert_id;

        $day_id = $conn->insert_id;
        Header("Location: userplan.php?id=$last_id");
		
    } else {

        echo "We're so sorry!! Something went wrong. Try using letters only.";
    }
}

?>

<div id="main">


    <div class="maininfo2">


        <br>
        <br>

<?php

$sql = "SELECT * FROM plan WHERE id='$last_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>

        <h4 style='text-align: center;'>".$row["plan_name"]." - New Exercise Day</h4>
        </tr>";
    }


} else {
    echo "0 results";
}

?>


<?php

$sql = "SELECT * FROM plan_days WHERE plan_id='$last_id'";
$result = $conn->query($sql);

if ($result->num_rows) {
	
    echo "<p style='text-align: center;'><br>";
    echo "You have " .$result->num_rows. " exercise days in this Plan";
	echo "</p>";

}else{

    echo "<p style='text-align: center;'><br>";
    echo "This plan is empty. Add an exercise day.";
    echo "</p>";

}?>

<br>

<div class='text-center'>

<form name="day" action="" id="day" onSubmit="return validateForm();" method="post">

<div class="pagination-centered">
<table class="span5 center-table">

<tr>
<td> <input name="day" id="day" placeholder="Day Name" required /> </td>
</tr>

<tr>
<td style="text-align: left;"> <input type="hidden" name="order" id="order" value="<?php $x = $result->num_rows; echo ++$x; ?>" required />
<br>

</select>

<br>
</td>
</tr>

<tr>

<td colspan="2"><input class="button" type="submit" name="submit" id="submit" value="(+) Add Day" /></td>

</tr>

<div style="margin-left:365px;"><span id="confirm_err" class="help"></span></div>

</table>
</div>

</form>

<br>

<a href="userplan.php?id=<?php echo $last_id; ?>"><p style='text-align: center;'>Plan Details Overview</p></a>
</div>
</div>

<?php include ('footer.php'); ?>