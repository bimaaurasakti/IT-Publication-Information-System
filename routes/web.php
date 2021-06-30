<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\ConferenceController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.   Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('home', [HomeController::class, 'index'])->name('index');

Route::prefix('journal')->name('journal.')->group(function() {
    Route::get('/', [JournalController::class, 'index'])->name('index');
    Route::get('search', [JournalController::class, 'searchJournal'])->name('searchJournal');
    Route::get('detail-journal/{journal:slug}', [JournalController::class, 'detailJournalView'])->name('detailJournalView');
});

Route::prefix('conference')->name('conference.')->group(function() {
    Route::get('/', [ConferenceController::class, 'index'])->name('index');
    Route::get('search', [ConferenceController::class, 'searchConference'])->name('searchConference');
    Route::get('detail-conference/{conference:slug}', [ConferenceController::class, 'detailConferenceView'])->name('detailConferenceView');
});

// Route::get('/login-admin', [LoginController::class, 'index'])->name('loginAdmin');

// Route::prefix('conference')->name('conference.')->group(function() {
//     Route::get('/', [JournalController::class, 'index'])->name('index');
//     Route::get('detail-conference', [JournalController::class, 'detailConferenceView'])->name('detailConverenceView');
// });

Auth::routes();

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    // Route::get('/', [JournalController::class, 'index'])->name('index');
    Route::get('data-journal/list', [AdminController::class, 'getJournals'])->name('adminDataJournal.list');
    Route::get('data-conference/list', [AdminController::class, 'getConferences'])->name('adminDataConference.list');
    // Route::get('data-conference/list', [AdminController::class, 'adminDataConference'])->name('adminDataConference');

    // Route CRUD Journal
    Route::get('data-journal', [AdminController::class, 'adminDataJournal'])->name('adminDataJournal');
    Route::get('add-journal', [AdminController::class, 'adminAddJournal'])->name('adminAddJournal');
    Route::post('add-journal/store', [AdminController::class, 'adminStoreJournal'])->name('adminStoreJournal');
    Route::get('data-journal/{journal:slug}/edit', [AdminController::class, 'adminEditJournal'])->name('adminEditJournal');
    Route::patch('data-journal/{journal:slug}/update', [AdminController::class, 'adminUpdateJournal'])->name('adminUpdateJournal');
    Route::delete('data-journal/{journal:slug}/delete', [AdminController::class, 'adminDeleteJournal'])->name('adminDeleteJournal');

    // Route CRUD Conference
    Route::get('data-conference', [AdminController::class, 'adminDataConference'])->name('adminDataConference');
    Route::get('add-conference', [AdminController::class, 'adminAddConference'])->name('adminAddConference');
    Route::post('add-conference/store', [AdminController::class, 'adminStoreConference'])->name('adminStoreConference');
    Route::get('data-conference/{conference:slug}/edit', [AdminController::class, 'adminEditConference'])->name('adminEditConference');
    Route::patch('data-conference/{conference:slug}/update', [AdminController::class, 'adminUpdateConference'])->name('adminUpdateConference');
    Route::delete('data-conference/{conference:slug}/delete', [AdminController::class, 'adminDeleteConference'])->name('adminDeleteConference');

});

Route::get('/about', function () {
    return view('about');
});
