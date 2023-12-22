<?php 
$title = "add team";
var_dump($team);
ob_start(); 
    ?>
    <form action = "update.php" method = "POST">
            <div class = "form-group">
                <label >Name:</label>
                <input type="text" class = "form-control" name = "name" value="<?= $team->name ?>">
            </div>

            <div class = "form-group">
                <label >Description:</label>
                <input type="text" class = "form-control" name = "description" value="<?= $team->description?>">
            </div>
            <div class = "form-group">
                <label >Date Creation:</label>
                <input type="date" class = "form-control" name = "date_creation" value="<?= $team->date_creation?>">
            </div>
            <div class = "form-group">
                <input type="submit" class = "btn btn-primary my-2" name = "modifier">
            </div>

    </form>


        <?php $content = ob_get_clean();?>
        <?php include_once 'views/layout.php'; ?>
