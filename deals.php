<html>
<head>
    <title>Customer Receipt</title>
</head>
<body>
    <h1>Customer Receipt</h1>

    <?php
        // Connect to the database and retrieve the customer's information
        $customer_name = "John Doe";
        $purchased_items = ["Product 1", "Product 2", "Product 3"];
        $item_prices = [10, 20, 30];

        // Calculate the total cost of the purchase
        $total_cost = array_sum($item_prices);
    ?>

    <p>Customer: <?php echo $customer_name; ?></p>
    <ul>
        <?php
            // Generate a list of the purchased items and their prices
            for ($i = 0; $i < count($purchased_items); $i++) {
                echo "<li>" . $purchased_items[$i] . " - $" . $item_prices[$i] . "</li>";
            }
        ?>
    </ul>
    <p>Total cost: $<?php echo $total_cost; ?></p>

    <button onclick="printReceipt()">Print Receipt</button>

    <script>
        function printReceipt() {
            // Code to print the receipt goes here
        }
    </script>
</body>
</html>
