<?php include ('header.php'); ?>

<?php
if(!isset($_SESSION['myuser'])) { Header("Location: index.php"); }
?>

<body>

<div class="main-content-wrapper clearfix">
<div class="login_main">
<div class= "login_main_inner">

	<?php
	
		$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
		$per_page = 5;
		$total_count = User::count_all();
		$myid = $_SESSION['myid'];
		
		if (!$_SESSION['mylat']) {
				
			$results = User::find_all_pagination($page, $per_page, $total_count, $myid);
			
			echo "<h3>Other Members</h3>";
			
			foreach($results as $result): ?>
		
			<a href="others.php?set=<?php echo $result->user_id; ?>">
				<?php echo $result->username; ?><br />
			<img width="100px" src="<?php echo $result->image1; ?>">
			</a>
			<br><br>
		
	<?php endforeach;
		
		} else {
				
			$latit = $_SESSION['mylat'];
			$longit = $_SESSION['mylong'];
			$dist=100;
			
			$results = User::find_by_distance_pagination($page, $per_page, $total_count, $latit, $longit, $dist, $myid);
			
			echo "<h3>Members Close to You</h3>";
			
			foreach($results as $result): ?>
		
			<a href="others.php?set=<?php echo $result->user_id; ?>">
				<?php echo $result->username; ?><br />
			<img width="100px" src="<?php echo $result->image1; ?>">
			</a>
			<br><br>
		
	<?php endforeach; } ?>
		
		
		<div id="pagination" style="clear: both;" >
			
			<?php
			
			$anotherpagination = new Pagination($page, $per_page, $total_count);
		
			if($anotherpagination->total_pages() > 1) {
				
			if($anotherpagination->has_previous_page()) {
				echo"<a href =\"allusers.php?page=";
				echo $anotherpagination->previous_page();
				echo "\">&laquo; Previous</a> ";
			}
			
			for($i=1; $i <= $anotherpagination->total_pages(); $i++) {
				if($i == $page) {
					echo " <span class=\"selected\">{$i}</span> ";
				} else {
					echo " <a href=\"allusers.php?page={$i}\">{$i}</a> ";
				}
			}
			
			if ($anotherpagination->has_next_page()) {
				echo" <a href =\"allusers.php?page=";
				echo $anotherpagination->next_page();
				echo "\">Next &raquo;</a> ";
			}
			
			}
			?>
			
		</div>

</div>
</div>
</div>
</body>

<?php include ('footer.php'); ?>