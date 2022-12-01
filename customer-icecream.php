<?php require_once('header.php');?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Enter your info</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

</head>

<style>
    body {
        background-image: url("https://img.freepik.com/free-vector/confetti-background_1048-7865.jpg?w=740&t=st=1669434268~exp=1669434868~hmac=769baab9295a48e4a300e4e0c9efd7cca933906626f8630687dec24764522ee2");
        /*background-color: #cccccc;*/
        background-size: cover;
        background-repeat: no-repeat;
        /*margin:auto;*/
        /*background-position: center center;*/
        /*background-attachment: fixed;*/
    }
</style>

<body>
    <h1>Your Order</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "traeoucr_homework3User";
            $password = "mysqltt1024332";
            $dbname = "traeoucr_ecommfinalproject";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "select customer_id, customerName
            FROM Customer";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?=$row['customer_id']?></td>
                <td><?=$row['customerName']?></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                </td>
            </tr>
            <?php
            }
            } else {
            echo "0 results";
            }
            $conn->close();
            ?>
        </tbody>
    </table>

    <br /> <!-- Space Break -->

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Ice Cream ID</th>
                <th>Ice Cream Name</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "traeoucr_homework3User";
            $password = "mysqltt1024332";
            $dbname = "traeoucr_ecommfinalproject";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "select icecream_id, icecreamName
            FROM IceCream";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?=$row['icecream_id']?></td>
                <td><?=$row['icecreamName']?></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                </td>
            </tr>
            <?php
            }
            } else {
            echo "0 results";
            }
            $conn->close();
            ?>
        </tbody>
    </table>

    <div class="fw-bold ">
        <!-- footer divs -->
        <hr />
        <div>
            <!-- first row divs in footer-->
            <div style="width: 400px; float: left;">
                Privacy Policy
            </div>

            <div style="width:400px; float:left;">
                Terms & Conditions
            </div>

            <div style="width: 400px; float: left;">
                Do Not Sell or Share My Personal Information
            </div>

        </div>



        <div>
            <div style="width: 400px; float: left;">
                Cookie Settings
            </div>

            <div style="width: 400px; float: left;">
                @2018 - 2022 The Ice Scream Comapny Inc.
            </div>

        </div>



    </div>
    <a class="btn btn-primary" href="index.php" role="button">Home</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

