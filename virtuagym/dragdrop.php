<?php include('header.php'); ?>

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<style>

* {font-family: arial, verdana, helvetica, sans-serif}
input { width: 250px; height: 40px; font-size: 20px; border: 1px solid #999999; padding: 5px; }

::-webkit-input-placeholder {
	font-size: 20px;
	}
	
	:-moz-placeholder {font-size: 20px;}
	:-ms-input-placeholder {font-size: 20px;}
	
	.connectedSortable, #sortable2 {
		border: 1px solid #eee;
		width: 210px;
		min-height: 20px;
		list-style-type: none;
		margin: 0;
		padding: 5px 0 0 0;
		float: left;
		margin-right: 10px;
		}
		
	#sortable1 li, #sortable2 li {
		margin: 0 5px 5px 5px;
		padding: 5px;
		font-size: 1.2em;
		width: 120px;
		}


</style>


 <script>
  $(function() {
  
  $( "#sortable2" ).sortable({
      revert: true
    });
    
    $( ".ui-state-default" ).draggable({
      connectToSortable: "#sortable2",
      helper: "clone",
      revert: "invalid"
    });
    $( "tr" ).disableSelection();
  });
  </script>


<?php

$fitness = Exercise::find_all();

echo "<table>";
echo "<tbody class='connectedSortable'>";
echo "<tr><th>Exercises</th>";
echo "<th></th>";
echo "<th></th></tr>";

foreach($fitness as $fitnes):
	
    echo "<tr class='ui-state-default'>
    <td id='exercise".$fitnes->id."'>" .$fitnes->exercise_name. "</td>
    <td id='exercise".$fitnes->id."'></td>
    <td id='exercise".$fitnes->id."'></td>
    </tr>";
    
endforeach;

echo "</tbody>";
echo "</table>";

?>

<table>
	<tbody id="sortable2" class="connectedSortable">
<tr class="ui-widget-header">
	<th>&nbsp;Exercises&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;Duration&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;Delete&nbsp;&nbsp;</th>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
</tr>
</tbody>
</table>

<table>
	<tbody id="sortable2" class="connectedSortable">
<tr class="ui-widget-header">
	<th>&nbsp;Exercises&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;Duration&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;Delete&nbsp;&nbsp;</th>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
</tr>
</tbody>
</table>


<?php include ('footer.php'); ?>