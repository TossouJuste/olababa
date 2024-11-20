<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Actualités orphelinat - Ola Baba</title>
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
            <h1 class="display-4 text-white animated slideInDown mb-4">Actualités orphelinat</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Actualité Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="display-8 mb-5">Actualités</h2>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($events as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="causes-item d-flex flex-column bg-white border-top border-5 border-success rounded-top overflow-hidden h-100">
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="{{ asset('storage/'.$item->photo) }}" alt="">
                                <div class="causes-overlay">
                                    <a class="btn btn-outline-success text-white" href="{{ route('vitrine.actualite-detail', $item->id) }}">
                                        Voir plus
                                        <div class="d-inline-flex btn-sm-square bg-success text-white rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-success text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                    <small>Le {{ \Carbon\Carbon::parse($item->date_realisation)->format('d/m/Y') }}</small>
                                    <small>à {{ $item->lieu_realisation }}</small>
                                </div>
                                <h5 class="mb-3">{{ $item->titre }}</h5>
                                <p>{!! \Str::limit($item->description, 100) !!}</p>
                                <a href="{{ route('vitrine.actualite-detail', $item->id) }}" class="bg-success"><div class="bg-success text-white p-2 pt-2">
                                    <div class="d-flex justify-content-between">
                                    </div>
                                    Voir plus
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="col-12 text-center">
                    {{ $events->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
    <!-- Actualité End -->

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
</html>
