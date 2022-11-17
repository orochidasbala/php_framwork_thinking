<?php require "partials/heading.php" ?>

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

<?php require "partials/footer.php" ?>
