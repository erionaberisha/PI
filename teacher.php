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
$pageTitle = "Teacher";
include "php/headertop_faculty.php";
?>
<div class="teacher_profile">
	
	<div class="section">
			<h3>Student</h3>
			<ul>
				<li><a href="admin_all_student.php">View All Student</a></li>
				<li><a href="st_result1.php">Student Result</a></li>
				
			</ul>
	</div>

	<!-- <div class="section">
	
			<h3>Registry</h3>
			<ul>
				<li><a href="#">Accounts</a></li>
				<li><a href="#">Salary</a></li>
				<li><a href="#">Student tution fee</a></li>
				<li><a href="#">Other cost</a></li>
			</ul>

	</div> -->



<?php include "php/footerbottom.php";?>