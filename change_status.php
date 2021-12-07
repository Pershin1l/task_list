<?php

$json = file_get_contents('tasks.json');
$jsonArray = json_decode($json, true);

$taskName = $_POST['task_name'];
$jsonArray[$taskName]['ready'] = !$jsonArray[$taskName]['ready'];

file_put_contents('tasks.json', json_encode($jsonArray, JSON_PRETTY_PRINT));

header('Location: index.php');