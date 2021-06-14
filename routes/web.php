<?php

use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, AdminController, JournalController};

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
    Route::get('detail-journal/{journal:slug}', [JournalController::class, 'detailJournalView'])->name('detailJournalView');
});

Route::prefix('conference')->name('conference.')->group(function() {
    Route::get('/', [ConferenceController::class, 'index'])->name('index');
    Route::get('detail-conference/{conference:slug}', [ConferenceController::class, 'detailConferenceView'])->name('detailConferenceView');
});

Route::get('/login-admin', function () {
    return view('login-admin');
})->name('loginAdmin');

Route::prefix('admin')->name('admin.')->group(function() {
    // Route::get('/', [JournalController::class, 'index'])->name('index');
    Route::get('data-journal', [AdminController::class, 'adminDataJournal'])->name('adminDataJournal');
    Route::get('data-conference', [AdminController::class, 'adminDataConference'])->name('adminDataConference');
    Route::get('data-journal/list', [AdminController::class, 'getJournals'])->name('adminDataJournal.list');
    Route::get('data-conference/list', [AdminController::class, 'getConferences'])->name('adminDataConference.list');
    // Route::get('data-conference/list', [AdminController::class, 'adminDataConference'])->name('adminDataConference');
    Route::get('add-journal', [AdminController::class, 'adminAddJournal'])->name('adminAddJournal');
    Route::post('add-journal/store', [AdminController::class, 'storeJournal'])->name('storeJournal');
    Route::get('add-conference', [AdminController::class, 'adminAddConference'])->name('adminAddConference');
    Route::get('edit-journal/{journal:slug}', [AdminController::class, 'adminEditJournal'])->name('adminEditJournal');
    Route::get('edit-conference/{conference:slug}', [AdminController::class, 'adminEditConference'])->name('adminEditConference');
});

Route::get('/about', function () {
    return view('about');
});
