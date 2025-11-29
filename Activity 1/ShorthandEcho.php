<?php
$name = "Vince";
$favorites = ['Skittles', 'Nerds', 'Sour Patch Kids'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Shorthand Echo</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <h2>Welcome <?= $name ?></h2>
        <p>Your favorite type of candy is: <?= $favorites[0] ?>.</p>
    </body>
</html>