<?php
    ob_start();
?>

<h1 style="margin-left: 550px;">Blog</h1>


<ol class="list-group list-group-numbered" style="float: right;">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold"><a href="blocks?categoryId=1">design</a></div>
      Content for list item
    </div>
    <span class="badge text-bg-primary rounded-pill"></span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold"><a href="blocks?categoryId=2">programming</a></div>
      Content for list item
    </div>
    <span class="badge text-bg-primary rounded-pill"></span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold"><a href="blocks?categoryId=3">HTML & CSS</a></div>
      Content for list item
    </div>
    <span class="badge text-bg-primary rounded-pill"></span>
  </li>
</ol>

<div class="container px-4 text-center">
  <div class="row gx-5">
    <div class="col">
    <?php
    foreach ($blocks as $block){
      echo '<div class="col">
              <div class="card" style="width:50%; margin:0 auto;">
              <div class="card-body" >
                  <img class="card-img-top" style="width:40%;" src="images/blocks/'.$block['image'].'">
                  <div class="card-title h5">'.$block['title'].'</div>
                  <p class="card-text">'.$block['description'].'</p> 
                  <p class="card-text">Date of publish: '.$block['date'].'</p>
                  <p class="card-text">Category: '.$block['name'].'</p>
                  <a href="detailnews?id='.$block['id'].'">Details...</a>
              </div>
          </div>';
    }
    ?>
    </div>
  </div>
</div>
<?php
    $content = ob_get_clean();
    include "view/templates/layout.php";
?>