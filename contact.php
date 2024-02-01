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

        <!-- Spinner Start -->

        <!-- Spinner End -->



        <!-- Header Start -->

        <?php include('header.php')?>

        <!-- Header End -->





        <!-- Page Header Start -->

        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">

            <div class="container-fluid page-header-inner py-5">

                <div class="container text-center pb-5">

                    <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb justify-content-center text-uppercase">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <li class="breadcrumb-item"><a href="#">Pages</a></li>

                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>

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

                                        <input type="text" class="form-control datetimepicker-input"

                                            placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />

                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="date" id="date2" data-target-input="nearest">

                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker"/>

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





        <!-- Contact Start -->

        <div class="container-xxl py-5">

            <div class="container">

                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

                    <h6 class="section-title text-center text-primary text-uppercase">Contact Us</h6>

                    <h1 class="mb-5"><span class="text-primary text-uppercase">Contact</span> For Any Query</h1>

                </div>

                <div class="row g-4">

                    <div class="col-12">

                        <div class="row gy-4">

                            <div class="col-md-4">

                                <h6 class="section-title text-start text-primary text-uppercase">Booking</h6>

                                <p><i class="fa fa-envelope-open text-primary me-2"></i>book@example.com</p>

                            </div>

                            <div class="col-md-4">

                                <h6 class="section-title text-start text-primary text-uppercase">General</h6>

                                <p><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>

                            </div>

                            <div class="col-md-4">

                                <h6 class="section-title text-start text-primary text-uppercase">Technical</h6>

                                <p><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">

                        <iframe class="position-relative rounded w-100 h-100"

                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"

                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"

                            tabindex="0"></iframe>

                    </div>

                    <div class="col-md-6">

                        <div class="wow fadeInUp" data-wow-delay="0.2s">

                            <form>

                                <div class="row g-3">

                                    <div class="col-md-6">

                                        <div class="form-floating">

                                            <input type="text" class="form-control" id="name" placeholder="Your Name">

                                            <label for="name">Your Name</label>

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-floating">

                                            <input type="email" class="form-control" id="email" placeholder="Your Email">

                                            <label for="email">Your Email</label>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="form-floating">

                                            <input type="text" class="form-control" id="subject" placeholder="Subject">

                                            <label for="subject">Subject</label>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <div class="form-floating">

                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>

                                            <label for="message">Message</label>

                                        </div>

                                    </div>

                                    <div class="col-12">

                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Contact End -->





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

        <?php include('footer.php')?>

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