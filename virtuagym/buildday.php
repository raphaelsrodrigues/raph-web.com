<?php include('header.php'); ?>

<style>

 
    * {font-family: arial, verdana, helvetica, sans-serif}
    input { width: 250px; height: 40px; font-size: 20px; border: 1px solid #999999; padding: 5px; }

    ::-webkit-input-placeholder {

        font-size: 20px;
    }
    :-moz-placeholder {font-size: 20px;}
    :-ms-input-placeholder {font-size: 20px;}

</style>

<script>

function getData() {
    var x = document.getElementById("addexercize").value;
    //document.getElementById("demo").innerHTML = x;
    
    myFunction(x);
    
    location.reload();
    
}

function dltexercize() {
	
    alert("Delete exercise function - Parsing JSON with AJAX");
    
}
	
	
	
</script>


<div id="main">
    <div class="maininfo2">
    

<?php

$day_id = $_REQUEST["set"];

$_SESSION['dayday'] = $day_id;

$day = PlanDays::find_by_id($id=$day_id);

$plan_id = $day->plan_id;

$plan = Plan::find_by_id($id=$plan_id);

$results = ExerciseInstances::find_all_by_day_id($my_id=$day_id);

$fitness = Exercise::find_by_id($id=4);

?>

    	<div class="row">
    <div class="col-md-2 col-md-offset-5">

<h2>Plan Name:</h2>
<input placeholder="<?php echo $plan->plan_name; ?>" />


<h2>Day Name:</h2>
<input placeholder="<?php echo $day->day_name; ?>" />

<br>
<br>

<form>
    <select id="dayorder">
        <option></option>
        <option selected="selected">Day Order: <?php echo $day->order; ?></option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</form>

<br>

<h2>Exercises:</h2>

<p id="demo"></p>

<?php
foreach($results as $result):

    $fitness = Exercise::find_by_id($id=$result->exercise_id);
    echo "<h3 style='display: inline'>" .$fitness->exercise_name. "</h3>";
    echo "<div onclick='dltexercize()' style='display: inline'><h5 style='display: inline; color: firebrick'> &nbsp; &nbsp; x</h5></div><br><br>";

endforeach;
?>


<form onsubmit="return getData();">
	<table><tr>
		
		<td>
    <select id="addexercize">
        <option></option>
        <option value="" disabled selected>Add Exercise</option>
        <option value="1">Crunch</option>
        <option value="2">Air squat</option>
        <option value="3">Windmill</option>
        <option value="4">Push-up</option>
        <option value="5">Rowing Machine</option>
        <option value="6">Walking</option>
        <option value="7">Running</option>
    </select>
    	</td>
    	<td>&nbsp;</td>
    	<td>
    		<!-- <button name="data" type="button" onclick="getData()">add</button> -->
    		<!-- <input style="width: 30px; height: 20px; font-size: 10px; border: 1px solid #999999; padding: 5px;" type="submit" id="submit" value="add" /> -->
    		<button onclick="getData()" type="button" id="submit">add</button>
    	</td>
    </tr></table>
</form>

<br>

<h2>Exercise Information:</h2>

<?php

    echo "<table><tr>";
    //echo "<td> id <td />";
    echo "<td>Name&nbsp;&nbsp;<td />";
    //echo "<td> exercise_id <td />";
    //echo "<td> day_id <td />";
    echo "<td>Duration&nbsp;&nbsp;<td />";
    echo "<td>Order&nbsp;&nbsp;<td />";
    echo "</tr>";

foreach($results as $result):

    $fitness = Exercise::find_by_id($id=$result->exercise_id);

    echo "<tr>
    <td><a href='3danimation.php'>" .$fitness->exercise_name. "</a>&nbsp;&nbsp;<td />
    <td>" .$result->exercise_duration. " sec.&nbsp;&nbsp;<td />
    <td>" .$result->sort. "&nbsp;&nbsp;<td /></tr>";

endforeach;

echo "</table>";

?>

<br>
<br>

<a href="userplan.php?id=<?php echo $plan_id; ?>"><h3>Plan Details Overview</h3></a>


</div>
</div>
</div>
</div>

<?php include ('footer.php'); ?>