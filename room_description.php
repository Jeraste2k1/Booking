<?php
require("Database.php");
$db = Database::connect();
$id = $_GET["id"];
$data = $db->prepare("SELECT * from chambre where idchambre=?");

$data->execute(array($id));
$data = $data->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <title>Hotelier - Hotel HTML Template</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="keywords">

    <meta content="" name="description">



    <!-- Favicon -->

    <link href="img/favicon.ico" rel="icon">



    <!-- Google Web Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">



    <!-- Icon Font Stylesheet -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">



    <!-- Libraries Stylesheet -->

    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />



    <!-- Customized Bootstrap Stylesheet -->

    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Template Stylesheet -->

    <link href="css/style.css" rel="stylesheet">

</head>



<body>

    <div class="container-xxl bg-white p-0">



        <!-- Header Start -->

        <?php include('header.php') ?>

        <!-- Header End -->





        <!-- Page Header Start -->

        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">

            <div class="container-fluid page-header-inner py-5">

                <div class="container text-center pb-5">

                    <h1 class="display-3 text-white mb-3 animated slideInDown">Details</h1>

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb justify-content-center text-uppercase">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <li class="breadcrumb-item"><a href="#">Pages</a></li>

                            <li class="breadcrumb-item text-white active" aria-current="page">Details</li>

                        </ol>

                    </nav>

                </div>

            </div>

        </div>

        <!-- Page Header End -->





        <!-- Booking Start -->

        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">

            <div class="container">

                <div class="bg-white shadow" style="padding: 35px;">

                    <div class="row g-2">

                        <div class="col-md-10">

                            <div class="row g-2">

                                <div class="col-md-3">

                                    <div class="date" id="date1" data-target-input="nearest">

                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />

                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="date" id="date2" data-target-input="nearest">

                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker" />

                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <select class="form-select">

                                        <option selected>Adult</option>

                                        <option value="1">Adult 1</option>

                                        <option value="2">Adult 2</option>

                                        <option value="3">Adult 3</option>

                                    </select>

                                </div>

                                <div class="col-md-3">

                                    <select class="form-select">

                                        <option selected>Child</option>

                                        <option value="1">Child 1</option>

                                        <option value="2">Child 2</option>

                                        <option value="3">Child 3</option>

                                    </select>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-2">

                            <button class="btn btn-primary w-100">Submit</button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Booking End -->





        <!-- Service Start -->

        <div class="container-xxl py-5">

            <div class="container">

                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

                    <h6 class="section-title text-center text-primary text-uppercase">Détails</h6>

                    <h1 class="mb-5">Détails <span class="text-primary text-uppercase">chambres</span></h1>

                </div>

                <div class="row g-4">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">

                        <div class="room-item shadow rounded overflow-hidden w-full">

                            <div class="position-relative">

                                <img class="img-fluid" src="img/room-1.jpg" alt="" >

                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"><?= $data["prixbynight"] ?>F/Night</small>

                            </div>

                            <div class="p-4 mt-2">

                                <div class="d-flex justify-content-between mb-3">

                                    <h5 class="mb-0"><?= $data["typechambre"] ?></h5>

                                    <div class="ps-2">

                                        <small class="fa fa-star text-primary"></small>

                                        <small class="fa fa-star text-primary"></small>

                                        <small class="fa fa-star text-primary"></small>

                                        <small class="fa fa-star text-primary"></small>

                                        <small class="fa fa-star text-primary"></small>

                                    </div>

                                </div>

                                <div class="d-flex mb-3">


                                    <small><i class="fa fa-wifi text-primary me-2"></i>Numéro de chambre : <?= $data["numchambre"] ?></small>

                                </div>

                                <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>


                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

        <!-- Service End -->





        <!-- Testimonial Start -->

        <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">

            <div class="container">

                <div class="owl-carousel testimonial-carousel py-5">

                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">

                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>

                        <div class="d-flex align-items-center">

                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">

                            <div class="ps-3">

                                <h6 class="fw-bold mb-1">Client Name</h6>

                                <small>Profession</small>

                            </div>

                        </div>

                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>

                    </div>

                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">

                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>

                        <div class="d-flex align-items-center">

                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">

                            <div class="ps-3">

                                <h6 class="fw-bold mb-1">Client Name</h6>

                                <small>Profession</small>

                            </div>

                        </div>

                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>

                    </div>

                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">

                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>

                        <div class="d-flex align-items-center">

                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">

                            <div class="ps-3">

                                <h6 class="fw-bold mb-1">Client Name</h6>

                                <small>Profession</small>

                            </div>

                        </div>

                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>

                    </div>

                </div>

            </div>

        </div>

        <!-- Testimonial End -->





        <!-- Newsletter Start -->

        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">

            <div class="row justify-content-center">

                <div class="col-lg-10 border rounded p-1">

                    <div class="border rounded text-center p-1">

                        <div class="bg-white rounded text-center p-5">

                            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>

                            <div class="position-relative mx-auto" style="max-width: 400px;">

                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">

                                <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Newsletter Start -->





        <!-- Footer Start -->

        <?php include('footer.php') ?>

        <!-- Footer End -->





        <!-- Back to Top -->

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    </div>



    <!-- JavaScript Libraries -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="lib/wow/wow.min.js"></script>

    <script src="lib/easing/easing.min.js"></script>

    <script src="lib/waypoints/waypoints.min.js"></script>

    <script src="lib/counterup/counterup.min.js"></script>

    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="lib/tempusdominus/js/moment.min.js"></script>

    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>

    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>



    <!-- Template Javascript -->

    <script src="js/main.js"></script>

</body>



</html>