<?php require_once('header.php');?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Enter your info</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $(".checkout").on("keyup", ".quantity", function () {
            var price = +$(".price").data("price");
            var quantity = +$(this).val();
            $("#total").text("$" + price * quantity);
        })
    })
</script>

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
    .checkout {
        height: 300px;
        width: 400px;
        margin: 20px auto;
        border: 2px solid black;
        text-align: center;
    }
</style>

<body>

    <br /> <!-- Space Break-->

    <div class="card">
        <div class="card-header">
            <h1> <span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">Order(s) info</span></h1> <!-- Order Info Title-->
            <h5> <span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">Let's see if everything is right here before check out!</span></h5>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">Customer ID</span></th>
                        <th><span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">Customer Name</span></th>
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
        </div>
    </div>

    <br /> <!-- Space Break -->


    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">Ice Cream ID</span></th>
                        <th><span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">Ice Cream Name</span></th>


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
        </div>
    </div>

    <br /> <!-- Space break--> 

    <div class="checkout">
        <!-- Check out Box -->
        <h1 class="title">Checkout</h1>
        <p class="price" data-price="4.99">$5.00 per Ice Cream (fixed)</p>
        <p class="description">Quantity:</p>
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

        $sql = "select *
        FROM IceCream";
        $result = $conn->query($sql);
        $rowcount=mysqli_num_rows($result);

        

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        ?>


        <input type="text" class="quantity" value="<?=$rowcount?>"> <!-- Error, fix later-->

        <p class="total">Total: <span id="total">$</span></p>
        <?php
        }
        } else {
        echo "0 results";
        }
        $conn->close();
        ?>
        <button class="btn">Submit Order</button>

    </div>

    <br /> <!-- Space break -->

    <a class="btn btn-primary" style="background-color:hotpink;" href="index.php" role="button">Home</a>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
