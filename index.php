<?php
require_once 'autoloader.php';

use controllers\TeamController;

$teamController = new TeamController();
$teamController->route();
