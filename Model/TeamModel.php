<?php 

function connection_database(){
    $pdo = new PDO('mysql:dbname=stadiumstream;host=localhost', 'root', '');
    return $pdo; 
}

function teamRead(){
    $pdo = connection_database();
    $teams = $pdo->query('SELECT * FROM teams')->fetchAll(PDO::FETCH_OBJ);
    return $teams;
}

function insert()
{
    $pdo = connection_database();
    $sql = $pdo->prepare('INSERT INTO teams VALUES(null,?,?,?)');
    $sql->execute([$_POST["name"],$_POST["description"],$_POST["date_creation"]]);
}

function update($id)
{
    $pdo = connection_database();
    $sql = $pdo->prepare('SELECT * FROM teams WHERE id= ?');
    $sql->execute([$id]);
    return $sql->fetch(PDO::FETCH_OBJ);

}



function delete($id)
{
    $pdo = connection_database();
    $sql = $pdo->prepare('DELETE FROM teams WHERE id= ?');
    return $sql->execute([$id]);
}