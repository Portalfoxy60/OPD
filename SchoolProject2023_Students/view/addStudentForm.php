<?php
ob_start();
?>
<h2 class="text-center m-4">Add new student</h2>
<div class="container">
    <form action="addStudentResult" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="from-outline mb-2">
                <label class="form-label">First Name</label>
                <input type="text" name="firstName" class="form-controll" required> 
            </div>
            <div class="from-outline mb-2">
                <label class="form-label">Year</label>
                <input type="number" name="year" class="form-controll" required> 
            </div>
            <div class="from-outline mb-2">
                <label class="form-label">Date Birth</label>
                <input type="date" name="dateBirth" class="form-controll" required> 
            </div>
            <div class="from-outline mb-2">
                <label class="form-label">Mobil</label>
                <input type="text" name="mobil" class="form-controll" required> 
            </div>
            <div class="from-outline mb-2">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-controll" required> 
            </div>
            <div class="from-outline mb-2">
                <label class="form-label">Picture</label>
                <input type="file" name="picture" class="form-controll" required/>
            </div>
            <div class="form-outline mb-2">
                <label class="form-label">Gender</label>
                <div class="btn-group-sm form-controll" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="gender" id="btnradio1" autocomplete="off" checked value="m">
                    <label class="btn btn-outline-primary" for="btnradio1">Male</label>
                    <input type="radio" class="btn-check" name="gender" id="btnradio2" autocomplete="off" value="n">
                    <label class="btn btn-outline-primary" for="btnradio2">Female</label>
                </div>   
            </div>
            <div class="from-outline mb-2">
                <label class="form-label">Speciality select</label>
                <select class="form-select" name="specId">
                    <?php
                    foreach ($rows as $row){
                        echo '<option value="'.$row['id'].'">'.$row['nameSpec'].'<option>';
                    }
                    ?>
                </select>
            </div>
            <button type="submit" name="save" class="btn btn-primary">Primary</button>
            <a href="students" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Primary link</a>
        </div>
    </form>
</div>


<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>