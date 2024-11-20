<!DOCTYPE html>
<html lang="fr">


<!-- Mirrored from themewagon.github.io/chariteam/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2024 03:10:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Détail produit - ola baba</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.html') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Saira:wght@500;600;700&amp;display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
            <h1 class="display-4 text-white animated slideInDown mb-4">Détails produit</h1>
            <nav aria-label="breadcrumb animated slideInDown"> 
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


 <!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 pt-5 pe-5" src="{{ asset('storage/' . $produit->photo) }}" alt="{{ $produit->nom }}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill bg-secondary text-success py-1 px-3 mb-3">Détails produit</div>
                    <div class="bg-light border-bottom border-5 border-success rounded p-4 mb-4">
                        <h4>{{ $produit->nom }}</h4>
                        <p class="text-dark mb-2"><span class="text-success">Prix:</span> {{ $produit->prix }} FCFA</p>
                        <p class="text-dark mb-2"><span class="text-success">Ingrédients:</span> {{ $produit->ingredients }}</p>
                        <p class="text-dark mb-2"><span class="text-success">Mode d'utilisation:</span> {{ $produit->mode_utilisation }}</p> 
                        <p class="text-dark mb-2"><span class="text-success">Public cible:</span> {{ $produit->public_cible }}</p>
                        <p class="text-dark mb-2"><span class="text-success">Utilité:</span> {{ $produit->utilite }}</p>
                        <p class="text-dark mb-2"><span class="text-success">Description:</span> {!! $produit->description !!}</p>
                        <p>Contact : +229 97 09 07 33 </p>
                    </div>
                    <p class="mb-5">
                        Ce produit est formulé pour offrir des solutions naturelles et saines, inspirées des savoirs de la médecine traditionnelle. Il est destiné à répondre aux besoins de bien-être et à contribuer à une meilleure qualité de vie.
                    </p>
                    <p>
                        Utilisez ce produit en suivant les instructions pour bénéficier pleinement de ses propriétés. La fabrication respecte les standards de qualité pour garantir un usage sécuritaire et efficace.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->




    <!-- Footer Start -->
    @include('vitrine.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>


<!-- Mirrored from themewagon.github.io/chariteam/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2024 03:10:38 GMT -->
</html>