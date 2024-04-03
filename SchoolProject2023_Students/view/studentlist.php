<?php
	ob_start();
?>
<h2 class="text-center m-4">Student list
	<?php
		$speciality=isset($specialityDetail) ? $specialityDetail['nameSpec']: '';
		echo ' by '.$speciality.' speciality';
		?>
</h2>
<div class="row">
		<div class="col-sm-3">
		<div class="flex-column ms-5 nav">
		<?php
		foreach($specialityList as $spec) {
			echo '<div class="nav-item">
					<a  class="nav-link"  href="studByspec?id='.$spec['id'].'">'.$spec['nameSpec'].'</a>
				</div>	';
		}
		?>
		</div>
		</div>
<?php
	if(count($studentList)==0) {
		echo '<div class="col-sm-9 mt-3"><h3>Students list is null</h3></div>';
	}
	else{
		echo'
		<div class="col-sm-9 mt-3">
			<div class="text-end"><a href="addstudent">Add new student</a></div>			
			<table class="table">
			  <thead>
				<tr>
				  <th>#</th>
				  <th>First name</th>
				  <th>Date of Birth</th>
				  <th>Year of study</th>
				  <th>Speciality</th>
				  <th>Actions</th>
				</tr>
			  </thead>
			  <tbody>';
				
				$n=0;
				foreach($studentList as $student) {
					$n++;
					echo '<tr>
					<th>'.$n.'</th>
					<td>'.$student['firstName'].'</td>
					<td>'.$student['dateBirth'].'</td>
					<td>'.$student['year'].'</td>
					<td>'.$student['nameSpec'].'</td>
					<td>
						<form action="deleteStudent?id='.$student['id'].'" method="POST" enctype="multipart/form-data">
						<a href="student?id='.$student['id'].'">Details</a> ||
						<a href="editstudent?id='.$student['id'].'">Edit</a> || 
						<button type="submit" name="delete" class="delete" onclick="return  confirm(`Are you sure you want to delete the student? '.$student['firstName'].', gender: '.$student['gender'].', date of birth: '.$student['dateBirth'].'?`)">Delete</</button>
						</form></td>
					</tr>';
				}
				echo '
				</tbody>
			</table>
			<p class="text-end me-5"> Count of list ';
				
				echo count($studentList);
			echo '
			</p>
	</div>
</div>';
	}
?>
<?php
	$content = ob_get_clean();
	include "view/templates/layout.php";
?>