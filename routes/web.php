<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\EmailTrackingController;
use App\Jobs\RepushFailedMailJob;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * Email Marketing Route Start
 */

 Route::get('campaign', [CampaignController::class, 'store'])->name('campaign.store');
 Route::get('/track-email-open/{campaign_id}/{token}', [EmailTrackingController::class,'trackEmailOpen'])->name('track-email-open');


 Route::get('repush', function(){
    dispatch( new RepushFailedMailJob());
    return 'done';
 });


/**
 * Email Marketing Route End
 */

require __DIR__.'/auth.php';
