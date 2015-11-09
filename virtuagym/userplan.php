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
    
    .rcorners2 {
    border-radius: 2px;
    border: 2px solid #6C94BD;
    background-image: url('images/gym4.png');
    cursor: -webkit-grab;
    padding: 0px 20px 30px 20px;
    margin-bottom: 20px;
    width: 100%;
    max-width: 250px;
    height: 100%;
    display: block;
    margin-left: auto;
    margin-right: auto;   
}

#rcorners3 {
    padding: 10px 0px 10px 0px;
    width: 260px;
    height: 100%;
    display: block;
    margin-left: auto;
    margin-right: auto; 
}

ul, ol {
    margin: 0px;
}

ul.boxy li {
	list-style-type: none;
    padding: 4px 4px;
    border: 1px solid #ccc;
    background-image: url('images/workoutgym2.jpg');
    /*background-color: #eee;*/
    cursor: -webkit-grab;
    max-width: 144px;
    font-size: large;
    margin-bottom: 4px; }
    
    ul#sortable2 li {
	list-style-type: none;
    padding: 4px 4px;
    border: 1px solid #ccc;
    /*background-image: url('images/workoutgym.png');*/
    background-color: #eee;
    cursor: -webkit-grab;
    max-width: 144px;
    font-size: large; }

</style>

	<div id="main">
    <div class="maininfo2">
    	
    	<br>
    	
    	<?php
    	
    	$plan = $_REQUEST["id"];
    	
    	$findplan = Plan::find_by_id($id=$plan);
		$findlevel = ExerciseLevel::find_by_id($id=$findplan->plan_difficulty);
    	
    	echo "
    	<h2 style='text-align: center;'>".$findplan->plan_name."</h2>
    	<h4 style='text-align: center;'>Description: ".$findplan->plan_description."</h4>
    	<h4 style='text-align: center;'>Difficulty: ".$findlevel->level."</h4>";
    	
    	?>
    	
    	

<div class="row">
	<div class="col-xs-6">
		
		<h3 style='text-align: center;'>Exercise Days: </h3>
		<br>
		
		<div id='sortable'>
			
	<?php
	
	$results = PlanDays::find_all_by_plan_id($id=$plan);
	
	foreach($results as $result):
	
	echo "<div id='foo_" .$result->id. "' class='rcorners2'>";
		
	echo "<h3 style='text-align: center;'>";
	echo $result->day_name;
	echo "</h3>";
	echo "<h4 style='text-align: center;'>Exercises</h4>";
	echo "<ul id='sortable2' class='".$result->id."'><br>";
	
	$resultados = ExerciseInstances::find_all_by_day_id($my_id=$result->id);
	
	foreach($resultados as $resultado):
	
	$fitness = Exercise::find_by_id($id=$resultado->exercise_id);
	
	echo "<li id='set_" .$resultado->id. "' >" .$fitness->exercise_name. "</li>";
	
	endforeach;
	
	echo "</ul>";
	echo "</div>";
	
	endforeach;
			
	?>
		
		</div>
		
	<br>
		
		<h4 style='text-align: center;'>
		<a href='buildplan.php?set=<?php echo $plan; ?>'> (+) Add Day</a>
		</h4>

	<br>
	<br>
	
	<div id="yourdiv"></div>

		</div>
		
		<div class="col-xs-6">
			
	<br>
	<br>
	
	<?php
	
	echo "<div id='rcorners3'>";
	
	$fitness = Exercise::find_all();

	echo "<h4>Exercises: </h4>";
		echo "<ul class='boxy'>";
		
	foreach($fitness as $fitnes):

	echo "<li class='draggable' id='".$fitnes->id."'>" .$fitnes->exercise_name. "</li>";
	
	endforeach;
		echo "</ul>";
	
	?>
			<br>
			<br>
			<br>
			<br>
			<br>


<!--
<div class="droppabledelete" style="width: 100%; height: 40px;">
<img src='images/trash.png' style="width: 30px; float: right; margin-right: 100px; padding-top: 5px;" />
<p style="float: right">drop day<br>to delete</p>
</div>
-->
	
	</div>
</div>

	</div>
	</div>
		

<script>

$(window).load(function() {

//	$(".droppabledelete").droppable({
//		tolerance: "pointer",
//		accept: ""
//		over: function(event, ui) {
//			var dayid = $(ui.item).attr("id");
//			$.ajax({
//				data: {value : dayid},
//				type: 'POST',
//				url: 'deleteday.php'
//			});
//			ui.draggable.remove();
//		}
//	});
//
//	$("#sortable > div").draggable({});

	$("#sortable").sortable({
		//axis: 'y',
		update:function(event, ui) {
			var data = $(this).sortable('serialize');
			
			$.ajax({
				data: data,
				type: 'POST',
				url: 'sortdays.php'
			});
		}
	});

	$("ul#sortable2").droppable({
		over: function(event, ui) {
		ui.draggable.height(30).width(220);
		}
	});

	var removeIntent = false;

	$("ul#sortable2").sortable({

	connectWith: ".draggable",
	items: "> li",
	opacity: 0.5,
	placeholder: "ui-state-highlight",
	appendTo: document.body,

	// item from a connected sortable list has been dropped into another list.
	receive: function( event, ui ) {

		var dayid = $(this).attr('class');
		var exerciseid = ui.item.attr("id");

			$.ajax({
				data: { name: exerciseid, day: dayid },
				type: 'POST',
				url: 'addexercise.php',
//				success:function (result) {
//				$("#yourdiv").append(result);
//				}
			});
		//alert($(this).attr('class'));
	},

	// user stopped sorting and the DOM position has changed.
	update:function(event, ui) {
		var data = $(this).sortable('serialize');

		$.ajax({
			data: data,
			type: 'POST',
			url: 'sortexercises.php'
		});
	},

	// sortable item is moved into a sortable list.
	over: function (event, ui) {

		ui.placeholder.height(35).width(210);
		removeIntent = false;
	},

	// sortable item is moved away from a sortable list.
	out: function (event, ui) {

		ui.placeholder.toggle("fade");
		removeIntent = true;
	},

	//sorting stops, but the placeholder/helper is still available.
	beforeStop: function (event, ui) {

		if(removeIntent == true) {
			var exid = $(ui.item).attr("id");

				$.ajax({
				data: {value : exid},
				type: 'POST',
				url: 'deleteexercise.php'
				});

			ui.item.remove();
		}
	},

	stop: function( event, ui ) {

		if(ui.item.attr('id') === undefined) {

			$.ajax({
				url: 'countexercises.php',
				success:function (result) {
					ui.item.attr('id', result);
				}
			});

		}

	}

   	
 });
    
    
    $( ".draggable" ).draggable({
      connectToSortable: "ul#sortable2",
      helper: "clone",
      opacity: 1,
      cursor: "-webkit-grabbing",
      revert: "invalid"
    });
    
    $( "li" ).disableSelection();
    
   });

</script>



<?php include ('footer.php'); ?>