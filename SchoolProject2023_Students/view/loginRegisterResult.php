<?php 
ob_start();
?>

<div class="container mt-5 text-center">
    <?php 
    if (isset($resultRegIn) && $resultRegIn == true) { 
        echo '<h3 style="color:green;">Login succeed. Hello, '.$_SESSION['name'].'!</h3>';
    } elseif (isset($resultRegIn) && $resultRegIn == false){
        echo '<h3 style="color:red;">Login errors</h3><hr>';
        echo '<p><a href="login">Login</a> || <a href="register">Register</a></p>';
    } 
    ?>
</div>
<?php 
$content = ob_get_clean();
include "templates/layout.php";
?>
