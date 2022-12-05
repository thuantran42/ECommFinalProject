<html>
<head>
    <title>Customer Receipt</title>
</head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
        // Create the message to display in the pop-up
        var message = "Customer: " + "<?php echo $customer_name; ?>" + "\n";
        message += "Purchased items:\n";
        <?php
            // Add the purchased items to the message
            for ($i = 0; $i < count($purchased_items); $i++) {
                echo "message += " . $purchased_items[$i] . " - $" . $item_prices[$i] . "\n";
            }
        ?>

        // Display the pop-up with the message
        alert(message);
    }
</script>
</body>
</html>
