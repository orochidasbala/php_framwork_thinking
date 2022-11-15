<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="src/style/style.css">
</head>

<body>
    <h1>My tasks</h1>
    <b>
    <?php foreach($tasks as $task) : ?>
        <?php 
            if($task->status) {
                echo "<li class='complete'>$task->description</li>";
            } else {
                echo "<li class='uncomplete'>$task->description</li>";
            }
        ?>
    <?php endforeach; ?>
    </b>
</body>

</html>