<?php

class TeamController {
    private $teamModel;

    public function __construct() {
        $this->teamModel = new TeamModel();
    }

    public function route() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'displayTeamList';

        switch ($action) {
            case 'displayAddTeamForm':
                $this->displayAddTeamForm();
                break;
            case 'addTeam':
                $this->addTeam();
                break;
            case 'displayEditTeamForm':
                $this->displayEditTeamForm();
                break;
            case 'updateTeam':
                $this->updateTeam();
                break;
            case 'displayDeleteConfirmation':
                $this->displayDeleteConfirmation();
                break;
            case 'deleteTeam':
                $this->deleteTeam();
                break;
            default:
                $this->displayTeamList();
                break;
        }
    }

    public function displayTeamList() {
        $teams = $this->teamModel->getAllTeams();
        require_once 'views/TeamListView.php';
    }

    public function displayAddTeamForm() {
        require_once 'views/AddTeamFormView.php';
    }

    public function addTeam() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
            $this->teamModel->addTeam($_POST["name"], $_POST["description"], $_POST["date_creation"]);
            header("Location: index.php");
        }
    }

    public function displayEditTeamForm() {
        $id = $_GET['id'];
        $team = $this->teamModel->getTeamById($id);
        require_once 'views/EditTeamFormView.php';
    }

    public function updateTeam() {
        extract($_POST);
        $this->teamModel->updateTeam($id, $name, $description, $date_creation);
        header("Location: index.php");
    }

    public function displayDeleteConfirmation() {
        $id = $_GET['id'];
        require_once 'views/DeleteConfirmationView.php';
    }

    public function deleteTeam() {
        $id = $_GET['id'];
        $this->teamModel->deleteTeam($id);
        header("Location: index.php");
    }
}

