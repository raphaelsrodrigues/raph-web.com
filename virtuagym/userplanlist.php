<?php include('header.php'); ?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="jquery.ui.touch-punch.min.js"></script>

<style>

    * {font-family: arial, verdana, helvetica, sans-serif}
    input { width: 250px; height: 40px; font-size: 20px; border: 1px solid #999999; padding: 5px; }

    ::-webkit-input-placeholder {

        font-size: 20px;
    }
    :-moz-placeholder {font-size: 20px;}
    :-ms-input-placeholder {font-size: 20px;}
    
    #rcorners2 {
    border-radius: 2px;
    padding: 0px 20px 30px 20px;
    margin-bottom: 20px;
    width: 100%;
    max-width: 400px;
    height: 100%;
    display: block;
    margin-left: auto;
    margin-right: auto;   
}

#rcorners3 {
    border-radius: 2px;
    /*border: 2px solid #6C94BD;*/
    padding: 10px;
    margin-bottom: 10px;
    width: 150px;
    height: 100%;
    display: block;
    margin-left: auto;
    margin-right: auto;   
}

</style>

	<div id="main">
    <div class="maininfo2">
    	
    	<br>
    	
    	<?php
    	
    	$plan = $_REQUEST["id"];
    	
    	$findplan = Plan::find_by_id($id=$plan);
    	
    	echo "
    	<h2 style='text-align: center;'>".$findplan->plan_name."</h2>
    	<h4>Description: ".$findplan->plan_description."</h4>
    	<h4>Difficulty: ".$findplan->plan_difficulty."</h4>";
    	
    	?>

<div class="row">
	<div class="col-xs-6">
		
		<h3 style='text-align: center;'> Exercise Days: </h3>
		<br>
		
		<div id='sortable'>
			
	<?php
	
	$results = PlanDays::find_all_by_plan_id($id=$plan);
	
	foreach($results as $result):
	
	echo "<div id='rcorners2'>";
	echo "<h3 style='text-align: center;'>";
	echo $result->day_name;
	echo "</h3>";
	
	echo "
	<table style='margin-left:auto; margin-right:auto;'>
	<tbody id='sortable2'>
	<tr class='ui-state-disabled'>
	<th>Exercise&nbsp;&nbsp;</th>
	<th>Duration&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
	</tr> ";
	
	$resultados = ExerciseInstances::find_all_by_day_id($my_id=$result->id);
	
	foreach($resultados as $resultado):
	
	$fitness = Exercise::find_by_id($id=$resultado->exercise_id);
	
	echo "<tr>
	<td>" .$fitness->exercise_name. "&nbsp;&nbsp;</td>
	<td>" .$resultado->exercise_duration. " sec.&nbsp;&nbsp;</td>
	<td><div onclick='dltexercize()' style='display: inline'>
	<h5 style='display: inline; color: firebrick'> &nbsp; &nbsp; x</h5>
	</div></td></tr>";
	
	endforeach;
	
	echo "</tbody>";
	echo "</table>";
	echo "</div>";
	
	endforeach;
			
	?>
		
		</div>
		
	<br>
	<br>
		
		<h3 style='text-align: center;'>
		<a href='buildplan.php?set=<?php echo $plan; ?>'> (+) Add Day</a>
		</h3>

	<br>
	<br>

		</div>
		
		<div class="col-xs-6">
			
	<br>
	<br>
	<br>
	<br>
	
	<?php
	
	echo "<div id='rcorners3'>";
	
	$fitness = Exercise::find_all();
	
	echo "<table><tbody>";
	echo "<tr><th>Exercises</th>";
	echo "<th></th>";
	echo "<th></th></tr>";
	
	foreach($fitness as $fitnes):
	
	echo "<tr class='draggable'>
	<td id='exercise".$fitnes->id."'>" .$fitnes->exercise_name. "</td>
	<td id='exercise".$fitnes->id."'></td>
	<td id='exercise".$fitnes->id."'></td>
	</tr>";
	
	endforeach;
	
	echo "</tbody></table>";
	echo "</div>";
	
	?>
	
	</div>
</div>

	</div>
	</div>
		

<script>

function dltexercize() {
	
    alert("Delete exercise function - Parsing JSON with AJAX");
    
}

$(window).load(function() {

$("#sortable").sortable({
	axis: 'y'
});

$("tbody#sortable2").droppable({
      activeClass: "ui-state-highlight"
    });

$("tbody#sortable2").sortable({
	containment: "parent",
	  axis: 'y',
      revert: true,
      items: "> tr",
      opacity: 0.5,
      placeholder: "ui-state-highlight",
      items: "tr:not(.ui-state-disabled)",
      appendTo: document.body
    });
    
    $( ".draggable" ).draggable({
      connectToSortable: "tbody#sortable2",
      helper: "clone",
      opacity: 1,
      revert: "invalid"
    });
    
    $( "tr" ).disableSelection();
    
   });

</script>



<?php include ('footer.php'); ?>