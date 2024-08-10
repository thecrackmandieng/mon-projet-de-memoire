<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminSujetController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\PropositionController;
use App\Http\Controllers\User\UserSujetController;
use App\Http\Controllers\User\DepotController;
use App\Http\Controllers\SearchController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\ProfessorMiddleware;
use App\Http\Controllers\ConversationController;



use Illuminate\Support\Facades\Route;



//barre de recherche
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Routes pour la gestion du profil utilisateur
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user/profile', [ProfileController::class, 'edit'])->name('user.profile');


});

// Inclusion du fichier d'authentification
require __DIR__.'/auth.php';

// Routes pour les utilisateurs normaux
Route::middleware(['auth', UserMiddleware::class])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::post('/select', [UserSujetController::class, 'select'])->name('select');
    Route::get('/select', [UserSujetController::class, 'showForm'])->name('select.form');
    Route::get('/favorite', [UserFavoriteController::class, 'index'])->name('favorite');
    Route::get('/depot', [DepotController::class, 'index'])->name('depots.index');
    Route::post('/depot', [DepotController::class, 'store'])->name('depots.store');
    Route::get('/depot', [DepotController::class, 'index'])->name('depots');
    Route::resource('depots', DepotController::class);

// Si vous préférez définir des routes individuelles pour l'édition et la suppression, ajoutez-les comme suit :
    Route::get('depots/{id}/edit', [DepotController::class, 'edit'])->name('edit-depots');
    Route::delete('depots/{id}', [DepotController::class, 'destroy'])->name('delet-depots');

    Route::get('/sujet/form', [UserSujetController::class, 'showSujetForm'])->name('sujet.form');


});

// Routes pour les administrateurs
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    //Route::resource('product', AdminProductController::class);
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

//route des memoires
    Route::get('products', [AdminProductController::class, 'index'])->name('products.index');
    Route::get('products/create', [AdminProductController::class, 'create'])->name('products.create');
    Route::post('products', [AdminProductController::class, 'store'])->name('products.store');
    Route::get('editer-products/{id}', [AdminProductController::class, 'edit'])->name('edit-products');
    Route::get('updat-products/{id}', [AdminProductController::class, 'update'])->name('update-products');
    Route::get('delet-products/{id}', [AdminProductController::class, 'destroy'])->name('delet-products');
    Route::put('products/{id}', [AdminProductController::class, 'update'])->name('products.update');
    Route::delete('/depot/{id}', 'AdminProductController@destroyDepot');
    Route::get('/products/consulter', [AdminProductController::class, 'consulterMemoire'])->name('products.consulter')->middleware('role:professor');

// Route pour afficher le formulaire de téléchargement de fichiers
    Route::get('/upload-file', [AdminProductController::class, 'showFileUploadForm'])->name('upload-file-form');

// Route pour traiter le téléchargement de fichiers
    Route::post('/upload-file', [AdminProductController::class, 'uploadFile'])->name('upload-file');


