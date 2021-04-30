<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JournalController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('home', [HomeController::class, 'index'])->name('index');

Route::prefix('journal')->name('journal.')->group(function() {
    Route::get('/', [JournalController::class, 'index'])->name('index');
    Route::get('detail-journal', [JournalController::class, 'detailJournalView'])->name('detailJournalView');
});

// Route::prefix('conference')->name('conference.')->group(function() {
//     Route::get('/', [JournalController::class, 'index'])->name('index');
//     Route::get('detail-conference', [JournalController::class, 'detailConferenceView'])->name('detailConverenceView');
// });
