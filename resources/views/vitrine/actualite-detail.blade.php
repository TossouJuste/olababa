<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Détail actualité - {{ $news->titre }}</title>
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
            <h1 class="display-4 text-white animated slideInDown mb-4">Actualité details</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100 rounded" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 rounded" src="{{ asset('storage/' . $news->photo) }}" alt="Image de l'actualité" style="object-fit: cover; border-radius: 10px;">
                    </div>
                </div> 
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">  
                    <div class="bg-light border-bottom rounded p-4 mb-4">
                        <!-- Informations de l'événement -->
                        <div class="row mb-4">
                            <div class="col-lg-4 col-md-4 col-12 mb-3">
                                <p class="fs-5 fw-bold"><i class="fa fa-calendar-alt text-success me-2"></i> Date de l’événement</p>
                                <p class="ms-4 fs-6">{{ $news->date_realisation }}</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 mb-3">
                                <p class="fs-5 fw-bold"><i class="fa fa-map-marker-alt text-success me-2"></i> Lieu de l’événement</p>
                                <p class="ms-4 fs-6">{{ $news->lieu_realisation }}</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <p class="fs-5 fw-bold"><i class="fa fa-clock text-success me-2"></i> Heure de l’événement</p>
                                <p class="ms-4 fs-6">{{ $news->heure_realisation ?? '10:00 AM' }}</p> <!-- Ajustez l'heure si nécessaire -->
                            </div>
                        </div> 
                        <h4>{{ $news->titre }}</h4>
                        <span class="text-success">{{ $news->resume }}</span> <p></p>
                        <p class="text-dark mb-2">{!! $news->description !!}</p> 
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
</html>
