<?php
$title = "Add Team";
ob_start(); 
?>

<form action="index.php?action=addTeam" method="POST">
    <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <label>Description:</label>
        <input type="text" class="form-control" name="description">
    </div>

    <div class="form-group">
        <label>Date Creation:</label>
        <input type="date" class="form-control" name="date_creation">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" name="add">
    </div>
</form>


<?php $content = ob_get_clean();?>
<?php include_once 'views/layout.php'; ?>

