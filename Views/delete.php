<?php
$title = "delete team";
ob_start();
?>
<p>"did u really want to delete the team?"</p> 
<a class="btn btn-danger" href="destroy.php?id=<?php echo $id?>">Confirm</a>
<a class= "btn btn-warning" href="index.php">Cancel</a>
<?php
$content = ob_get_clean();
include_once 'views/layout.php';