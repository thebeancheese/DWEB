<?php
$name = "Vince";
$offers = [
    ['name' => 'Toffee', 'price' => 5, 'stock' => 120,],
    ['name' => 'Mints', 'price' => 3, 'stock' => 66,],
    ['name' => 'Fudge', 'price' => 4, 'stock' => 97,],
    ['name' => 'Chocolate', 'price' => 2, 'stock' => 69,],
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Variables and Arrays</title>
        <link rel = "stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <h2>Welcome <?php echo $name; ?>.</h2>
        <h2>Here are the candies we offer:</h2>
        <p><?php echo $offers[0]['name']; ?> - $<?php echo $offers[0]['price']; ?> </p>
        <p><?php echo $offers[1]['name']; ?> - $<?php echo $offers[1]['price']; ?> </p>
        <p><?php echo $offers[2]['name']; ?> - $<?php echo $offers[2]['price']; ?> </p>
        <p><?php echo $offers[3]['name']; ?> - $<?php echo $offers[3]['price']; ?> </p>

    </body>
</html>