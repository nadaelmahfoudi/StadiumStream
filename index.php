<?php
require_once 'TeamModal.php'; // Assurez-vous que le chemin du fichier est correct
require_once 'TeamController.php';

$teamController = new TeamController();
$teamController->route();
