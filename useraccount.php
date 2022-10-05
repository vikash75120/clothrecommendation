<?php

session_start();

if (!isset($_SESSION['email'])) {
    header('location:home.php');
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Useraccount</title>
</head>

<body>




    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="home.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page2.php">Trending</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Shirt</a>
                        <a class="dropdown-item" href="#">Pants</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Jeans</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>




    <div class="container">
        <div class="card text-center border-0">
            <div class="card-header">
                <h3>Account Section</h3>
            </div>
            <div class="card-body">
                <img src="https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png" alt="profile pic">
                <h5 class="card-title">Welcome <br><?php echo $_SESSION['email']; ?></h5>
                <p class="card-text">We will do our best to provide best clothes that suits you.</p>
                <a href="home.php" class="btn btn-primary">Logout</a>
            </div>
            <!--footer-->
            <hr>
            <footer class="container bg-light">


                <p>An error occured during document validation after save with the following message: An error occured, no output was received after executing the phpmd command</p><br>
                <div class="d-flex flex-row justify-content-around">
                    <div>
                        <a href="/" class="text-dark">shirt</a><br>
                        <a href="/" class="text-dark">T-shirt</a><br>
                        <a href="/" class="text-dark">hoodies</a><br>
                        <a href="/" class="text-dark">sweatshirt</a><br>
                    </div>
                    <div>
                        <a href="/" class="text-dark">shirt</a><br>
                        <a href="/" class="text-dark">T-shirt</a><br>
                        <a href="/" class="text-dark">hoodies</a><br>
                        <a href="/" class="text-dark">sweatshirt</a><br>
                    </div>
                    <div>
                        <a href="/" class="text-dark">shirt</a><br>
                        <a href="/" class="text-dark">T-shirt</a><br>
                        <a href="/" class="text-dark">hoodies</a><br>
                        <a href="/" class="text-dark">sweatshirt</a><br>
                    </div>
                </div><br>
                <p>© Company 2020-2022</p>
            </footer>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>


</body>

</html>