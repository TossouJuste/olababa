<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Détails de la mission - Orphelinat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.html" rel="icon">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    @include('vitrine.nav')

    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Orphelinat</h1>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100 rounded" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 rounded" src="img/image/img1.jpg" alt="Image de la mission Orphelinat" style="object-fit: cover; border-radius: 10px;">
                    </div>
                </div> 
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">  
                    <div class="bg-light border-bottom rounded p-4 mb-4">  
                        <h4>Aide Humanitaire et Soutien aux Orphelins</h4>
                        <p class="text-dark mb-2">Cette mission vise à fournir une assistance matérielle et morale aux enfants orphelins en situation de précarité.</p>
                        <span class="text-success">Fondateur : SOUMANOU Abibou</span>
                        <div class="mission-text mt-3">
                            <p><strong>L'aide humanitaire et le soutien aux orphelins</strong> sont des initiatives cruciales pour répondre aux besoins fondamentaux des enfants vulnérables qui ont perdu leurs parents. Ces actions visent à offrir un environnement sûr et favorable pour leur développement.</p>
                            <p><strong>Importance de l’assistance humanitaire :</strong> Les orphelins, souvent laissés à eux-mêmes, sont exposés à divers risques, notamment l'abandon, la malnutrition, et l'absence de soins médicaux. L'aide humanitaire leur fournit non seulement des ressources matérielles, comme des vêtements et de la nourriture, mais également un soutien émotionnel et psychologique essentiel à leur bien-être.</p>
                            <p><strong>Objectifs de la mission :</strong> Cette mission vise à créer des programmes d'éducation, de soins de santé et de formation professionnelle pour les orphelins. En leur offrant un accès à l'éducation, nous les aidons à acquérir les compétences nécessaires pour devenir des adultes autonomes et responsables.</p>
                            <p><strong>Impact sur la communauté :</strong> En soutenant les orphelins, nous contribuons également à renforcer la résilience des communautés. En investissant dans l’avenir des enfants, nous semons les graines d'une société plus juste et équitable, où chaque enfant a la chance de réaliser son potentiel.</p>
                        </div>

                    </div> 
                </div>
            </div>
        </div>
    </div>

    @include('vitrine.footer')

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
