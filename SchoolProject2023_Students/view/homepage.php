<?php
    ob_start();
?>
<h2 class="text-center m-4">Home - Speciality List</h2> 
<div class="row row-cols-1">
    <?php
    foreach ($specialityList as $spec){
        echo '<div class="col">
                <div class="card">
                <img class="card-img-top" src="'.$spec['image'].'">
                <div class="card-body">
                    <div class="card-title h5">'.$spec['nameSpec'].'</div>
                    <p class="card-text">'.$spec['description'].'</p> 
                    <p class="card-text">Duration of study: '.$spec['duration'].' years</p>
                    <a href="#" role="button" class="btn btn-primary">Students</a>
                </div>
            </div>';
    }
    ?>
</div>
<?php
    $content = ob_get_clean();
    include "view/templates/layout.php";
?>