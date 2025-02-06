<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'layouts/link.php'; ?>
    <style>
        .custom-container-check-avability {
            margin-top: -60px;
            z-index: 2;
            position: relative;

        }
    </style>
    <title>FITSHOTEL - HOME</title>
</head>

<body>

    <?php include 'layouts/header.php'; ?>




    <!-- Swiper -->
    <div class="container-fluid">
        <!-- Slider main container -->
        <div class="swiper swiperNav">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="assets/img/slider/slider3.jpg" class="w-100" height="600">
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/slider/slider4.jpg" class="w-100" height="600">
                </div>
            </div>
        </div>
    </div>


    <!-- Check Avability -->
    <div class="container custom-container-check-avability">
        <div class="row">
            <div class="col-lg-12 shadow p-4 bg-white rounded">
                <h5>Check Avability</h5>
                <form action="">
                    <div class="row mt-4 align-items-end">
                        <form action="">
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Check In</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Check Out</label>
                                <input type="date" class="form-control" id="registerInputDoB">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label">Adults</label>
                                <select class="form-select shadow-none" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-2 mb-3">
                                <label class="form-label">Children</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-1 mb-lg-3">
                                <button class="btn btn-outline-dark mt-3 me-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Our Rooms -->
    <h5 id="ourrooms" class="unica-one-judul text-center fw-bold mt-4 pt-4 mb-4">OUR ROOMS</h5>

    <div class="container container-room">
        <div class="row">

            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 400px; margin: auto;">
                    <img src="assets/img/rooms/simple.png" class="w-100 card-img-top" alt="...">
                    <div class="card-body">

                        <h5 class="fw-bold">Simple Room</h5>
                        <h6 class="mb-3">Rp 350.000</h6>
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
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm btn-success">Book Now</a>
                            <a href="#" class="btn btn-sm btn-info text-white">More Details</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 400px; margin: auto;">
                    <img src="assets/img/rooms/medium.png" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h5 class="fw-bold">Simple Room</h5>
                        <h6 class="mb-3">Rp 350.000</h6>
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
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm btn-success">Book Now</a>
                            <a href="#" class="btn btn-sm btn-info text-white">More Details</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 my-3">

                <div class="card border-0 shadow" style="max-width: 400px; margin: auto;">
                    <img src="assets/img/rooms/simple.png" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h5 class="fw-bold">Simple Room</h5>
                        <h6 class="mb-3">Rp 350.000</h6>
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
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm btn-success">Book Now</a>
                            <a href="#" class="btn btn-sm btn-info text-white">More Details</a>
                        </div>
                    </div>
                </div>

            </div>



        </div>

        <div class="col-lg-12 text-center mt-4">
            <a href="#" class="btn btn-sm btn-outline-dark">More >>></a>
        </div>
    </div>

    <!-- OUR FACILITIES -->
    <H5 id="ourfacilities" class="unica-one-judul text-center fw-bold mt-5 pt-4 mb-4">OUR FACILITIES</H5>

    <div class="container">
        <div class="row justify-content-evenly">
            <div class="col-lg-2 text-center bg-white shadow py-4 my-3">
                <img class="align-items-center" width="100" height="100" src="https://img.icons8.com/ios/100/swimming-pool.png" />
                <h5 class="mt-4">Swimming Pool</h5>
            </div>
            <div class="col-lg-2 text-center bg-white shadow py-4 my-3">
                <img class="align-items-center" width="100" height="100" src="https://img.icons8.com/ios-filled/100/rfid-sensor.png" />
                <h5 class="mt-4">Smart Lock Door</h5>
            </div>
            <div class="col-lg-2 text-center bg-white shadow py-4 my-3">
                <img class="align-items-center" width="100" height="100" src="https://img.icons8.com/pastel-glyph/100/breakfast--v1.png" />
                <h5 class="mt-4">Breakfast</h5>
            </div>
            <div class="col-lg-2 text-center bg-white shadow py-4 my-3">
                <img class="align-items-center" width="100" height="100" src="https://img.icons8.com/ios/100/swimming-pool.png" />
                <h5 class="mt-4">Swimming Pool</h5>
            </div>
            <div class="col-lg-2 text-center bg-white shadow py-4 my-3">
                <img class="align-items-center" width="100" height="100" src="https://img.icons8.com/ios/100/swimming-pool.png" />
                <h5 class="mt-4">Swimming Pool</h5>
            </div>
        </div>

        <div class="col-lg-12 text-center mt-4">
            <a href="facilities.php" class="btn btn-sm btn-outline-dark">More >>></a>
        </div>
    </div>


    <!-- Ratings -->
    <h5 id="ourtestimonials" class="unica-one-judul text-center fw-bold mt-5 pt-4 mb-4">OUR TESTIMONIALS</h5>
    <div class="container">
        <!-- Swiper -->
        <div class="swiper Swiper-testimonials">
            <div class="swiper-wrapper">

                <div class="swiper-slide p-4 bg-white">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="https://img.icons8.com/ios/100/swimming-pool.png" width="30px">
                        <h6 class="m-0 ms-2">Users Name</h6>
                    </div>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure vitae,
                        tempore neque nam beatae aliquid nisi architecto. Veniam vel aperiam
                        at! Quaerat magni omnis ab hic quis quasi placeat fugiat.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide p-4 bg-white">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="https://img.icons8.com/ios/100/swimming-pool.png" width="30px">
                        <h6 class="m-0 ms-2">Users Name</h6>
                    </div>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure vitae,
                        tempore neque nam beatae aliquid nisi architecto. Veniam vel aperiam
                        at! Quaerat magni omnis ab hic quis quasi placeat fugiat.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide p-4 bg-white">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="https://img.icons8.com/ios/100/swimming-pool.png" width="30px">
                        <h6 class="m-0 ms-2">Users Name</h6>
                    </div>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure vitae,

                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide p-4 bg-white">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="https://img.icons8.com/ios/100/swimming-pool.png" width="30px">
                        <h6 class="m-0 ms-2">Users Name</h6>
                    </div>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure vitae,

                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <!-- Reach Us -->

    <H5 id="reachus" class="unica-one-judul text-center fw-bold mt-5 pt-4 mb-4">REACH US</H5>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9705862894393!2d106.7889540748351!3d-6.894121693104989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6837a546672971%3A0x11d60e837815bf42!2sHotel%20Sekarwangi!5e0!3m2!1sid!2sid!4v1738564901199!5m2!1sid!2sid"
                    class="w-100 p-4 bg-white rounded" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5 class="fw-bold">CONTACT US</h5>
                    <a href="" class="text-decoration-none text-dark fw-bold d-inline-block mt-2">
                        <i class="bi bi-telephone-fill"></i> +62 813 8418 0251
                    </a>
                    <br>
                    <a href="" class="text-decoration-none text-dark fw-bold d-inline-block mt-2">
                        <i class="bi bi-whatsapp"></i> +62 813 8418 0251
                    </a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5 class="fw-bold">FOLLOW US</h5>
                        <a href="" class="text-decoration-none text-dark fw-bold d-block mt-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-instagram"></i> Instagram
                            </span>
                        </a>
                        <a href="" class="text-decoration-none text-dark fw-bold d-block mt-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-twitter-x"></i> Twitter
                            </span>
                        </a>
                        <a href="" class="text-decoration-none text-dark fw-bold d-block mt-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-facebook"></i> Facebook
                            </span>
                        </a>

                </div>
            </div>
        </div>
    </div>


    <?php include 'layouts/footer.php'; ?>



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>





    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiperNav', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

        });

        var swiper = new Swiper(".Swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,

                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>

</body>

</html>