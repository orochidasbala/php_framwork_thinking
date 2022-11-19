<?php require "partials/heading.php" ?>

    <h1>Submit your name</h1>
    <form action="/names" method="POST">
        <input type="text" name="name"/>
        <input type="submit" value="submit">
    </form>

<?php require "partials/footer.php" ?>
