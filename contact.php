<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'layouts/link.php'; ?>
    <title>FITSHOTEL - CONTACT</title>
    <style>
        .btn-custom {
            background-color: var(--acsentColor);
        }
    </style>
</head>

<body>

    <?php include 'layouts/header.php'; ?>

    <div class="my-5 px-4">
        <h3 class="unica-one-regular fw-bold text-center">OUR CONTACT</h3>
        <div class="h-line bg-dark"></div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 px-4">
                <div class="mb-4 p-4 bg-white shadow rounded">

                    <div class="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9705862894393!2d106.7889540748351!3d-6.894121693104989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6837a546672971%3A0x11d60e837815bf42!2sHotel%20Sekarwangi!5e0!3m2!1sid!2sid!4v1738564901199!5m2!1sid!2sid"
                            class="w-100 bg-white rounded" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <h5 class="mt-4">Address</h5>
                    <a class="text-decoration-none fw-bold d-inline-block text-dark" href="https://maps.app.goo.gl/tzd5AUrb7GKn5dfV8" target="_blank">
                        <i class="bi bi-geo-alt-fill"></i> Hotel Sekarwangi
                    </a>
                    <p>Jl. Siliwangi No.86, Cibadak, Kec. Cibadak, Kabupaten Sukabumi,
                        Jawa Barat 43351</p>


                    <h5 class="mt-4 m-0">Call US</h5>
                    <a href="" class="text-decoration-none text-dark d-inline-block mt-2">
                        <i class="bi bi-telephone-fill"></i> +62 813 8418 0251
                    </a>
                    <br>
                    <a href="" class="text-decoration-none text-dark d-inline-block mt-2">
                        <i class="bi bi-whatsapp"></i> +62 813 8418 0251
                    </a>

                    <h5 class="mt-4">Email</h5>
                    <a class="text-decoration-none text-dark"
                        href="mailto:safjul28@gmail.com"><i class="bi bi-envelope-arrow-up-fill"></i> ask.safjul28@gmail.com
                    </a>

                    <h5 class="mt-4 m-0">Follow Us on Our Sosmed</h5>
                    <a href="" class="text-decoration-none text-dark d-inline-block mt-2 me-3 fs-6">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="" class="text-decoration-none text-dark  d-inline-block mt-2 me-3 fs-6">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="" class="text-decoration-none text-dark d-inline-block mt-2 me-3 fs-6">
                        <i class="bi bi-facebook"></i>
                    </a>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 px-4 mb-4">
                <div class="bg-white p-4 shadow rounded">

                    <form action="">
                        <h4 class="mb-3">Send a Massage</h4>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight:500;">Name</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight:500;">Email address</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight:500;">Massage</label>
                            <textarea class="form-control shadow-none" style="resize: none" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight:500;">Email address</label>
                            <input type="email" class="form-control">
                        </div>
                        <button type="button" class="btn btn-custom text-light ms-auto">SEND</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <?php include 'layouts/footer.php'; ?>



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</body>

</html>