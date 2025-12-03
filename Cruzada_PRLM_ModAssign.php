<?php 
declare(strict_types=1);

//include products from a separate file
require "products.php";

$storeniboss = "Tindahan ni Bossing";

//global tax rate
$taxngbir = 12;

//functions
function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return ($price * $quantity);
}

function get_tax_due(float $price, int $quantity, int $tax_percentage = 0): float {
    $total = $price * $quantity;
    return $total * ($tax_percentage / 100);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $storeniboss; ?></title>
    <link rel="stylesheet" href="css/style3.css">
</head>

<body>
    <h1><?php echo $storeniboss; ?></h1>
    
    <table>
        <tr>
            <th>Brand</th>
            <th>Stock</th>
            <th>Reorder</th>
            <th>Total Value</th>
            <th>Tax Due</th>
        </tr>

        <?php foreach ($oyliragis as $name => $data): 
            $price = $data['price'];
            $stock = $data['stock'];
        ?>
        <tr>
            <td><?= $name ?></td>
            <td><?= $stock ?></td>
            <td><?= get_reorder_message($stock) ?></td>
            <td>₱<?= number_format(get_total_value($price, $stock), 2) ?></td>
            <td>₱<?= number_format(get_tax_due($price, $stock, $taxngbir), 2) ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

    <div class="footer">
        <p>Created by Vince Raiezen M. Cruzada </p>
    </div>
    </div>
</body>
</html>



