<?php
namespace models;

use PDO;

class TeamModel {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO('mysql:dbname=stadiumstream;host=localhost', 'root', '');
    }

    public function getAllTeams() {
        $teams = $this->pdo->query('SELECT * FROM teams')->fetchAll(PDO::FETCH_OBJ);
        return $teams;
    }

    public function addTeam($name, $description, $date_creation) {
        try {
            $this->validateTeamData($name, $description, $date_creation);
            
            $sql = $this->pdo->prepare('INSERT INTO teams VALUES(null,?,?,?)');
            $sql->execute([$name, $description, $date_creation]);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function updateTeam($id, $name, $description, $date_creation) {
        try {
            $this->validateTeamData($name, $description, $date_creation);
            
            $sql = $this->pdo->prepare('UPDATE teams SET name=?, description=?, date_creation=? WHERE id=?');
            $sql->execute([$name, $description, $date_creation, $id]);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteTeam($id) {
        $sql = $this->pdo->prepare('DELETE FROM teams WHERE id=?');
        return $sql->execute([$id]);
    }

    public function getTeamById($id) {
        $sql = $this->pdo->prepare('SELECT * FROM teams WHERE id = ?');
        $sql->execute([$id]);
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    private function validateTeamData($name, $description, $date_creation) {
        if (empty($name) || empty($description) || empty($date_creation)) {
            throw new \Exception("Please enter all information.");
        } elseif (!preg_match('/[A-Za-z0-9]/', $name)) {
            throw new \Exception("Enter a valid name!");
        } elseif (!preg_match('/[A-Za-z]/', $description)) {
            throw new \Exception("Enter a valid description!");
        }
    }
}
