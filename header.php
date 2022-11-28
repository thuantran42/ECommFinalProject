<!doctype html> <!-- This is the nav bar php -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ice Scream Company</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="https://lh5.googleusercontent.com/0Ss3aPu0-u9uz0BgBv_fpYID4rGX-OCh50ZvSzP4kqGJvXbbaV7Q4XN4eskbVI2AOSvZfXCvTl2HrXpkE4s5vVwDZIm0w2Zr0Uic8R04kNCmeS9Pp3lnq7U6HAQ6n0cUY69HwhHPuh4qfS7m_Y-zpAFmwXhAhjz-A9rYToPNKseXcAl354wljqY-CcRiow" alt="Ice Scream Image" style="height:50px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
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
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
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
