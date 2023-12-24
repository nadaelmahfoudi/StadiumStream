<?php

require_once 'autoloader.php';

use controllers\TeamController;

$teamController = new TeamController();
$teamController->route();
?>
<script>
    <?php if (isset($_GET['team_added']) && $_GET['team_added'] === 'true'): ?>
        alert("Team added successfully!");
    <?php endif; ?>

    <?php if (isset($_GET['team_updated']) && $_GET['team_updated'] === 'true'): ?>
        alert("Team updated successfully!");
    <?php endif; ?>
</script>

