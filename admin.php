<?php
session_start();
// if ($_SESSION['isUserLoggedIn'] !== true) {
//   window.location.href = "index.php";
// }
?>
<!DOCTYPE html>
<html class="h-100">

    <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/jquery.Jcrop.min.css" type="text/css" />
            <link rel="stylesheet" href="css/style.css" />
            <script src="js/jquery.Jcrop.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>

    <body class="h-100">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    Wallpaper App Admin
                </a>

                <div class="dropdown navbar-right">
                    <button
                    id="user-email"
                    class="btn btn-secondary dropdown-toggle"
                    type="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >
  <?php echo $_SESSION['userProfile']['email']; ?>
                    </button>

                    <div
                        class="dropdown-menu"
                        aria-labeledby="user-email"
                    >
                        <a class="dropdown-item" id="btn-logout" href="#">
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="row h-100 bg-light" id='mainRow'>
            <div class="col-lg-2 bg-secondary">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="switchView('views/images.html')">
                            <span class="text-dark">Images</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="switchView('views/categories.html')">
                            <span class="text-dark">Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="switchView('views/imageGallery.html')">
                            <span class="text-dark">Image Gallery</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-10">
                <div class="container" id="container">

                </div>
            </div>
        </div>

        <script src="js/custom.js"></script>
    </body>
</html>
