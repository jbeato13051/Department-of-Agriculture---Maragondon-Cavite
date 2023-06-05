<?php 
   session_start();
   if (!isset($_SESSION['UserName']) && !isset($_SESSION['ID'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link rel="icon" type="image/png" href="dist/img/da-logo.svg.png"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-4">
                <div class="d-flex align-items-center justify-content-start">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                    <h2 class="mb-0">+(046) 412 0359</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="index.php" class="navbar-brand ms-lg-5">
                        <h1 class="m-0 display-10 text-primary"><span class="text-secondary">Department o</span>f Agriculture</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center justify-content-end">
                    <a class="btn btn-primary btn-square rounded-circle me-2" target="_blank" href="https://twitter.com/DA4CALABARZON"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" target="_blank" href="https://www.facebook.com/DA4CALABARZON"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" target="_blank" href="https://www.youtube.com/channel/UCBwNq9Cv90O_DFa6Ls7FeyA"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" target="_blank" href="https://www.instagram.com/da4_calabarzon/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.php" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary" style="font-size: 120%"><span class="text-white">Department o</span>f Agriculture</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <br>
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="privacy.php" class="nav-item nav-link">Privacy</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a>
                <button type="button" class="nav-item nav-link btn" data-toggle="modal" data-target="#loginmodal">Login</button>
                <?php  include 'login-modal.php'; ?>
                </a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="dist/img/da_office.jpg" alt="Image" style="max-height: 500px">
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6">
                    <div class="bg-primary d-flex flex-column justify-content-center p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">About</h3>
                        <p class="text-white">Dolor magna ipsum elitr sea erat elitr amet ipsum stet justo dolor, amet lorem diam no duo sed dolore amet diam</p>
                        <a class="text-white fw-bold" href="about.php">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-secondary d-flex flex-column justify-content-center p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Contact</h3>
                        <p class="text-white">Dolor magna ipsum elitr sea erat elitr amet ipsum stet justo dolor, amet lorem diam no duo sed dolore amet diam</p>
                        <a class="text-white fw-bold" href="contact.php">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-secondary fw-bold" href="#">2023</a>. All content is in the public domain unless otherwise stated. Department of Agriculture - Maragondon Cavite. <a class="text-secondary fw-bold">All Rights Reserved.</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/jquery.slimscroll.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="dist/js/init.js"></script>

    <script src="dist/js/custom.js"></script>

    <script src="dist/js/dropdown-bootstrap-extended.js"></script>
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>
    <script src="dist/js/validation-data.js"></script>
</body>
</html>
<?php }else{
	header("Location: dashboard.php");
} ?>