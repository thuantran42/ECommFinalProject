<!doctype html> <!-- This is the nav bar php -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ice Scream Company</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <nav class="navbar navbar-custom " style="max-width: 100%;">
        <div class="container-fluid">

            <a class="navbar-brand" href="index.php">
                <img src="https://lh4.googleusercontent.com/qPPSpyQ_5wq8NLWHvEFzkzeANDOsdJjKXwTDzxZHzVuFswO544iQn6WqZRFSEdL-0U-0oS_YMm1_3W3S_eQJ0QtTT505X2JZRxMnd3SOz117b8PTDViwcQMqmKvFCNrd7xBtycaYRVgULd0uYr7vrpyyi3_eAHtzUkTFnKRNmqfOP25HP7H2VwKh0aDcIw" alt="Ice Scream Image" style="height:50px;">
            </a>
            <!-- Logo brand in navbar -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><span onmouseover="style.color='blue'" onmouseout="style.color='black'" style="color: black"> Home </span> </a> <!-- go to home page -->
                    </li>

                    <li class="nav-item">
                        <!-- single-purpose link to another page -->
                        <a class="nav-link" href="aboutus.php"> <span onmouseover="style.color='blue'" onmouseout="style.color='black'" style="color: black">About Us </span> </a>
                    </li>

                    <li class="nav-item dropdown">
                        <!-- drop down menu part-->
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span onmouseover="style.color='blue'" onmouseout="style.color='black'" style="color: black"> Shop </span>

                        </a>



                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="customer.php">Register!</a></li>
                            <li><a class="dropdown-item" href="icecream.php">Create your Ice Scream!</a></li>
                            <li><a class="dropdown-item" href="customer-icecream.php">Orders</a></li>
                            <li><a class="dropdown-item" href="deals.php">Deals</a></li>
                            <li><a class="dropdown-item" href="promotion.php">Promotion</a></li>


                        </ul>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</head>
<style>
    .navbar-custom {
        background-color:hotpink;

    }
</style>
<body>
