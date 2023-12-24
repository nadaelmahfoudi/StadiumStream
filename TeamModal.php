<?php

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
        $sql = $this->pdo->prepare('INSERT INTO teams VALUES(null,?,?,?)');
        $sql->execute([$name, $description, $date_creation]);
    }

    public function updateTeam($id, $name, $description, $date_creation) {
        $sql = $this->pdo->prepare('UPDATE teams SET name=?, description=?, date_creation=? WHERE id=?');
        return $sql->execute([$name, $description, $date_creation, $id]);
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
}
