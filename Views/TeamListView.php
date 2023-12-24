<?php
$title = "List Teams";
ob_start(); 
?>

<a href="index.php?action=displayAddTeamForm" class="btn btn-primary">Add team</a>

<?php if (!empty($teams)): ?>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Date Creation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teams as $team): ?>
                <tr>
                    <td><?= $team->id ?></td>
                    <td><?= $team->name ?></td>
                    <td><?= $team->description ?></td>
                    <td><?= $team->date_creation ?></td>
                    <td>
                        <a href="index.php?action=displayEditTeamForm&id=<?= $team->id ?>" class="btn btn-primary">Update</a>
                        <a href="index.php?action=displayDeleteConfirmation&id=<?= $team->id ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php else: ?>
    <p>No teams available.</p>
<?php endif; ?>

<?php $content = ob_get_clean();?>
<?php include_once 'views/layout.php'; ?>
