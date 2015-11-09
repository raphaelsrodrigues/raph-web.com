<?php include('header.php'); ?>


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
if (isset($_POST["submit"]) && !empty($_POST["name"])) {
	

    $username=trim($_POST['name']);
    $password=trim($_POST['password']);

    $found_user = User::authenticate($username, $password);

    if($found_user) {

        $_SESSION['myid']=$found_user->id;
        $_SESSION['myuser']=$found_user->username;
        $user_id = $_SESSION['myid'];

    } else {
        //username/password combo was not found in the database
        $message = "Username/password combination incorrect.";
    }

}
?>


    <div id="main">
        <div class="maininfo2">



            <?php 	if(isset($_SESSION['myid'])) { ?>

   <div class="pagination-centered">
   	
   	<br>
   	<br>
   	
                <form name="authenticate" action="index.php" id="authenticate" onSubmit="return validateForm();" method="post">
                	
        	<div class='text-center'>
        	
        <table class="span5 center-table">

            <tr>

                <td> <input name="name" id="name" placeholder="Username" required /> </td></tr>

            <tr>

                <td> <input name="password" id="password" type="password" placeholder="Password" required /> </td></tr>

            <div style="margin-left:365px;"><span id="confirm_err" class="help"></span></div>

            <td colspan="2"><input type="submit" value="Submit" name="submit" /></td></tr>

        </table>

        </div>

        <div id="username_err"></div>

    </form>
    
    </div>

            <?php } else { ?>

        <br>
        <br>

        <h4 style='text-align: center;'>Your Plans(<?php
                
                		$user_id = $_SESSION['myid'];
                
                        $sql = "SELECT COUNT(*) FROM plan WHERE user_id=2";
                        $result = $conn->query($sql);
                        $rows = mysqli_fetch_row($result);
                        echo $rows[0];?>) </h4>
        <br>

        <?php

        $user_id = $_SESSION['myid'];

        $sql = "SELECT * FROM plan WHERE user_id=2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='span5 center-table'><tr>

    <th>&nbsp;</th>
    <th>Plan Name</th>
    <th>&nbsp;&nbsp;&nbsp;</th>
    <th>Description</th>
    <th>&nbsp;&nbsp;Difficulty</th></tr>";

            // output data of each row
            while($row = $result->fetch_assoc()) {

        $findlevel = ExerciseLevel::find_by_id($id=$row["plan_difficulty"]);

        echo "<tr>
                
		<td>&nbsp;</td>
        <td><a href='userplan.php?id=".$row['id']."'><h4>".$row["plan_name"]."</h4></a></td>
        <td>&nbsp;</td>
        <td><h4>".$row["plan_description"]."</h4></td>
        <td><h4>&nbsp;&nbsp;".$findlevel->level."</h4></td></tr>

        ";
            }
            echo "</table>";

        } else {
            echo "<div class='text-center'>Hey newbie, you don't have a Plan yet!</div>";
        }

        ?>

        <br>
        <br>


        <a href="addplan.php"><h4 style='text-align: center;'>(+) Add Plan</h4></a>

                
                

            <?php } ?>

        </div>

    </div>






<?php include ('footer.php'); ?>