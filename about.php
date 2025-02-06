<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'layouts/link.php'; ?>
    <title>FITSHOTEL - ABOUT US</title>
    <style>
        .pop:hover {
            border-top-color: rgb(59, 212, 151) !important;
            border-top-width: 4px !important;
            transform: scale(1.05);
            transition: all 0.5s;
        }
    </style>
</head>

<body>

    <?php include 'layouts/header.php'; ?>

    <div class="my-5 px-4">
        <h3 class="unica-one-regular fw-bold text-center">ABOUT US</h3>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-lg-6 mb-4 order-lg-1 order-2">
                <h3>Lorem ipsum dolor sit amet consectetur,</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Molestiae consectetur doloribus architecto aperiam sapiente,
                    ipsam dignissimos quas in ducimus nostrum ab iusto, delectus
                    repellat cupiditate? Nemo animi quas ullam quaerat.
                </p>
            </div>
            <div class="col-lg-5 order-lg-2 order-1 mb-4">
                <img src="assets/img/about/profile.png" class="w-100">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-4 px-4">
                <div class="border-top border-dark border-4 bg-white p-4 text-center pop">
                    <img src="https://img.icons8.com/external-kmg-design-outline-color-kmg-design/100/external-hotel-summer-kmg-design-outline-color-kmg-design.png"
                        width="70px">
                    <h4 class="unica-one-regular fw-bold">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 mb-4 px-4">
                <div class="border-top border-dark border-4 bg-white p-4 text-center pop">
                    <img src="https://img.icons8.com/color/96/staff.png" width="70px">
                    <h4 class="unica-one-regular fw-bold">100+ STAFFS</h4>
                </div>
            </div>
            <div class="col-lg-3 mb-4 px-4">
                <div class="border-top border-dark border-4 bg-white p-4 text-center pop">
                    <img src="https://img.icons8.com/color/96/male-female-user-group.png" width="70px">
                    <h4 class="unica-one-regular fw-bold">200+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 mb-4 px-4">
                <div class="border-top border-dark border-4 bg-white p-4 text-center pop">
                    <img src="https://img.icons8.com/external-smashingstocks-flat-smashing-stocks/100/external-Customer-Ratings-customers-reviews-smashingstocks-flat-smashing-stocks-4.png"
                        width="70px">
                    <h4 class="unica-one-regular fw-bold">100+ REVIEWS</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 unica-one-regular fw-bold text-center ">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="assets/img/about/team.png" class="w-100">
                    <h5 class="unica-one-regular fw-bold p-2">Team Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="assets/img/about/team.png" class="w-100">
                    <h5 class="unica-one-regular fw-bold p-2">Team Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="assets/img/about/team.png" class="w-100">
                    <h5 class="unica-one-regular fw-bold p-2">Team Name</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="assets/img/about/team.png" class="w-100">
                    <h5 class="unica-one-regular fw-bold p-2">Team Name</h5>
                </div>
                
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="assets/img/about/team.png" class="w-100">
                    <h5 class="unica-one-regular fw-bold p-2">Team Name</h5>
                </div>
                
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="assets/img/about/team.png" class="w-100">
                    <h5 class="unica-one-regular fw-bold p-2">Team Name</h5>
                </div>
                
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="assets/img/about/team.png" class="w-100">
                    <h5 class="unica-one-regular fw-bold p-2">Team Name</h5>
                </div>
                
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="assets/img/about/team.png" class="w-100">
                    <h5 class="unica-one-regular fw-bold p-2">Team Name</h5>
                </div>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>



    <?php include 'layouts/footer.php'; ?>



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,

                },
                1024: {
                    slidesPerView: 4,
                },
            },
        });
    </script>


</body>

</html>