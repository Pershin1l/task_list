<?php

$json = file_get_contents('tasks.json');
$jsonArray = json_decode($json, true);

$taskName = $_POST['task_name'];
foreach ($jsonArray as $taskName => $task){
    $jsonArray[$taskName]['ready'] = true;
}

file_put_contents('tasks.json', json_encode($jsonArray, JSON_PRETTY_PRINT));

header('Location: index.php');