<?php
session_start();
	require "php/config.php";
	require_once "php/functions.php";
	$user = new login_registration_class();
	$faculty_id = $_SESSION['faculty_id'];
	$faculty_name = $_SESSION['faculty_name'];
	if(!$user->get_faculty_session()){
		header('Location: index.php');
		exit();
	}
?>	
<?php 
$pageTitle = "Student Result";
include "php/headertop_faculty.php";
?>
<div class="all_student fix">
		
		<table class="tab_one" style="text-align:center;">
			<tr>
				<th style="text-align:center;">SL</th>
				<th style="text-align:center;">Name</th>
				<th style="text-align:center;">ID</th>
				<th style="text-align:center;">Add Result</th>
				<th style="text-align:center;">view Result</th>
				
			</tr>
			<?php 
			$i=0;
				$alluser = $user->get_all_student();
				
				while($rows = $alluser->fetch_assoc()){
				$i++;
		?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['st_id'];?></td>
				<td><a href="add_result1.php?ar=<?php echo $rows['st_id']; ?>&vn=<?php echo $rows['name'];?>">Add Result</a></td>
				<td><a href="view_result1.php?vr=<?php echo $rows['st_id']; ?>&vn=<?php echo $rows['name'];?>">View Result</a></td>
			</tr>
			<?php } ?>
	
		</table>

		
</div>
<?php include "php/footerbottom.php";?>
<?php ob_end_flush() ; ?>