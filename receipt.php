<?php require_once('header.php');?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Ice Scream Company</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  </head>


<script>/* Script tag */</script>

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

    <!--<div>-->
    <!-- you can experiment opacity: 0.3 for transparency -->
    <!--<div style="color:lightpink;" class="text-center fw-bold text-uppercase">-->
    <!-- Title with Picture-->
    <!--<h1> <span class="badge bg-secondary">Welcome to The Ice Scream Company</span></h1>

    </div>-->
    <!--<div class="card">
        <div class="card-body">
            This is some text within a card body.
        </div>
    </div>-->
    <br /> <!-- Space break -->
    Receipt

    <?php
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    echo '<div class="alert alert-success" role="alert"><?$_POST['quantityCheck']?></div>';

   
    }
    ?>


    <form method="post" action="receipt.php">
        <input type="text" id="quantityCheck1" class="quantity" value="<?=$rowcount?>"> <!-- Error, fix later-->

        <p class="total">Total: <span id="total">$</span></p>
        <button class="btn">Submit Order</button>

    </form>


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


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
