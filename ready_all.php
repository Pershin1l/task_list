<?php
session_start();

$taskName = $_POST['task_name'];
foreach ($_SESSION["tasks"] as $taskName => $task){
    $_SESSION["tasks"][$taskName]['ready'] = true;
}

header('Location: index.php');