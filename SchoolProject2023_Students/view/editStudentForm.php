<?php
ob_start();
?>
<h2 class="text-center m-4">Add new student</h2>
<div class="container">
	<form action="editstudentResult?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
		<div class="row g-3">
			<div class="col-sm-6">
				<div class="form-outline mb-2">
					<label class="form-label">First Name</label>
					<input type="text" name="firstName" class="form-control" value="<?php echo $student['firstName'] ?>">
				</div>
				<div class="form-outline mb-2">
					<label class="form-label">Date Birth</label>
					<input type="date" name="dateBirth" class="form-control" value="<?php echo $student['dateBirth'] ?>">
				</div>
				<div class="form-outline mb-2">
					<label class="form-label">Mobil</label>
					<input type="text" name="mobil" class="form-control" value="<?php echo $student['mobil'] ?>">
				</div>
				<div class="form-outline mb-2">
					<label class="form-label">Gender</label>
					<div class="btn-group-sm form-control" role="group" aria-label="Basic radio toggle button group">
						<input type="radio" class="btn-check" name="gender" id="btnradio1" autocomplete="off" <?php if ($student['gender'] == 'm') {
																													echo 'checked';
																												} ?> value="m">
						<label class="btn btn-outline-primary" for="btnradio1">Male</label>
						<input type="radio" class="btn-check" name="gender" id="btnradio2" autocomplete="off" <?php if ($student['gender'] == 'n') {
																													echo 'checked';
																												} ?> value="n">
						<label class="btn btn-outline-primary" for="btnradio2">Female</label>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-outline mb-2">
					<label class="form-label">Address</label>
					<input type="text" name="address" class="form-control" value="<?php echo $student['address'] ?>">
				</div>
				<div class="form-outline mb-2">
					<label class="form-label">Speciality select</label>
					<select name="specid" class="form-select">
						<?php
						foreach ($rows as $row) {
							echo '<option value="' . $row['id'] . '"';
							if ($row['id'] == $student['specid']) echo 'selected';
							echo '>' . $row['nameSpec'] . '</option>';
						}
						?>
					</select>
				</div>
				<div class="form-outline mb-2">
					<label class="form-label">Year</label>
					<input type="text" name="year" class="form-control" value="<?php echo $student['year'] ?>">
				</div>
				<div class="form-outline mb-2">
					<label class="form-label">OldPicture</label>
					<input type="text" name="oldpicture" class="control" readonly value="<?php echo $student['photo']; ?>">
					<img src="images/<?php echo $student['photo']; ?>" width="10%">
				</div>
				<div class="form-outline mb-2">
					<label class="form-label">Picture</label>
					<input type="file" name="picture" class="form-control">
				</div>
			</div>
		</div>
		<div class="container text-center">
			<button type="submit" name="save" class="btn btn-primary">Edit</button>
			<a class="btn btn-primary" href="students" role="button">Back to list</a>
		</div>
	</form>
</div>
<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>