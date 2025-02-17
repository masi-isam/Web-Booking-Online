<?php
include 'layouts/essentials.php';
include 'layouts/config.php';
adminLogin();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'layouts/link.php' ?>
    <title>ADMIN - DASHBOARD</title>
</head>

<body>

    <div class="container-fluid bg-dark text-white p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="m-0">FITS HOTEL ADMIN</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>

    <div class="col-lg-2 border-top border-3 border-secondary bg-dark" id="sidebar-admin">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="navbar-brand fw-bold">FILTERS</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#burgerAdmin" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-3" id="burgerAdmin">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mt-2" href="#">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mt-2" href="#">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mt-2" href="#">Settings</a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
    </div>






    <?php include 'layouts/scripts.php' ?>
</body>

</html>