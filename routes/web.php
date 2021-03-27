<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// get Involved
Route::get('/get-Involved', [PagesController::class, 'getInvolved'])->name('get-Involved');

// contact us
Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('contact-us');
