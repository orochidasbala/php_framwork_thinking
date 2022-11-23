<?php require "partials/heading.php" ?>

<h1>Username</h1>
<form action="/delete" method="POST">
    <?php foreach ($users as $user) : ?>
        <input type="submit" name="id" value="<?= $user->id; ?>" style="width: auto; text-align:center;"></input>
        <?= $user->name; ?><br>
    <?php endforeach; ?>
</form>
<h1>Submit your name</h1>
<form action="/names" method="POST">
    <input type="text" name="name" placeholder="username" />
    <input type="submit" value="submit">
</form>

<?php require "partials/footer.php" ?>