<?php
    ob_start();
?>

<h1 style="margin-left: 0 auto;">Blog</h1>
<div class="container px-4 text-center">
  <div class="row gx-5">
    <div class="col">
    <?php
    echo '<div class="col">
              <div class="card" style="width:50%; margin:0 auto;">
              <div class="card-body" >
                  <img class="card-img-top" style="width:40%;" src="images/blocks/'.$blockDetail['image'].'">
                  <div class="card-title h5">'.$blockDetail['title'].'</div>
                  <p class="card-text">'.$blockDetail['description'].'</p> 
                  <p class="card-text">Date of publish: '.$blockDetail['date'].'</p>
                  <p class="card-text">Category: '.$blockDetail['name'].'</p>
                  <a href="blocks" role="button" class="btn btn-primary">Back to posts...</a>
              </div>
          </div>';
    ?>
    </div>
  </div>
</div>

<?php
    $content = ob_get_clean();
    include "view/templates/layout.php";
?>