//route des sujets
    Route::get('sujet', [AdminSujetController::class, 'index'])->name('sujet.index');
    Route::get('sujet/ajouter', [AdminSujetController::class, 'ajouter'])->name('sujet.ajouter');
    Route::post('sujet', [AdminSujetController::class, 'store'])->name('sujet.store');
    Route::get('editer-sujet/{id}', [AdminSujetController::class, 'editer'])->name('edit-sujet');
    Route::get('updat-sujet/{id}', [AdminSujetController::class, 'update'])->name('update-sujet');
    Route::delete('delet-sujet/{id}', [AdminSujetController::class, 'destroy'])->name('delet-sujet');
    Route::put('editer-sujet/{id}', [AdminSujetController::class, 'update'])->name('edit-sujet');
    Route::get('depots', [DepotController::class, 'index'])->name('depots.index');


    Route::get('admin/user/{id}/edit', 'App\Http\Controllers\Admin\AdminUserController@edit')->middleware('admin');

    Route::get('/admin/selections', [AdminSujetController::class, 'indexSelections'])->name('admin.sujet_selections');
    Route::get('/admin/user', [AdminUserController::class, 'index'])->name('admin.user');

    Route::delete('/admin/sujet-selections/{id}', [App\Http\Controllers\Admin\AdminSujetController::class, 'destroy'])->name('admin.sujet_selections.delete');
    Route::post('/admin/sujet-selections/{id}/confirm', [App\Http\Controllers\Admin\AdminSujetController::class, 'confirm'])->name('admin.sujet_selections.confirm');
    Route::post('/admin/sujet-selections/{id}/reject', [App\Http\Controllers\Admin\AdminSujetController::class, 'reject'])->name('admin.sujet_selections.reject');
    Route::post('/admin/selections/{id}/renvoyer', [AdminSujetController::class, 'renvoyer'])->name('admin.sujet_selections.renvoyer');

// Route pour supprimer un utilisateur
    Route::delete('/admin/user/{id}', [AdminUserController::class, 'destroy'])->name('admin.user.destroy');

// Route pour changer le usertype d'un utilisateur
    Route::get('admin/user/{id}/edit', [AdminUserController::class, 'edit'])->name('admin.user.edit');
    Route::get('admin/user/index', [AdminUserController::class, 'changeUsertype'])->name('admin.user.index');
    Route::post('/admin/user/{id}/change-usertype', [Admin\AdminUserController::class, 'changeUsertype'])->name('admin.user.changeUsertype');

    Route::get('/admin/sujet-valide', 'AdminSujetController@viewSujetValide')->name('admin.sujet_valide');

});



Route::middleware(['auth', ProfessorMiddleware::class])->group(function () {
    Route::get('/professor/index', [ProfessorController::class, 'index'])->name('professor.index');
    Route::get('/professor/show/{id}', [ProfessorController::class, 'show'])->name('professor.show');

//route pour les propositions

    Route::get('/propositions', [PropositionController::class, 'index'])->name('propositions.index');
    Route::get('/propositions/create', [PropositionController::class, 'create'])->name('propositions.create');
    Route::post('/propositions', [PropositionController::class, 'store'])->name('propositions.store');
    Route::post('/propositions/{id}/validate', [PropositionController::class, 'validateProposition'])->name('propositions.validate');
    Route::delete('/proposition/{id}', 'PropositionController@destroy')->name('delet-proposition');


});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/sujet_valide', [ConversationController::class, 'consulter'])->name('admin.sujet_valide');


    Route::get('/conversations', [ConversationController::class, 'index'])->name('conversations.index')->middleware('auth');
    Route::get('/conversations/create', [ConversationController::class, 'create'])->name('conversations.create');
    Route::post('/conversations', [ConversationController::class, 'store'])->name('conversations.store');
    Route::get('/conversations/{id}', [ConversationController::class, 'show'])->name('conversations.show');
    Route::post('/conversations/{id}/send', [ConversationController::class, 'sendMessage'])->name('conversations.sendMessage');
    Route::delete('/conversations/{id}', [ConversationController::class, 'destroy'])->name('conversations.destroy');
    Route::resource('conversations', ConversationController::class);
    Route::get('/products/consulter', [ProductController::class, 'consulter'])->name('products.consulter');
    Route::get('/sujet/validé', [App\Http\Controllers\SujetController::class, 'sujetValidé'])->name('sujet.validé');
    Route::get('/products/consulter', [ConversationController::class, 'consulter'])->name('products.consulter');
    Route::get('/sujet-valide', [App\Http\Controllers\ConversationController::class, 'sujetValide'])->name('products.sujet_valide');

});





// Route pour afficher l'erreur d'accès refusé
    Route::get('/error/access_denied', function () {
        return view('errors.access_denied');
    })->name('error.access_denied');
