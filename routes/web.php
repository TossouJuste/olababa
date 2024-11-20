<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VitrineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ContactController;

// vitrine
// Route::get('/', function () {return view('vitrine.index');});
Route::get('/about', function () {return view('vitrine.about');});
Route::get('/mission', function () {return view('vitrine.mission');});
Route::get('/objectif', function () {return view('vitrine.objectif');});
Route::get('/donate', function () {return view('vitrine.donate');});
Route::get('/team', function () {return view('vitrine.team');});
Route::get('/temoignage', function () {return view('vitrine.testimonial');});
//Route::get('/contact', function () {return view('vitrine.contact');});
Route::get('/mission-orphelinat-detail', function () {return view('vitrine.mission-orphelinat-detail');});
Route::get('/mission-puit-detail', function () {return view('vitrine.mission-puit-detail');});
Route::get('/mission-sante-detail', function () {return view('vitrine.mission-sante-detail');});
// Route::get('/galerie', function () {return view('vitrine.galerie');});
// Route::get('/actualite', function () {return view('vitrine.actualite');});
// Route::get('/produit', function () {return view('vitrine.produit');});

Route::get('/', [VitrineController::class, 'index'])->name('vitrine.index');
Route::get('/actualite-detail/{id}', [VitrineController::class, 'show'])->name('vitrine.actualite-detail');
Route::get('/galerie', [VitrineController::class, 'galerie'])->name('vitrine.galerie');
Route::get('/produit', [VitrineController::class, 'produits'])->name('vitrine.produit');
Route::get('/produit-detail/{id}', [VitrineController::class, 'showproduit'])->name('vitrine.produit-detail');
Route::get('/actualite', [VitrineController::class, 'actualites'])->name('vitrine.actualite');

Route::get('/contact', [VitrineController::class, 'contact'])->name('vitrine.contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/contact', [ContactController::class, 'contact'])->name('admin.contact');


// Login Routes
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Password Reset Routes
Route::get('/password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

// Email Verification Routes
Route::get('/email/verify', [App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/resend', [App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.resend');



// Route protégée pour l'accueil de l'utilisateur authentifié
Route::get('/admin', [HomeController::class, 'index'])->name('');

Route::middleware(['auth'])->group(function () {
  //  Route::get('/admin/contact', [ContactController::class, 'showContact'])->name('admin.contact');
  // Route::get('/admin/rendezvous', [RendezvousController::class, 'showRendezvous'])->name('admin.rendezvous');

    Route::get('admin/galleries', [GalleryController::class, 'index'])->name('admin.galleries.index');
    Route::get('admin/galleries/create', [GalleryController::class, 'create'])->name('admin.galleries.create');
    Route::post('admin/galleries', [GalleryController::class, 'store'])->name('admin.galleries.store');
    Route::delete('admin/galleries/{gallery}', [GalleryController::class, 'destroy'])->name('admin.galleries.destroy');

    Route::get('/admin/events', [EventController::class, 'index'])->name('admin.events.index');
    Route::get('/admin/events/create', [EventController::class, 'create'])->name('admin.events.create');
    Route::post('/admin/events', [EventController::class, 'store'])->name('admin.events.store');
    Route::get('/admin/events/{event}', [EventController::class, 'show'])->name('admin.events.show');
    Route::get('/admin/events/{event}/edit', [EventController::class, 'edit'])->name('admin.events.edit');
    Route::put('/admin/events/{event}', [EventController::class, 'update'])->name('admin.events.update');
    Route::delete('/admin/events/{event}', [EventController::class, 'destroy'])->name('admin.events.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('produits', ProduitController::class);
    });


});
