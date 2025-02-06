<!-- Navbar -->
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow mb-3">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold unica-one-judul" href="#">FITS HOTEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="room.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Informations
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="about.php">About Us</a></li>
                        <li><a class="dropdown-item" href="about.php"><i class="bi bi-percent"></i> Promo</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
                    </ul>
                </li>
            </ul>
            <button class="btn btn-outline-none" data-bs-toggle="modal" data-bs-target="#loginModal" type="submit"><i class="bi bi-person-fill"></i> Log In</button>
            <button class="btn btn-outline-none" type="submit" data-bs-toggle="modal" data-bs-target="#registerModal">Daftar</button>
        </div>
    </div>
</nav>


<!-- Modal Login -->
<div class="modal" id="loginModal" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-person-fill"></i>User akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="loginInputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="loginInputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-primary ms-auto">Log In</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Register -->
<div class="modal" id="registerModal" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-person-fill"></i>User Registrasion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                    Note: Silahkan isi data diri anda dengan benar
                </span>
                <form action="">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="registerInputUsername" class="form-label">Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="registerInputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="registreInputPhoneNum" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" id="registreInputPhoneNum">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="formFilePicture" class="form-label">Picture</label>
                                <input class="form-control" type="file" id="formFilePicture">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="registerInputAddress" class="form-label">Address</label>
                                <textarea class="form-control shadow-none" id="registerInputAddress" rows="1"></textarea>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="registerInputPinCode" class="form-label">Pin Code</label>
                                <input type="number" class="form-control" id="registerInputPinCode">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="registerInputDoB" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="registerInputDoB">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="registerInputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="registerInputPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-primary ms-auto">Regis</button>
            </div>
        </div>
    </div>
</div>