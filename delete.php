<?php
session_start();

$taskName = $_POST['task_name'];
unset($_SESSION["tasks"][$taskName]);

header('Location: index.php');