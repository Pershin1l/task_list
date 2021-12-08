<?php
session_start();

$taskName = $_POST['task_name'];
$_SESSION["tasks"][$taskName]['ready'] = !$_SESSION["tasks"][$taskName]['ready'];

header('Location: index.php');