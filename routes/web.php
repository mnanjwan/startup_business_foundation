<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PublicationCategoryController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SupportController;
use App\Models\PublicationCategory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/about/who-we-are', [PagesController::class, 'whoWeAre'])->name('about.who-we-are');
Route::get('/about/who-we-work-with', [PagesController::class, 'whoWeWorkWith'])->name('about.who-we-work-with');
Route::get('/about/what-we-do', [PagesController::class, 'whatWeDo'])->name('about.what-we-do');
Route::get('/about/message-from-the-founder', [PagesController::class, 'founderMessage'])->name('about.founder-message');

// programmes
Route::get('/program/investment-opportunities-exposition', [PagesController::class, 'investmentOpportunitiesExposition'])->name('program.investment-opportunities-exposition');
Route::get('/program/rural-micro-enterprise-initiative', [PagesController::class, 'ruralMicroEnterpriseInitiative'])->name('program.rural-micro-enterprise-initiative');
Route::get('/program/enterprise-industrial-incubation-centres', [PagesController::class, 'enterpriseIncubationCentres'])->name('program.enterprise-industrial-incubation-centres');
Route::get('/program/meritocrats-startup', [PagesController::class, 'meritocratsStartup'])->name('program.meritocrats-startup');
Route::get('/program/industrial-support-services', [PagesController::class, 'industrialSupportServices'])->name('program.industrial-support-services');

// Projects
Route::get('/projects', [PagesController::class, 'projects'])->name('projects');

// media
Route::get('/media/publications', [PagesController::class, 'publications'])->name('media.publications');
Route::get('/media/publications-filter', [PagesController::class, 'publicationsFilter'])->name('media.publications-filter');


Route::get('/media/news', [PagesController::class, 'news'])->name('media.news');
Route::get('/media/photos-and-videos', [PagesController::class, 'photosAndVideos'])->name('media.photos-and-videos');
Route::get('/media/annual-reports', [PagesController::class, 'annualReports'])->name('media.annual-reports');

// get Involved
Route::get('/get-Involved', [PagesController::class, 'getInvolved'])->name('get-Involved');

// contact us
Route::get('/support', [PagesController::class, 'support'])->name('support');

Route::post('/support', [SupportController::class, 'supportPost'])->name('support.post');

Route::get('/donate', [PagesController::class, 'donate'])->name('donate');

Route::get('/download-profile', [PagesController::class, 'downloadProfile'])->name('download-profile');
Route::get('/download-publication/{publication_id}', [PagesController::class, 'downloadPublication'])->name('download-publication');

//admin

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin-login');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin-logout');
Route::post('/admin/login/process', [AdminController::class, 'loginProcess'])->name('admin-loginProcess');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
Route::get('/admin/publication', [PublicationController::class, 'index'])->name('admin-publication');
Route::post('/admin/publication', [PublicationController::class, 'postPublication'])->name('admin-Postpublication');
Route::get('/admin/category', [PublicationCategoryController::class, 'index'])->name('admin-category');
Route::get('/admin/category/add', [PublicationCategoryController::class, 'addCategory'])->name('admin-category-add');






Route::group(['middleware' => 'auth:sanctum', 'verified'], function() {
    Route::get('/auth/signed-in', [PagesController::class, 'signedIn'])->name('auth.signed-in');
    Route::get('/media/publications/details/{publication_id}', [PagesController::class, 'publicationDetails'])->name('media.publications-details');

});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
