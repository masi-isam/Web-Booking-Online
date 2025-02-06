<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'layouts/link.php'; ?>
    <title>FITSHOTEL - ROOMS</title>
    <style>
        .btn-custom {
            background-color: var(--acsentColor);
        }
    </style>
</head>

<body>

    <?php include 'layouts/header.php'; ?>

    <div class="my-5 px-4">
        <h3 class="unica-one-regular fw-bold text-center">ROOMS</h3>
        <div class="h-line bg-dark"></div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 px-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <a class="navbar-brand fw-bold" href="#">FILTERS</a>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterRoom" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch" id="filterRoom">

                            <div class="border bg-light p-3 rounded mb-3 mt-3">
                                <h5 class="mb-3" style="font-size: 18px;">Check Avability</h5>
                                <label class="form-label">Check In</label>
                                <input type="date" class="form-control">

                                <label class="form-label">Check Out</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none mb-3">
                                    <label class="form-check-label" for="f1">Facilities One</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none mb-3">
                                    <label class="form-check-label" for="f2">Facilities Two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none mb-3">
                                    <label class="form-check-label" for="f3">Facilities Three</label>
                                </div>
                            </div>

                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                                <div class="d-flex">
                                    <div class="mb-2 me-2">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Children</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </nav>
            </div>


            <div class="col-lg-9 col-md-12 mt-lg-0 mt-4 px-4">
                <div class="card mb-3 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <img src="assets/img/rooms/simple.png" class="img-fluid w-100 rounded mb-lg-0 mb-4">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="">Simple Bed Room</h5>
                            <div class="features mb-2">
                                <h6 class="">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                            </div>
                            <div class="facilities mb-2">
                                <h6 class="">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class="bi bi-moisture"></i> Water Heater
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class="bi bi-fan"></i> Televison
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class="bi bi-fan"></i> AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class="bi bi-wifi"></i> Wifi
                                </span>
                            </div>
                            <div class="rating mb-3">
                                <h6>Rating</h6>
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <h6 class="mb-3 unica-one-regular fw-bold text-center">Rp 350.000</h6>
                            <a href="#" class="btn btn-sm btn-success w-100 mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark w-100 mb-2">More Details</a>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <img src="assets/img/rooms/medium.png" class="img-fluid w-100 rounded mb-lg-0 mb-4">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="">Simple Bed Room</h5>
                            <div class="features mb-2">
                                <h6 class="">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                            </div>
                            <div class="facilities mb-2">
                                <h6 class="">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class="bi bi-moisture"></i> Water Heater
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class="bi bi-fan"></i> Televison
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class="bi bi-fan"></i> AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class="bi bi-wifi"></i> Wifi
                                </span>
                            </div>
                            <div class="rating mb-3">
                                <h6>Rating</h6>
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <h6 class="mb-3 unica-one-regular fw-bold text-center">Rp 350.000</h6>
                            <a href="#" class="btn btn-sm btn-success w-100 mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark w-100 mb-2">More Details</a>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                            <img src="assets/img/rooms/simple.png" class="img-fluid w-100 rounded mb-lg-0 mb-4">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="">Simple Bed Room</h5>
                            <div class="features mb-2">
                                <h6 class="">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bathroom
                                </span>
                            </div>
                            <div class="facilities mb-2">
                                <h6 class="">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class="bi bi-moisture"></i> Water Heater
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class="bi bi-fan"></i> Televison
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class="bi bi-fan"></i> AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    <i class="bi bi-wifi"></i> Wifi
                                </span>
                            </div>
                            <div class="rating mb-3">
                                <h6>Rating</h6>
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <h6 class="mb-3 unica-one-regular fw-bold text-center">Rp 350.000</h6>
                            <a href="#" class="btn btn-sm btn-success w-100 mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark w-100 mb-2">More Details</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>





    <?php include 'layouts/footer.php'; ?>



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</body>

</html>