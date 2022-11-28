<!doctype html> <!-- This is the nav bar php -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ice Scream Company</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    <nav class="navbar navbar-expand-lg bg-primary" >
        <div class="container-fluid">

            <a class="navbar-brand" href="index.php"><img src="https://lh5.googleusercontent.com/0Y7oWA31FIRMs5w_WNBABK7_rABy_r7L6TBKWzXUC8vROi7FweARrXq-QdrHo4EXyFY5L0SCx2cHmQdtQJlfJFvHLEelTBTFcchTFhnjbCTRh716RwKIwZwyxbA53nWfEXszWwIFaD9AgsF5ZqDnFyyenhr2kgBqkS9UgUB_gnuqZt-4K77b9k_CuwRFow" alt="Ice Scream Image" style="height:50px;"></a> 
            <!-- Logo brand in navbar -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a> <!-- go to home page -->
                    </li>

                    <li class="nav-item"> <!-- single-purpose link to another page -->
                        <a class="nav-link" href="index.php">Link</a>
                    </li>

                    <li class="nav-item dropdown"> <!-- drop down menu part-->
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="library1.html">Javascript library 1</a></li>
                            <li><a class="dropdown-item" href="library2.html">Javascript library 2</a></li>
                            <li><a class="dropdown-item" href="library3.html">Javascript library 3</a></li>
                            <li><a class="dropdown-item" href="library4.html">Javascript library 4</a></li>
                            <li><a class="dropdown-item" href="library5.html">Javascript library 5</a></li>


                        </ul>
                    </li>
                    
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</head>
<body>
