<?php
$title = "Delete Team";
ob_start(); 
?>

<p>Are you sure you want to delete the team?</p> 
<a class="btn btn-danger" href="index.php?action=deleteTeam&id=<?= $id ?>">Confirm</a>
<a class="btn btn-warning" href="index.php">Cancel</a>

<?php
$content = ob_get_clean();
include_once 'views/layout.php';
