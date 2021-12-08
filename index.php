<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task List</title>
</head>
<body>

<header><h1><font face="Arial">Task List</font></h1></header>

<form action="new_task.php" method="post">
    <input style="background-color: white; width: 216px; height: 24px" type="text" name="task_name" placeholder="Enter text...">
    <button style="color: white; background-color: black; width: 120px; height: 30px; border-radius: 8px"><b>ADD TASK</b></button>
</form>
<br>
<form style="display: inline-block" action="remove_all.php" method="post">
    <input type="hidden" name="task_name">
    <button style="background-color: white; width: 112px; height: 26px;border-radius: 8px"><b>REMOVE ALL</b></button>
</form>
&nbsp
<form style="display: inline-block" action="ready_all.php" method="post">
    <input type="hidden" name="task_name">
    <button style="background-color: white; width: 100px; height: 26px; border-radius: 8px"><b>READY ALL</b></button>
</form>

<?php foreach ($_SESSION["tasks"] as $taskName => $task): ?>
    <div style="margin-bottom: 10px;">
        <p><?php echo $task['ready'] ? '<font color="green"; size="4px"><b>●</b></font>' : '<font color="red"; size="4px"><b>●</b></font>' ?>&ensp;<font size="4px"><?php echo $taskName ?></font>  </>
        <form style="display: inline-block" action="change_status.php" method="post">
            <input type="hidden" name="task_name" value="<?php echo $taskName ?>">
            <button style="background-color: white; width: 80px; height: 26px; border-radius: 8px"><b><?php echo $task['ready'] ? 'UNREADY' : 'READY' ?></b></button>
        </form>
        &nbsp
        <form style="display: inline-block" action="delete.php" method="post">
            <input type="hidden" name="task_name" value="<?php echo $taskName ?>">
            <button style="background-color: white; width: 80px; height: 26px; border-radius: 8px"><b>DELETE</b></button>
        </form>
    </div>
<?php endforeach; ?>
</body>
</html>