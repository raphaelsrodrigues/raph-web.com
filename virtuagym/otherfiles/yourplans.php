<?php include('header.php'); ?>

			<?php 	if(!isset($_SESSION['myid'])) { Header ("Location:index.php"); } ?>

    <style>

        .center-table
        {
            margin: 0 auto !important;
            float: none !important;
        }
    </style>

<div id="main">

    <div class="maininfo2">

        <br>
        <br>

        <h4>Your Plans</h4>

        <br>


        <?php

        $user_id = $_SESSION['myid'];

        $sql = "SELECT * FROM plan WHERE user_id=$user_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='span5 center-table'><tr>

    <th>&nbsp;</th>
    <th>Plan Name</th>
    <th>&nbsp;&nbsp;&nbsp;</th>
    <th>Description</th>
    <th>Difficulty</th></tr>";

            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                
		<td>&nbsp;</td>
        <td><a href='userplan.php?id=".$row['id']."'><h4>".$row["plan_name"]."</h4></a></td>
        <td>&nbsp;</td>
        <td><h4>".$row["plan_description"]."</h4></td>
        <td><h4>".$row["plan_difficulty"]."</h4></td></tr>

        ";
            }
            echo "</table>";

        } else {
            echo "<div class='text-center'>Hey newbie, you don't have a Plan yet!</div>";
        }

        ?>

        <br>
        <br>


        <a href="addplan.php"><h4>Add New Plan</h4></a>

    </div>


    </div>


<?php include ('footer.php'); ?>