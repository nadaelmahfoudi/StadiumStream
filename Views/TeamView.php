<?php 

$title = "list teams";
ob_start(); 
    ?>
    <a href="insert.php" class="btn btn-primary">Add team</a>
    <table class = "table table-stripped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>Description</th>
                    <th>Date_Creation</th>
                    <th>Actions</th>
                </tr>
                
            </thead>
            <tbody>
            <?php foreach ($teams as $team): ?>
                <tr>
                    <td><?php echo $team->id ?></td>  
                    <td><?php echo $team->name ?></td> 
                    <td><?php echo $team->description ?></td> 
                    <td><?php echo $team->date_creation ?></td>
                    <td><a href="edit.php?id=<?php echo $team->id ?>" class="btn btn-primary">Update</a></td> 
                    <td><a href="delete.php?id=<?php echo $team->id ?>" class="btn btn-danger">Delete</a></td>
                     
                </tr>
            <?php endforeach;?>
            </tbody>

        </table>
        <?php $content = ob_get_clean();?>
        <?php include_once 'views\layout.php'; ?>