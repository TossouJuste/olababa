<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt me-2"></i>Akpakpa, Cotonou, Bénin</small>
            <small class="ms-4"><i class="fa fa-envelope me-2"></i>contact@olababa.com</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <a class="text-white-50 ms-3" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="text-white-50 ms-3" href="#"><i class="fab fa-twitter"></i></a>
            <a class="text-white-50 ms-3" href="#"><i class="fab fa-linkedin-in"></i></a>
            <a class="text-white-50 ms-3" href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-success m-0">Ola<span class="text-white">Baba</span></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Accueil</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">Qui sommes-nous ?</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('mission', 'objectif', 'donate', 'team', 'temoignage') ? 'active' : '' }}" data-bs-toggle="dropdown">OLA BABA</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('/mission') }}" class="dropdown-item {{ Request::is('mission') ? 'active' : '' }}">Missions</a>
                        <a href="{{ url('/objectif') }}" class="dropdown-item {{ Request::is('objectif') ? 'active' : '' }}">Objectifs</a>
                        <a href="{{ url('/donate') }}" class="dropdown-item {{ Request::is('donate') ? 'active' : '' }}">Donation</a>
                        <a href="{{ url('/team') }}" class="dropdown-item {{ Request::is('team') ? 'active' : '' }}">Notre bureau</a>
                        <a href="{{ url('/temoignage') }}" class="dropdown-item {{ Request::is('temoignage') ? 'active' : '' }}">Témoignages</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('actualite', 'produit') ? 'active' : '' }}" data-bs-toggle="dropdown">Actualités</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('actualite') }}" class="dropdown-item {{ Request::is('actualite') ? 'active' : '' }}">Orphelinat</a>
                        <a href="{{ url('produit') }}" class="dropdown-item {{ Request::is('produit') ? 'active' : '' }}">Produits médicinaux</a>
                    </div>
                </div>
                <a href="{{ url('galerie') }}" class="nav-item nav-link {{ Request::is('galerie') ? 'active' : '' }}">Galerie</a>
                <a href="{{ url('contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </div>
            <div class="d-none d-lg-flex ms-2">
                <a class="btn btn-outline-success py-2 px-3" href="{{ url('contact') }}">
                    Faire un don
                    <div class="d-inline-flex btn-sm-square bg-white text-success rounded-circle ms-2">
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
