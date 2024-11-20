<!DOCTYPE html>
<html lang="fr">


<!-- Mirrored from themewagon.github.io/chariteam/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2024 03:10:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Galerie- Ola Baba</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.html" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Saira:wght@500;600;700&amp;display=swap" rel="stylesheet">

     <!-- Icon Font Stylesheet -->
     <link href="css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('vitrine.nav')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Notre galerie</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


   <!-- galerie Start -->
 <!-- Galerie Start -->
<div class="container-xxl bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-success py-1 px-3 mb-3">Galerie</div>
            <h2 class="display-8 mb-5">Quelques images de nos événements</h2>
        </div>
        
        <!-- Grille d'images avec pagination -->
        <div class="row g-4 justify-content-center">
            @foreach($images as $image)
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="causes-item d-flex flex-column bg-white rounded-top overflow-hidden h-100">
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{ asset('storage/' . $image->photo) }}" alt="{{ $image->titre }}">
                            <div class="causes-overlay">
                                <div class="text-white">{{ $image->titre }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $images->links() }}
        </div>
    </div>
</div>
<!-- Galerie End -->

    <!-- galerie End -->


    <!-- Footer Start -->
    @include('vitrine.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from themewagon.github.io/chariteam/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2024 03:10:38 GMT -->
</html>
