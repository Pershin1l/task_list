<?php
session_start();
$taskName = $_POST['task_name'] ?? false;
$taskName = trim($taskName);

if($taskName){
    $_SESSION["tasks"][$taskName] = ['ready' => false];
}

header('Location: index.php');