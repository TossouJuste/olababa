<!DOCTYPE html>
<html lang="fr">


<!-- Mirrored from themewagon.github.io/chariteam/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2024 03:10:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Accueil - Ola Baba</title>
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
        <div class="spinner-grow text-success" role="status"></div>
    </div>
    <!-- Spinner End -->

   @include('vitrine.nav')


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Ensemble, redonnons le sourire aux orphelins</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Votre générosité permet d’offrir un avenir meilleur à ceux qui en ont le plus besoin</p>
                                    <a class="btn btn-success py-2 px-3 animated slideInDown" href="/mission-orphelinat-detail">
                                        Voir plus
                                        <div class="d-inline-flex btn-sm-square bg-white text-success rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">La guérison par les plantes médicinales</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Découvrez nos remèdes naturels et la sagesse de la médecine traditionnelle pour un bien-être authentique</p>
                                    <a class="btn btn-success py-2 px-3 animated slideInDown" href="/mission-sante-detail">
                                        Voir plus
                                        <div class="d-inline-flex btn-sm-square bg-white text-success rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/image/img1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-secondary ps-2 pb-2" src="img/image/logo1.png" alt="" style="width: 50%; ">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-success py-1 px-3 mb-3">QUI SOMMES-NOUS ?</div>
                        <div class="bg-light border-bottom border-5 border-success rounded p-4 mb-4">
                            <h4>Fondée le 08 octobre 2023,</h4>
                            <p class="text-dark mb-2"> <span class="text-success">OlaBaba</span> est une ONG dédiée à la paix, au bien-être des orphelins, et à la promotion de la médecine traditionnelle.</p>
                            <span class="text-success">SOUMANOU Abibou, Fondateur</span>
                        </div>
                        <p class="mb-5">Notre mission est d'améliorer la qualité de vie des plus vulnérables, en préservant les connaissances traditionnelles et en soutenant ceux qui en ont le plus besoin.</p>
                        <a class="btn btn-success py-2 px-3 me-3" href="/about">
                            Voir plus
                            <div class="d-inline-flex btn-sm-square bg-white text-success rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Causes Start -->
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-success py-1 px-3 mb-3"></div>
                <h2 class="display-8 mb-5">Nos catégories d'intervention</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-success rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-success text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Orphelinat</small>
                            </div>
                            <h5 class="mb-3">Aide Humanitaire et Soutien aux Orphelins</h5>
                            <p>Fournir une assistance matérielle et morale aux enfants orphelins et aux familles en situation de précarité, par le biais de dons et de programmes de soutien communautaire.</p>
                            <div class="causes-progress bg-light p-3 pt-2">
                                <div class="d-flex justify-content-between">
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <span>90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/image/img1.jpg" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-success text-white" href="/mission-orphelinat-detail">
                                    Lire plus
                                    <div class="d-inline-flex btn-sm-square bg-success text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-success rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-success text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Eau pure</small>
                            </div>
                            <h5 class="mb-3">Construction de Puits pour l’Accès à l’Eau Potable</h5>
                            <p>Améliorer les conditions de vie en construisant des puits dans les zones reculées, afin de garantir un accès durable à l’eau potable pour les communautés.</p>
                            <div class="causes-progress bg-light p-3 pt-2">
                                <div class="d-flex justify-content-between">
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <span>90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/image/puit.jpeg" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-success text-white" href="/mission-puit-detail">
                                    Lire plus
                                    <div class="d-inline-flex btn-sm-square bg-success text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-success rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-success text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Bien être</small>
                            </div>
                            <h5 class="mb-3">Santé et Médecine Traditionnelle</h5>
                            <p>Promouvoir et préserver les savoirs de la médecine traditionnelle, offrant des soins naturels et sensibilisant aux bienfaits de la médecine ancestrale.</p>
                            <div class="causes-progress bg-light p-3 pt-2">
                                <div class="d-flex justify-content-between">
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <span>90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/image/tradi.jpg" alt="">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-success text-white" href="/mission-sante-detail">
                                    Lire plus
                                    <div class="d-inline-flex btn-sm-square bg-success text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Causes End -->



    <!-- objectif Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-success py-1 px-3 mb-3">Objectifs</div>
            <h2 class="display-8 mb-5">Nos objectifs</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Soutien aux Enfants et Personnes en Difficulté</h4>
                        <p class="mb-4">Soutenir les enfants orphelins et les personnes en situation de précarité par des dons et des actions humanitaires.</p>
                        <a class="btn btn-outline-success px-3" href="/mission-orphelinat-detail">
                            Voir plus
                            <div class="d-inline-flex btn-sm-square bg-success text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Assistance aux Groupes Vulnérables</h4>
                        <p class="mb-4">Porter assistance aux groupes vulnérables et favoriser leur inclusion sociale.</p>
                        <a class="btn btn-outline-success px-3" href="mission-orphelinat-detail">
                            Voir plus
                            <div class="d-inline-flex btn-sm-square bg-success text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Amélioration du Bien-être Communautaire</h4>
                        <p class="mb-4">Contribuer à l’amélioration de la santé et du cadre de vie des populations.</p>
                        <a class="btn btn-outline-success px-3" href="/mission-puit-detail">
                            Voir plus
                            <div class="d-inline-flex btn-sm-square bg-success text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Éducation à la Médecine Traditionnelle</h4>
                        <p class="mb-4">Sensibiliser les populations aux bienfaits de la médecine traditionnelle et transmettre ces savoirs par la formation.</p>
                        <a class="btn btn-outline-success px-3" href="/mission-sante-detail">
                            Voir plus
                            <div class="d-inline-flex btn-sm-square bg-success text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Préservation de la Biodiversité</h4>
                        <p class="mb-4">Promouvoir et préserver la biodiversité en valorisant les plantes médicinales.</p>
                        <a class="btn btn-outline-success px-3" href="/mission-sante-detail">
                            Voir plus
                            <div class="d-inline-flex btn-sm-square bg-success text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Protection et Entretien des Plantes Médicinales</h4>
                        <p class="mb-4">Encourager l’entretien des plantes médicinales et la préservation des ressources naturelles.</p>
                        <a class="btn btn-outline-success px-3" href="/mission-sante-detail">
                            Voir plus
                            <div class="d-inline-flex btn-sm-square bg-success text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- objectif End -->

     <!-- galerie Start -->
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block  text-success py-1 px-3 mb-3">GALERIE</div>
                <h2 class="display-8 mb-5">Nos dernières images</h2>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($latestImages as $images)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="causes-item d-flex flex-column bg-white rounded-top overflow-hidden h-100">
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="{{ asset('storage/' . $images->photo) }}" alt="{{ $images->titre }}">
                                <div class="causes-overlay">
                                    <div class="text-white">{{ $images->titre }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- galerie End -->

  <!-- Actualité Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="display-8 mb-5">Actualités</h2>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($latestNews as $news)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-success rounded-top overflow-hidden h-100">
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{ asset('storage/' . $news->photo) }}" alt="{{ $news->titre }}">
                            <div class="causes-overlay">
                                <a class="btn btn-outline-success text-white" href="{{ route('vitrine.actualite-detail', $news->id) }}">
                                    Lire plus
                                    <div class="d-inline-flex btn-sm-square bg-success text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-success text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Le {{ $news->date_realisation->format('d/m/Y') }}</small>
                                <small>à {{ $news->lieu_realisation ?? 'Lieu non spécifié' }}</small>
                            </div>
                            <h5 class="mb-3">{{ $news->titre }}</h5>
                            <p>{!! \Str::limit($news->description, 100) !!}</p>
                            <a href="{{ route('vitrine.actualite-detail', $news->id) }}" class="bg-success">
                                <div class="bg-success text-white p-2 pt-2">
                                    <div class="d-flex justify-content-between">
                                        Voir plus
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Actualité End -->


    <!-- Donate Start -->
    <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-inline-block  bg-secondary text-primary py-1 px-3 mb-3 align-items-center">Faites un Don Maintenant</div>
                    <h1 class="display-6 text-white mb-5">Merci pour tout vos soutiens</h1>
                    <p class="text-white-50 mb-0">Grâce à vous, chaque contribution transforme des vies. Ensemble, bâtissons un avenir meilleur, un geste à la fois.</p>
                </div>
                  </div>
        </div>
    </div>
    <!-- Donate End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-success py-1 px-3 mb-3">Membres de l'équipe</div>
                <h2 class="display-8 mb-5">Les membres du bureau de l'organisation</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/image1/olababa.jpeg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>SOUMANOU Abibou</h5>
                            <p class="text-success">Président</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-success py-1 px-3 mb-3">Témoignages</div>
                <h2 class="display-8 mb-5">Les enfants témoignent de notre aide, les adultes des bienfaits de nos produits</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>OlaBaba m'a donné des vêtements, des chaussures et des fournitures scolaires. Grâce à leur soutien, je peux enfin aller à l'école et apprendre avec mes camarades. Je me sens heureux et soutenu.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>L'aide d'OlaBaba a été essentielle pour ma famille. Ils nous ont fourni de la nourriture, des vêtements et des soins médicaux. Sans eux, je ne sais pas comment nous aurions pu surmonter cette période difficile.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>J'ai utilisé les tisanes naturelles d'OlaBaba pour traiter mes maux de tête et mes douleurs. Je me sens beaucoup mieux maintenant. Je suis reconnaissant envers l'ONG pour son engagement à promouvoir la santé à travers des méthodes traditionnelles.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Les formations d'OlaBaba sur la médecine traditionnelle et la biodiversité sont d'une grande valeur pour nos élèves. Elles les aident à comprendre l'importance de notre patrimoine naturel et à respecter les plantes médicinales.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>OlaBaba valorise nos plantes médicinales et nous enseigne comment les utiliser correctement pour guérir divers maux. Grâce à leurs conseils, j'ai pu améliorer ma santé et celle de ma famille.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Travailler avec OlaBaba est une expérience incroyable. Chaque jour, je vois l'impact positif que nous avons sur notre communauté. C'est gratifiant de savoir que nous aidons des personnes dans le besoin.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

   @include('vitrine.footer')



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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


<!-- Mirrored from themewagon.github.io/chariteam/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2024 03:10:36 GMT -->
</html>
