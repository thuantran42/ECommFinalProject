<?php require_once('header.php');?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ice cream customization</title>

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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch ($_POST['saveType']) {
    case 'Add':
    $sqlAdd = "insert into IceCream (icecreamName, icecreamFlavor, icecreamScoop) values (?, ?, ?)";
    $stmtAdd = $conn->prepare($sqlAdd);
    $stmtAdd->bind_param("sss", $_POST['iName'], $_POST['iFlavor'], $_POST['iScoop']);
    $stmtAdd->execute();
    echo '<div class="alert alert-success" role="alert">New IceCream info added!</div>';

    break;

    case 'Edit':
    $sqlEdit = "update IceCream set icecreamName=?,icecreamFlavor=?,icecreamScoop=? where icecream_id=?";
    $stmtEdit = $conn->prepare($sqlEdit);
    $stmtEdit->bind_param("sssi", $_POST['iName'], $_POST['iFlavor'], $_POST['iScoop'], $_POST['iid']);
    $stmtEdit->execute();
    echo '<div class="alert alert-success" role="alert">Ice Cream Info edited!</div>';

    break;

    case 'Delete':
    $sqlDelete = "delete from IceCream where icecream_id=?";
    $stmtDelete = $conn->prepare($sqlDelete);
    $stmtDelete->bind_param("i", $_POST['iid']);
    $stmtDelete->execute();
    echo '<div class="alert alert-success" role="alert">Ice Cream info deleted.</div>';

    break;

    }
    }
    ?>

    <br /> <!-- Space break -->


    <div class="card">
        <div class="card-header">
            <h1> <span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">Ice Cream(s) info</span></h1> <!-- Ice Cream Info Title-->
            <h5> <span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">Got an idea? Add your flavors here!</span></h5>
        </div>
    </div>



    <!--<div class="card-header">

    </div>
    <div class="card-body">

    </div>-->




    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">ID</span></th> <!-- ID Attribute -->
                        <th><span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">Ice Scream Name</span></th>  <!-- Flavor Name Attribute -->
                        <th><span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">Flavor + topping(s)</span></th>  <!-- Flavor Attribute -->
                        <th><span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">Scoop(s)</span></th>  <!-- Scoop Attribute -->
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT icecream_id, icecreamName, icecreamFlavor, icecreamScoop from IceCream";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    ?>

                    <tr>
                        <td><?=$row["icecream_id"]?></td>
                        <td><?=$row["icecreamName"]?></td>
                        <td><?=$row["icecreamFlavor"]?></td>
                        <td><?=$row["icecreamScoop"]?></td>
                        <td>
                            <button type="button" class="btn" style="background-color:hotpink;" data-bs-toggle="modal" data-bs-target="#editWeapons<?=$row['icecream_id']?>">
                                <!-- Edit Section-->
                                Edit
                            </button>
                            <div class="modal fade" id="editWeapons<?=$row['icecream_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editWeapons<?=$row['icecream_id']?>Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editWeapons<?=$row['icecream_id']?>Label">Edit Ice Cream Information</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="">
                                                <div class="mb-3">
                                                    <label for="editWeapons<?=$row['icecream_id']?>Name" class="form-label">Ice Cream Name</label>
                                                    <input type="text" class="form-control" id="editWeapons<?=$row['icecream_id']?>Name" aria-describedby="editWeapons<?=$row['icecream_id']?>Help" name="iName" value="<?=$row['icecreamName']?>"> <!-- icecreamName -->
                                                    What flavor(s) do you really really want?
                                                    <input type="text" class="form-control" id="editWeapons<?=$row['icecream_id']?>Name" aria-describedby="editWeapons<?=$row['icecream_id']?>Help" name="iFlavor" value="<?=$row['icecreamFlavor']?>"> <!-- icecreamFlavor -->
                                                    What's the correct amount of scoops you like?
                                                    <input type="text" class="form-control" id="editWeapons<?=$row['icecream_id']?>Name" aria-describedby="editWeapons<?=$row['icecream_id']?>Help" name="iScoop" value="<?=$row['icecreamScoop']?>"> <!-- icecreamScoop-->
                                                    <div id="editWeapons<?=$row['icecream_id']?>Help" class="form-text">Edit info.</div>
                                                </div>
                                                <input type="hidden" name="iid" value="<?=$row['icecream_id']?>">
                                                <input type="hidden" name="saveType" value="Edit">
                                                <input type="submit" class="btn btn-primary" value="Submit">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <form method="post" action="">
                                <!-- Delete section -->
                                <input type="hidden" name="iid" value="<?=$row['icecream_id']?>" />
                                <input type="hidden" name="saveType" value="Delete">
                                <input type="submit" class="btn" style="background-color:hotpink;" onclick="return confirm('Are you sure?')" value="Delete">
                            </form>
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



    <br /> <!-- Space Break-->
    <!-- Add New Button trigger modal -->
    <button type="button" class="btn btn-primary" style="background-color:hotpink;" data-bs-toggle="modal" data-bs-target="#addWeapons">
        <!-- Add New Section -->
        Add New
    </button>

    <br /> <!-- Space break-->
    <!-- Modal -->
    <div class="modal fade" id="addWeapons" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addWeaponsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addWeaponsLabel">Add Ice Cream Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="WeaponsName" class="form-label">Ice cream Name</label>
                            <input type="text" class="form-control" id="WeaponsName" aria-describedby="nameHelp" name="iName"> <!-- input name-->
                            What flavor(s) do you want?
                            <input type="text" class="form-control" id="IceCreamPhone" aria-describedby="nameHelp" name="iFlavor"> <!-- input flavor-->
                            How many scoops do you want?
                            <input type="text" class="form-control" id="IceCreamScoop" aria-describedby="nameHelp" name="iScoop">  <!-- input scoop-->
                            <div id="nameHelp" class="form-text">Enter the Ice Cream's info.</div>
                        </div>
                        <input type="hidden" name="saveType" value="Add">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <br /> <!-- Space Break-->

    <div class="card">
        <div class="card-header">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGSrbA1hlEUo_ONWeyq6v1vtz9dGatPXkoiQ&usqp=CAU" class="card-img-top" alt="picture of ice cream" style="height:100px; width:100px;">

            <span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink"> Did you know?</span>
        </div>
        <div class="card-body">
            You can get as many scoops as you want if you can hold it all of course! <br />
            All ice screams will be served in a screamtastic cup! <br />
            Name your ice cream whatever you have in mind and we'll try to match that idea of yours! <br />
        </div>
    </div>


    <br /> <!-- Space Break -->



    <a class="btn btn-primary" style="background-color:hotpink;" href="index.php" role="button">Home</a> <!-- Bottom Home Button-->

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
