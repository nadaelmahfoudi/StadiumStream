<?php 
require_once 'model/TeamModel.php';

function listTeamAction(){
    $teams = teamRead();
    require_once 'views/TeamView.php';
}

function insertAction()
{
    require_once 'views/insert.php';
}

function storeAction()
{
   $isCreated = insert();
   header("Location: index.php");
    
}

function updateAction()
{
    $id = $_GET['id'];
    $team = update($id);
    require_once 'views/edit.php';
}

function editAction(){
    var_dump($_POST);
}

function deleteAction()
{
    $id = $_GET['id'];
    require_once 'views/delete.php';
}

function destroyAction()
{
    $id = $_GET['id'];
    $isDeleted = delete($id);
    header("Location: index.php");
}