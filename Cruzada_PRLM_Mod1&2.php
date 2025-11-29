<!-- Cruzada, Vince Raiezen M. -->
<!-- WD-202 -->
<!-- 6DWEB -->

<?php 
//variables
$storeniboss = "Tindahan ni Bossing";

//include products from a separate file
require "products.php";

//type juggling
$taxngbir = '0.08';

//total items
$totalsigarilyo = 0;
foreach ($products as $product) {
    $totalsigarilyo = $totalsigarilyo + 1;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $storeniboss; ?></title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background: #111;
            color: #fff;
            padding: 20px;
            background-image: linear-gradient(to right, #0d0d0d, #1f1f1f)
        }

        .container {
            background: rgba(255,255,255,0.05);
            padding: 20px;
            border-radius: 10px;
            width: 85%;
            margin: auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 12px;
            border: 1px solid;
            text-align: center;
        }

        th {
            background: rgba(255,255,255,0.2);
        }

        .warning {
            background: #660000;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            color: #ffcccc;
        }

        .low {
            color: #ff7777;
        }

        .high {
            color: #66ff99;
        }
        
        .footer {
            margin-top: 20px;
            text-align: center;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1><?php echo $storeniboss; ?></h1>

        <div class="warning">
            <b>Disclaimer:</b> This is a school activity. Smoking is dangerous and is bad for your health.
        </div>

        <p>Total Products: <b><?php echo $totalsigarilyo; ?></b></p>

        <table>
            <tr>
                <th>Brand</th>
                <th>Base Price</th>
                <th>Price + Tax</th>
                <th>Stock</th>
                <th>Status</th>
            </tr>

            <?php
            foreach ($products as $item) {
                //new computation for tax
                $finalprice = $item["price"] + ($item["price"] * $taxngbir);

                //added new variable 'stock'
                if ($item["stock"] < 40) {
                    $status = "<span class='low'>Low Stock</span>";
                } else {
                    $status = "<span class='high'>In Stock</span>";
                }
            ?>
                    
            <tr>
                <td><?php echo $products[0]["name"]; ?></td>
                <td><?php echo $products[0]["price"]; ?></td>
                <td><?php echo $price1; ?></td>
                <td><?php echo $products[0]["stock"]; ?></td>
            </tr>

            <tr>
                <td><?php echo $products[1]["name"]; ?></td>
                <td><?php echo $products[1]["price"]; ?></td>
                <td><?php echo $price2; ?></td>
                <td><?php echo $products[1]["stock"]; ?></td>
            </tr>

            <tr>
                <td><?php echo $products[2]["name"]; ?></td>
                <td><?php echo $products[2]["price"]; ?></td>
                <td><?php echo $price3; ?></td>
                <td><?php echo $products[2]["stock"]; ?></td>
            </tr>
            <?php } ?>

        </table>

    <div class="footer">
        <p>Created by Vince Raiezen M. Cruzada </p>
    </div>
    </div>
</body>
</html>


